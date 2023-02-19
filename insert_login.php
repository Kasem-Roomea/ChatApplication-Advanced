
<?php
//object containts information validate 
$info_valdite = (object)[];
$info_profile = (object)[];
//create variabels stor message error
    $error="";
session_start();

        
 //culact data 
sleep(1);
        
    //validate Email ...
        $email= $data_php->email;
              if(empty($data_php->email))
          {
             $error .= "Plase Enter Email ..! .<br>";
          }else
          {
            
              if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-])/",$data_php->email))
              {
                  $error .= "Plase Enter a Valid Email ..! . <br>";
              }
          }
    
    //Valdit password 
        $password = $data_php->password;
              if(empty($data_php->password))
          {
             $error .= "Plase Enter password ..! .<br>";
          }else
          {
            
             if(strlen($data_php->password)<8)
              {
                  $error .= " Password Less Than 8 Char....! .<br>"; 
              }
          }
    
    
    
    //Confirm data in valdate or no validate    
     if($error == "")
        {
     $query = "select * from info_users where email ='$data_php->email'";


           $result = mysqli_query($conn , $query);
           $num = mysqli_num_rows($result);
           $arr_result = mysqli_fetch_array($result);
           if($num>0)
           {
               if($arr_result[5]==$data_php->password){
               $info_profile ->message=" sucssfuly Login... Welcom Whatsup Speed ";
               $info_profile ->data_type_valedat = "sucssfuly";
               $info_profile->username = $arr_result[2];
               $info_profile->email = $arr_result[3];
               $info_profile->userid = $arr_result[1];
                   $query_insert_active = "UPDATE info_users SET active = 1 WHERE email = '$arr_result[3]'";
                   mysqli_query($conn , $query_insert_active);
                   
                  //عند تسجيل الدخول اجراء التعديل على جميع الرسائل المستقبلة وجعلها واحد
                    $sql_check_or_twocheck = "select reseved from messages where resesve = '$arr_result[1]'  ";
                    $result_check_or_twocheck = mysqli_query($conn , $sql_check_or_twocheck);
                    while($arr_check_or_twocheck = mysqli_fetch_array($result_check_or_twocheck))
                    {
                        if($arr_check_or_twocheck[0]==0){
                      $query_message_acess = "UPDATE messages SET reseved = 1 WHERE resesve = '$arr_result[1]'";
                       mysqli_query($conn,$query_message_acess);
                        }else{}
                    }

                   
                    echo json_encode($info_profile);
               }else
               {
               $info_valdite ->message=" password is no valid !! <br>";
               $info_valdite ->data_type_valedat = "error";
               echo json_encode($info_valdite);
               }
           }
           else
           {
               $info_valdite ->message=" Email not found !! <br>";
               $info_valdite ->data_type_valedat = "error";
               echo json_encode($info_valdite);
           }
        }
    else
    {
               $info_valdite ->message = $error;
               $info_valdite ->data_type_valedat = "error";
               echo json_encode($info_valdite);
    }