<?php
session_start();
$info_profile = (object)[];

// if request == session create session is name [userid] 
if ($data_php->data_type2 == "session"){
 $_SESSION['userid'] = $data_php->userid;
}

//if requst == get => get info from database
if ($data_php->data_type2 == "get")
{
    
        if (isset($_SESSION['userid']))
    {
            
      
        
            
         $query = "select * from info_users where user_id ='$_SESSION[userid]'";

           $result = mysqli_query($conn , $query);
           $num = mysqli_num_rows($result);
           $arr_result = mysqli_fetch_array($result);
           if($num>0)
           {     
               $image = "";
               
               //login is found session
               $info_profile->session = "yes";
               
               $info_profile->username = $arr_result[2];
               $info_profile->email = $arr_result[3];
               $info_profile->userid = $arr_result[1];
               
    //check image            
 if(isset($arr_result[6]))
    {
        if(file_exists($arr_result[6]))
        {
            $image = $arr_result[6];
        }else
        {
            if($arr_result[4]=="Male"){$image ="icon/username_image.png";}
            else{$image ="icon/username_gred_image.png";}
        }
    }
               
               
               $info_profile->image = $image;
                echo json_encode($info_profile);
           }

}else
        {
            //convert to login.php becous not found session
            $info_profile->session = "no";
            echo json_encode($info_profile);
        }
    
    
}
if ($data_php->data_type2 == "logout")
{
        //set active in 0 when logiut user 
    //date logout user
    $date = date('h-i-a');
    //update information logout 
           $query_insert_active = "UPDATE info_users SET active = 0 WHERE user_id = '$_SESSION[userid]'";
             mysqli_query($conn , $query_insert_active);
    $query_insert_date = "UPDATE info_users SET date_active = '$date' WHERE user_id = '$_SESSION[userid]'";
             mysqli_query($conn , $query_insert_date);
    
    //logout user
    session_unset();
    echo json_encode("ok logout.....");
}

?>