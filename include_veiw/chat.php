<?php
session_start();
$image2 = "";
$image_chat = "";
$messages_sender = "";
$mydata = "";
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
    $result_sender = mysqli_query($conn , $query_sender);
    
    $arr_chat = mysqli_fetch_array($result_reseve);
    $arr_chat2 = mysqli_fetch_array($result_sender);
    
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

    
      $mydata = "
    <span style = 'color:#bbb'>start chating with:</span><br>
    <div id='contents_chat' >
    
           <img src='$image'>
           <span>$arr_chat[2]</span><br>
           <span id = 'date_last_show' style = 'font-size:10px' ></span>
           </div> ";

 
    
    $messages_sender = "
    
    <div id = 'perant_messages'>
    <div id = 'all_messages' style = 'border:solid thin #888;height:490px;overflow-y:scroll'  >
    "
    ;

              
    

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
        //اذا كان المستقبل شايفها يعطي نجمتين زرق

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
       $messages_sender .=  
           
           "
           </div>
           <div id='message_down' class='message_down_befor' onclick = 'message_down()'></div>
        <div style='display:flex'>
                 
                <svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' style='width:38px;height:32px;opacity:1;border-bottom: solid 3px #8397a7;border-top: solid 3px #8397a7' onclick = 'veiw_media()' >
                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1' />
                    </svg>
                    
                <input type='file' id='file' style= 'display:none' onchange = 'send_image(this.files)'  >
                
                <input type = 'text' id = 'text_message' style = 'flex:6;height:38px;background-color: #fefefefc;;width:90%;font-size:20px;padding:8px;border:solid 3px #8397a7' onkeyup = 'enter_send(event)'>
                
                   
                
                
                
                   <button style = 'flex:1;float:left;height: 38px;border: none;font-size:15px;background-color:#8397a7' onclick ='send_message()'>
                    <svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' style = 'width:30px;hight:30px;color:#000'>
                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13 5l7 7-7 7M5 5l7 7-7 7' />
                    </svg>
                    </button>
            </div> 
        </div>
           
           ";

}
else
{
    $mydata = "<span style = 'color:#bbb' id='check_chat_message'>start chating with:</span><br>";
   $sender = $_SESSION['userid'];
       
   $query_send_chat = "SELECT resesve,message,sender FROM messages WHERE sender = '$sender' || resesve = '$sender' order by id desc";
   $result_send_chat = mysqli_query($conn , $query_send_chat);
    
   $arrays =[];
    $last_show_active2 = "";
    while($arr_send_chat = mysqli_fetch_array($result_send_chat))
    {
      if($arr_send_chat[0] != $sender){
        if(!in_array($arr_send_chat[0] ,$arrays)){
            
        $query_get_info_sender = "select * from info_users where user_id= '$arr_send_chat[0]'";
        
        $array_info_chat = mysqli_fetch_array(mysqli_query($conn , $query_get_info_sender));
            
            
            
            
            
            //أخر ظهور لكل واحد حاكي معو 
               if($array_info_chat[8] == 1 )
                   {
                        $last_show_active2 = "<span style = 'color:greenyellow'>activ now</span>";
                   }
                else 
                    {    
                          $date_now = date("h-i-a");
                             $date_logout = explode("-" , $array_info_chat[9]);
                             $date_now_array = explode("-" , $date_now);
                          
                            $date_logout[0] = (int)$date_logout[0];
                            $date_now_array[0] = (int)$date_now_array[0];
                            $date_logout[1] = (int)$date_logout[1];
                            $date_now_array[1] = (int)$date_now_array[1];



                            if($date_logout[2]==$date_now_array[2])
                            {
                                //التوقيت متساوي
                                    if($date_logout[0]==$date_now_array[0])
                                    {
                                        if($date_now_array[1]>$date_logout[1])
                                           {
                                             $last_show_active2 = $date_now_array[1]-$date_logout[1] . " minutes";
                                           }
                                        else if ($date_now_array[1]==$date_logout[1])
                                                 {
                                                    $last_show_active2 = "since secounds";
                                                 }
                                    }
                                    else
                                    {
                                     //طرح ساعات

                                        $last_show_active2 = $date_now_array[0]-$date_logout[0] . " Hours";
                                    }
                            }
                                else
                                {
                                    //التوقيت مو متساوي
                                    $last_show_active2 =$date_now_array[0]-$date_logout[0] + 12 . " Hours";

                                }
                                       
                                      
                    }
            //ايجاد الصورة لكل محادثة 
            
         if(isset($array_info_chat[6]))
        {
            if(file_exists($array_info_chat[6]))
            {
                $image_chat = $array_info_chat[6];
            }else
            {
                    if($array_info_chat[4]=="Male")
                    {
                        $image_chat ="icon/username_image.png";
                    }
                    else
                    {
                        $image_chat ="icon/username_gred_image.png";
                    }
            }
    }
            //أخر رسالة لكل محادثة 
            $count_letter = strlen ($arr_send_chat[1]);
            if($count_letter<20)
            {
                $last_message = $arr_send_chat[1];
            }
            else
            {
                $last_message = substr($arr_send_chat[1] ,0 , 20) . "....";
            }
            
            //اللوغ الكامل للمحادثة 
            $mydata .= "
    <div id='contents_chat' onclick = 'go_chat(event)' userid='$arr_send_chat[0]'  onclick ='open_section(event)'>
           <img src='$image_chat'>
           <span>$array_info_chat[2]</span>
           <br>
            <span style = 'font-size:14px;color:#000;text-shadow: none;'>$last_message</span><br><br>
            <span id = 'date_last_show2' style = 'font-size:10px' >$last_show_active2</span>
           </div> <br>";
            array_push($arrays , $arr_send_chat[0]);
        }
      }
        else if($arr_send_chat[2] != $sender){
        
        if(!in_array($arr_send_chat[2] ,$arrays))
        {
           $query_get_info_sender = "select * from info_users where user_id= '$arr_send_chat[2]'";
        
        $array_info_chat = mysqli_fetch_array(mysqli_query($conn , $query_get_info_sender));
            
            
                           if($array_info_chat[8] == 1 )
                   {
                        $last_show_active2 = "<span style = 'color:greenyellow'>activ now</span>";
                   }
                else 
                    {    
                          $date_now = date("h-i-a");
                          $date_logout = explode("-" , $array_info_chat[9]);
                            $date_now_array = explode("-" , $date_now);
                    
                            $date_logout[0] = (int)$date_logout[0];
                            $date_now_array[0] = (int)$date_now_array[0];
                            $date_logout[1] = (int)$date_logout[1];
                            $date_now_array[1] = (int)$date_now_array[1];



                            if($date_logout[2]==$date_now_array[2])
                            {
                                //التوقيت متساوي
                                    if($date_logout[0]==$date_now_array[0])
                                    {
                                        if($date_now_array[1]>$date_logout[1])
                                           {
                                             $last_show_active2 = $date_now_array[1]-$date_logout[1] . "minutes";
                                           }
                                        else if ($date_now_array[1]==$date_logout[1])
                                                 {
                                                    $last_show_active2 = "since secounds";
                                                 }
                                    }
                                    else
                                    {
                                     //طرح ساعات

                                        $last_show_active2 = $date_now_array[0]-$date_logout[0] . " Hours";
                                    }
                            }
                                else
                                {
                                    //التوقيت مو متساوي
                                    $last_show_active2 =$date_now_array[0]-$date_logout[0] + 12 . " Hours";

                                }
                                       
                                      
                    }
        
         if(isset($array_info_chat[6]))
        {
            if(file_exists($array_info_chat[6]))
            {
                $image_chat = $array_info_chat[6];
            }else
            {
                    if($array_info_chat[4]=="Male")
                    {
                        $image_chat ="icon/username_image.png";
                    }
                    else
                    {
                        $image_chat ="icon/username_gred_image.png";
                    }
            }
    }
                 $count_letter = strlen ($arr_send_chat[1]);
            if($count_letter<20)
            {
                $last_message = $arr_send_chat[1];
            }
            else
            {
                $last_message = substr($arr_send_chat[1] ,0 , 20) . "....";
            }
            $mydata .= "
    <div id='contents_chat' onclick = 'go_chat(event)' userid='$arr_send_chat[2]'  onclick ='open_section(event)'>
           <img src='$image_chat'>
           <span>$array_info_chat[2]</span>
           <br>
            <span style = 'font-size:14px;color:#000;text-shadow: none'>$last_message</span><br><br>
            <span id = 'date_last_show2' style = 'font-size:10px'>$last_show_active2</span>
           </div> <br>";
            array_push($arrays , $arr_send_chat[2]);
        }
        
    }
    }
    
}

$data_view_send->messages = $messages_sender;
$data_view_send->data_veiw = $mydata;
$data_view_send->scroll = "scroll";
$data_view_send->data_type = "chat";
echo json_encode($data_view_send);