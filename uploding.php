<?php
$info = (object)[];
//check files is found and empty
if(isset($_FILES['file']) && $_FILES['file']['name']!="")
{
    //check file exists error
    if($_FILES['file']['error']==0){
        $folder = "upload_image/";
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

//save image on database
session_start();
include("config.php");
$query = "update info_users set image = '$gool' where user_id = '$_SESSION[userid]'";
$result =mysqli_query($conn,$query);
if($result)
{
   $info->message ="uploaded image Sucssfaly .... OK "; 
   $info->data_type_save ="sucssafly "; 
}
else
{
     $info->message ="uploaded image error";
     $info->data_type_save ="error"; 
}


//send to index.php
echo json_encode($info);



