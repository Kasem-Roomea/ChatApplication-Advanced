<?php
sleep(2);
$data = (object)[];
session_start();


//get info my profile from database
$query = "select * from info_users where user_id ='$_SESSION[userid]' limit 1";
$result = mysqli_query($conn , $query);
$arr_data = mysqli_fetch_array($result);
if($result)
{
    $image = "";
    $check = "";
    $check1 = "";
        if(isset($arr_data[6]))
    {
        if(file_exists($arr_data[6]))
        {
            $image = $arr_data[6];
             if($arr_data[4]=="Male")
            {
                $check = "checked";
            }
            if($arr_data[4]=="Female")
            {
                $check1 = "checked";
            }
        }else
        {
            if($arr_data[4]=="Male")
            {
                $image ="icon/username_image.png";
                $check = "checked";
            }
            if($arr_data[4]=="Female")
            {
                $image ="icon/username_gred_image.png";
                $check1 = "checked";
            }
        }
    }
    
$mydata = '
    <style>
    
 @keyframes anmi 
{
    0%{opacity:0 ; transform: translateX(100%) }
    100%{opacity:1 ; transform: translateX(0%) }
    
}
        form
        {
            width: 100%;
            max-width: 500px;
            margin: auto;
            padding: auto;
            
        }
        input[type="text"] , input[type="password"] , input[type="button"]
        {
            width:300px;
            height: 40px;
            border: solid 1px grey;
            border-radius: 5px;
            margin: 20px;
           
            padding: 10px;
            transition: all 0.5s ease-in-out;
            outline: none;
            font-size: 18px;    
        }
        input[type="text"]:focus ,input[type="password"]:focus
        {
            box-shadow: 2px 2px 10px #001b4b,
                        -2px -2px 10px #001b4b;
        }
        ::placeholder
        {
            opacity: 0.7;
        }
        input[type="radio"] 
        {
            transform: scale(1.2);
            cursor: pointer;
            outline: none;
        }
        input[type="button"]
        {
            background-color: #97cadb;
            color: white;
            cursor: pointer;
            width:300px;
            font-size: 18px;
            outline: none;
            transition:all 0.5s ease-in-out;
            border: none;
            box-shadow:2px 2px 15px #aaa; 
        }
        input[type="button"]:hover
        {
            background-color: #47cadb
        }
        #radio_multi
        {
            margin:10px;
            padding:0px;
            color: grey;
        }
        
        #error
        {
            width: 100%;
            height: auto;
            margin: 0px;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: white;
            background-color: #ecaf91;
            display: none;
            transition: 1s;
        }
        #button_chang_image
        {
            background-color: #97cadb;
            color: white;
            cursor: pointer;
            width:250px;
            font-size: 18px;
            outline: none;
            transition:all 0.5s ease-in-out;
            border: none;
        }
        #button_chang_image:hover
        {
            background-color: #47cadb;
        }

    </style>
    
    
            <div id="error"></div>
            <div style = "display:flex ;animation: anmi 1s ease">
            <div style = "margin:0px" >
            <img src = '.$image.' style="width:250px;height:250px;margin:10px" ondragover = "drag_image(event)" ondragleave = "drag_image(event)" ondrop = "drag_image(event)">
            <lable id = "button_chang_image" style="display: inline-block;background: #97cadb;border-radius: 5px;padding: 10px ; width:220px ; cursor: pointer;" onclick = "click_file()" >Chang Image
            <input type="file" name="chang_image_name" id="chang_image" style="display: none" onchange = "upload_image(this.files)" >
            </lable>
                

            </div>
                <form id="myform">
                    <input type="text" name="username"  value = '.$arr_data[2].' placeholder="User Name" required><br>
                    <input type="text" name="email" value = '.$arr_data[3].' placeholder="Email" required><br>
                    <div id="radio_multi">
                    <br><span style = "color:#000;margin-right:245px;">Gread:</span><br>
                      <input type="radio" name="radio_gread_male" value="Male" id="radio_check" onclick = "radio_checked()"
                      '.$check.'> <span style = "color:#000" >Male</span> <input type="radio" name="radio_gread_female" value="Female" id="radio_check2"  onclick = "radio_checked1()" '.$check1.' > <span style = "color:#000">Female</span> 
                    </div>  
                    <input type="password" value = '.$arr_data[5].' name="password" placeholder="password"><br>
                    <input type="password" value = '.$arr_data[5].' name="password1" placeholder="Confirm Password"><br>
                    <input type="button" name="save" value="Save Settings" id="save" onclick = "culct_data()"><br>
                    <br>
                </form>
            </div>
    

';
    
}else
{
    $mydata = "Can Not Access To Data Personal...plase Try Agin";
}
$messages = "";
$data->data_veiw = $mydata;
$data->messages = $messages;
echo json_encode($data);

