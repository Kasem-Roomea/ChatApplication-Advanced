<?php
//get information to php with ajax =>
$data_json = file_get_contents("php://input");
//convert data to php 
$data_php= json_decode($data_json);

include("config.php");
//____________________________

//insert information to data base =>
if(isset($data_php->data_type) and $data_php->data_type == "singup")
{
    include("insert_singup.php");
}

//____________________________
if(isset($data_php->data_type) && $data_php->data_type == "login")
{
    include("insert_login.php");
}
//----------------------------
if(isset($data_php->data_type) && $data_php->data_type == "username")
{
    include("get_info_user.php");
}
//----------------------------
if(isset($data_php->data_type) && $data_php->data_type == "settings")
{
    include("include_veiw/settings.php");
}
//----------------------------
if(isset($data_php->data_type) && $data_php->data_type == "contacts")
{
    include("include_veiw/contacts.php");
}
//----------------------------
if(isset($data_php->data_type) && $data_php->data_type == "chat")
{
    include("include_veiw/chat.php");
}
//----------------------------
if(isset($data_php->data_type) && $data_php->data_type == "save_data")
{
    include("include_save/save_data.php");
}
//----------------------------
 if(isset($data_php->data_type) && $data_php->data_type == "send_message")
 {
    include("include_veiw/send_message.php");
 }
//----------------------------
 if(isset($data_php->data_type) && $data_php->data_type == "chatupdate")
 {
    include("include_veiw/chatupdate.php");
 }

function reight_message($array_info,$array_send)
{
    $active =  "darkslategrey";
    if($array_info[8] == 1)
    {
        $active = "greenyellow";
    }
    $message = "<div id='reight_message' >
                   <img src='$array_info[10]'>
                   <div id = 'active_now' style='background-color:$active ;border: solid thin #fff'></div>
                   <span>$array_info[2]</span>
                   <br>";
                   if($array_send[5] != '')
                   {
                        $message .= "<img src = '$array_send[5]' style = 'width:300px ; height : 400px ; border-radius: 0% ; float:none'>
                   <br><br>";
                   }else
                   {
                      $message .=  "<p>$array_send[4]</p><br>";
                   }
                  $message .= "<span id='date'>$array_send[6]</span>
                   </div>";
    return $message;
}
function left_message($array_info,$array_send)
{
        $active =  "darkslategrey";
    if($array_info[8] == 1)
    {
        $active = "greenyellow";
    }
    $message = "<div id='left_message' >
                   <img src='$array_info[10]'>
                   <div id = 'active_now' style='background-color:$active ;border: solid thin #fff'></div>
                   <span>$array_info[2]</span>
                   <br>";
                   if($array_send[5] != '')
                   {
                        $message .= "<img src = '$array_send[5]' style = 'width:300px ; height : 400px ; border-radius: 0% ; float:none'>
                   <br><br>";
                   }else
                   {
                      $message .=  "<p>$array_send[4]</p><br>";
                   }
                   $message .= $array_send[8];
                  $message .= "<span id='date'>$array_send[6]</span>
                   </div>";
    return $message;
}  





?>