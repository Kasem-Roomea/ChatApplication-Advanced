<?php
session_start();
$image2 = "";
$messages_sender = "";
$data_update = "";
$data_view_send = (object)[];



if(isset($data_php->find->data_send->reseve))
{

   $reseve = $data_php->find->data_send->reseve;
   $sender = $_SESSION['userid'];
    
        $query_message_acess = "UPDATE messages SET reseved = 2 WHERE resesve = '$sender' && sender = '$reseve'";
     mysqli_query($conn , $query_message_acess);
 $query_sender = "select * from info_users where user_id='$sender'";
 $query_reseve = "select * from info_users where user_id='$reseve'";
    
    $result_reseve = mysqli_query($conn , $query_reseve);
    $result_sender = mysqli_query($conn , $result_sender );
    
    $arr_chat = mysqli_fetch_array($result_reseve);
    $arr_chat2 = mysqli_fetch_array($result_sender);
    
    
    $date_table = $arr_chat[9];
        if(isset($arr_chat[6]))
    {
        if(file_exists($arr_chat[6]))
        {
            $image = $arr_chat[6];
        }else
        {
            if($arr_chat[4]=="Male")
            {
                $image ="icon/username_image.png";
            }
            else
            {
                $image ="icon/username_gred_image.png";
            }
        }
            $arr_chat[10] = $image;
    }
    
    
           if(isset($arr_chat2[6]))
    {
        if(file_exists($arr_chat2[6]))
        {
            $image2 = $arr_chat2[6];
        }else
        {
            if($arr_chat2[4]=="Male")
            {
                $image2 ="icon/username_image.png";
            }
            else
            {
                $image2 ="icon/username_gred_image.png";
            }
        }
            $arr_chat2[10] = $image2;
    }
    
    
$sql_send = "select * from messages where sender = '$sender' && resesve ='$reseve' || sender = '$reseve' && resesve ='$sender' ";
$result_send = mysqli_query($conn , $sql_send);

    
              
    

while($arr_send = mysqli_fetch_array($result_send)){
    //اذا كان المستقبل متصل يعطي انجمة الخضرة
       if($arr_send[8]==0)
    {
        $arr_send[8] = "<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' style = 'width: 20px;height:20px;border: none;border-radius:50%;position: absolute;left:280px;bottom:2px;color:#000'>
  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z' />
</svg>";
    }
        //اذا كان المستقبل متصل يعطي انجمة السودة

    else if($arr_send[8]==1)
    {
        $arr_send[8] = "<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' style = 'width: 20px;height:20px;border: none;border-radius:50%;position: absolute;left:280px;bottom:2px;color:#adff2f'>
  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z' />
</svg>";
    }
    else if($arr_send[8]==2){
                $arr_send[8] = "<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' style = 'width: 20px;height:20px;border: none;border-radius:50%;position: absolute;left:280px;bottom:2px;color:#adff2f'>
  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z' />
</svg>
 <svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' style = 'width: 20px;height:20px;border: none;border-radius:50%;position: absolute;left:260px;bottom:2px;color:#adff2f'>
  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z' />
</svg>";
    }
       if($arr_send[2]==$sender)
    {
        $messages_sender = $messages_sender . left_message($arr_chat2,$arr_send);
    }
    else if($arr_send[2]==$reseve)
    {
       $messages_sender = $messages_sender . reight_message($arr_chat,$arr_send); 
    }
}



}

$data_view_send->messages = $messages_sender;
$data_view_send->scroll = "";
$data_view_send->data_update ="update" ;
$data_view_send->date_last = $date_table;
$data_view_send->date_now = date("h-i-a");
$data_view_send->active_or_no = $arr_chat[8];




echo json_encode($data_view_send);