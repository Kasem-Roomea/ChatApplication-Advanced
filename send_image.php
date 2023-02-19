<?php
session_start();
include("config.php");
$info = (object)[];
//check files is found and empty
if(isset($_FILES['file']) && $_FILES['file']['name']!="")
{
    //check file exists error
    if($_FILES['file']['error']==0){
        $folder = "image_sender/";
// if not exists => create folder
if(!file_exists($folder))
{
    mkdir($folder , "0777" , true);
}
        
//creat path image        
$gool = $folder . $_FILES['file']['name'];

// transfer image from tebrary to along path       
move_uploaded_file( $_FILES['file']['tmp_name'] , $gool);
        
    }
}

 function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*)(_+';
        $randstring = '';
        for ($i = 0; $i < 15; $i++) {
            $randstring .= $characters[rand(0, strlen($characters)-1)];
        }
        return $randstring;
    }

$reseve = $_POST['reseve'];
$msgid = RandomString(); 
$sender = $_SESSION['userid'];
$message = "";
$date = date('h:i a');

$sql_send_insert = "INSERT INTO `messages`(`msgid`, `sender`, `resesve`, `message`, `files`, `date`, `seen`, `reseved`, `deleted_sender`, `deleted_resever`) VALUES ('$msgid','$sender','$reseve','$message','$gool','$date','0','0','0','0')";

$result = mysqli_query($conn , $sql_send_insert);


