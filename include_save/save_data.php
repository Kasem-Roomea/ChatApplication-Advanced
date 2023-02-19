<?php
session_start();
//object containts information validate 
$info_saving = (object)[];
//create variabels stor message error
    $error="";

        
 //culact data 
        sleep(1);
    
    //validate user name ...
        $username = $data_php->username;
          if(empty($data_php->username))
          {
             $error .= "Plase Enter Username ..! .<br>";
          }else
          {
              if(strlen($data_php->username)<5)
              {
                  $error .= "Username Not Valid....! .<br>"; 
              }
              if(!preg_match("/^[a-z A-Z -]*$/",$data_php->username))
              {
                  $error .= "Plase Enter a Valid Username ..! . <br>";
              }
          }
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
        $password1 = $data_php->password1;
              if(empty($data_php->password))
          {
             $error .= "Plase Enter password ..! .<br>";
          }else
          {
            
             if(strlen($data_php->password)<8)
              {
                  $error .= " Password Less Than 8 Char....! .<br>"; 
              }
             if($data_php->password != $data_php->password1)
              {
                  $error .= "Password Not Mutch is Confirm ...!"; 
              }
          }
        $gread = $data_php->gread;

    //Confirm data in valdate or no validate    
     if($error == "")
        {
            $query = "UPDATE info_users SET username = '$username',  email ='$email' , gender='$gread' ,  password='$password' WHERE user_id = '$_SESSION[userid]' ";


           $result = mysqli_query($conn , $query);
           if($result)
           {
               $info_saving ->message="OK...Save Your Data  ";
               $info_saving ->data_type_save = "sucssfuly";
                echo json_encode($info_saving);
           }
           else
           {
               $info_saving ->message=" Save Data Error...Try Agin  <br>";
               $info_saving ->data_type_save = "error";
               echo json_encode($info_saving);
           }
        }
    else
    {
               $info_saving ->message = $error;
               $info_saving ->data_type_save = "error";
               echo json_encode($info_saving);
    }