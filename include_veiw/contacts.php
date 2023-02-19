<?php
sleep(2);
session_start();
$data = (object)[];


//get all users
$query = "select * from info_users limit 10";
$result = mysqli_query($conn , $query);

//creat list contacts 
$mydata = "<div id='contents' style = 'animation: anmi 1s ease'>";
while($arr_contacts = mysqli_fetch_array($result))
{

    //check image contacts 
    if(isset($arr_contacts[6]))
    {
        if(file_exists($arr_contacts[6]))
        {
            $image = $arr_contacts[6];
        }else
        {
            if($arr_contacts[4]=="Male")
            {
                $image ="icon/username_image.png";
            }
            else
            {
                $image ="icon/username_gred_image.png";
            }
        }
    }
    
// check my profile becouse can not veiw my profile on contacts !!    
if($arr_contacts[1]!= $_SESSION['userid'])
{    
$mydata .= "<div id='contents_image' onclick = 'go_chat(event)' onclick = 'open_section(event)' userid='$arr_contacts[1]' >
           <img src='$image'>
           <br>
           <span>$arr_contacts[2]</span>
           </div>";
           
}
}
$mydata .=  "</div>";
$messages = "";
$data->data_veiw = $mydata;
$data->messages = $messages;

//send to index.php
echo json_encode($data);






?>