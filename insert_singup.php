   
<?php

//object containts information validate 
$info_valdite = (object)[];
//create variabels stor message error
    $error="";
    //generat user id 
    $random=0;
    for($i=0 ; $i<10 ; $i++ )
    {
        $rand = rand(0,50);
        $random .=$rand;
    }
    //conect for datatbase 
       include("config.php");
        
 //culact data 
        sleep(1);
        $userid = $random;
        $date = date('yy/m/d h:m:s');
    
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
              if(!preg_match("/^[a-z A-Z]*$/",$data_php->username))
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
            $query = "INSERT INTO info_users(`user_id`, `username`, `email`,`gender`, `password`, `date`) value('$userid','$username','$email','$gread','$password','$date') ";


           $result = mysqli_query($conn , $query);
           if($result)
           {
               $info_valdite ->message="Created Profile ... Welcom Whatsup Speed ";
               $info_valdite ->data_type_valedat = "sucssfuly";
                echo json_encode($info_valdite);
           }
           else
           {
               $info_valdite ->message="The Profail Is Not Created ... Mutch Information Database!! <br>";
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