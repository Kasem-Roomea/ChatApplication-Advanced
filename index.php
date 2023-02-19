ٍ<html>
    <head>
    <meta charset="utf-8">
    <style>
        
 @keyframes anmi 
{
    0%{opacity:0 ; transform: translateY(100%) }
    100%{opacity:1 ; transform: translateY(0%) }
    
}
        #perant
        {
            min-height: 500;
            max-height: 680px;
            max-width: 1100px; 
            display: flex;
            margin: auto;   
            
        }
       
         #inner_left
        {
            min-height: 500px;
            max-height: 680px;
            background-color:#8397a7;
            flex: 1;
            text-align: center;
            color: white;
            font-size: 13px;
        }
        #child_left #profile_image
        {
            width: 120px;
            height: 120px;
            border: solid 2px rgba(255,255,255,0.6);
            border-radius: 50%;
            margin: 5px 60px;
        }
        #child_left h3
        { 
             font-family:serif;
            font-size: 20px;
        }
        #child_left p
        {
            font-family: monospace;
            opacity: 0.6;
            font-size: 15px;
        }
        #sidbar_chat
        {
            text-align: center;
            padding: 5px;
        }
        #sidbar_chat label
        {
            display: block;
            background-color:#404b56;
            width: 100%;
            height: 30px;
            border-bottom: solid thin #ffffff77;
            padding: 4px;
            line-height: 30px;  
            cursor: pointer;
            transition: all 1.5s;
            font-weight: bold;
        }
        #sidbar_chat label:hover
        {
            background-color:#778593;
        }
        #sidbar_chat label svg
        {
           width: 35px;
            height: 35px;
            border-radius: 50%;
            float: right;
            color: #216973;
            opacity: 1;
            outline: none;
            border:none;
        }
        #sidbar_chat label:hover svg
        {
            box-shadow: 2px 2px 15px #eee;
            border: none;   
        }
         #inner_reight
        {
            min-height: 500px;
            flex: 4;
            
        }
        #header
        {
            height: 70px;
            width: 100%;
            background-color: #8397a7;
            text-align: center;
            font-size: 35px;
            line-height: 70px;
            font-family:monospace; 
            letter-spacing: 2px;
            transition: 1s;
            text-shadow: 4px 4px 10px #000;
            color: #001b4b;
            position: relative;
        }
        #header:hover
        {
            letter-spacing: 6px;
        }
        #contenar
        {
            display: flex;
            max-height: 600px;
        }
        #cont_left
        {
            min-height: 530px;
            max-height: 600px;
            background-color:  #216973;
            flex: 1;
            text-align: center;
            overflow-y: auto;
        }
        #cont_reight
        {
            min-height:430px;
            max-height:600px;
            background-color:#fff;
            flex: 2;
            transition: all 2s ease;
        }
        
        #check_contenar:checked ~ #cont_reight
        {
            flex: 0;
        }
        #check_settings:checked ~ #cont_reight
        {
            flex: 0;
        }
        #contents
        {
            text-align: center;
        }
        #contents_image
        {
            width: 100px;
            height: 120px;
            margin: 15px;
            vertical-align: top;
            display: inline-block;
        }
       #contents_image img
        {
            width: 100px;
            height: 100px;
        }
        span
        {
            color: white;
        }
        .loding_on
        {
            position: absolute;
            height: 100%;
            width: 18%;
        }
        .loding_off
        {
            position: absolute;
            height: 100%;
            width: 18%;
            display: none;
            
        }
        #loding img
        {
            width: 70px;
        }
        
        .drag_border
        {
            border: dashed 2px #eee;
        }
        #contents_image
        {
            cursor: pointer;
            transition: all 0.8s ease-in-out;
        }
        #contents_image:hover
        {
            transform: scale(1.2);
        }
        #contents_chat
        {
            height: 80px;
            padding: 0px;
            border: solid thin #aaa;
            background: #47858e;
            color: #FFF;
        }
        #contents_chat img 
        {
            height: 80px;
            float: left;
            margin: 0px;
            width: 80px;

        }
        #contents_chat span{color: #FFF;text-shadow: 0px 0px 8px #000;}
        
        #left_message
        {
            width: 60%;
            height: auto;
            padding: 2px;
            padding-right: 0px;
            background: #356369;
            border-radius: 40px 50px 50px 5px ;
            border: solid 1px #fff;
            margin-left: 3px;
            margin-top: 3px;
            color: #000;
             position: relative;
            text-align: left;
            float: left;
            word-wrap: break-word;
        }
        #left_message img 
        {
            height:60px;
            width:60px;
            float: left;
            border-radius: 50%;
            margin-right: 10px; 
           
        }
        #left_message span
        {
            color: #fff;
            font-weight: bolder;
            margin-left: 60px;
            font-size: 12px;  
             text-shadow:0px 0px 2px #fff;
            
        }
        #left_message p
        {
            color:aliceblue;
        }
         #left_message div
        {
            width: 15px ;
            height: 15px ;
            border-radius: 50%;
            position: absolute;
            top: 44px;
            left: 5px;
            z-index: 2;
           
        }    
         #left_message #date
        {
            margin: 0px;
           margin-right:0px;
            text-shadow:0px 0px 0px #ddd;
            
        }
        
        #reight_message
        {
            width: 60%;
            height: auto;
            padding: 2px;
            padding-right: 0px;
            background: #acc3d6;
            border-radius: 50px 35px 5px 50px ;
            border: solid 1px #fff;
            margin-left: 3px;
            margin-top: 3px;
            color: #000;
            position: relative;
            margin-right: 0px;
            text-align:right;
            float: right;
            word-wrap: break-word;
        }
        #reight_message img 
        {
            height:60px;
            width:60px;
            float:right;
            border-radius: 50%;
            margin-left: 15px; 
            
           
        }
        #reight_message span
        {
            color: rgba(0,0,0,0.8);
            font-weight: bolder;
            margin-right:60px;
            font-size: 14px;
            text-shadow: 0px 0px 3px #000;
        }
        #reight_message #date
        {
            margin: 0px;
            margin-right: 0px;
            text-shadow:0px 0px 0px #ddd;
            
        }
         #reight_message div
        {
            width: 15px ;
            height: 15px ;
            border-radius: 50%;
            position: absolute;
            top: 44px;
            left: 278px;
            z-index: 2;
        }
        .message_down_befor
        {
                display: none;
        }
        .message_down_after
        {
            width: 30px;
            height: 30px;
            border: none;
            border-radius: 50%;
            background-color: #fff;
            position: fixed;
            bottom: 104px;
            right: 100px;
            display: block;
            color: #fff;
            z-index: 3;
            background-image:url(icon/sahem_down.png);
            background-repeat: no-repeat;
            background-size: 100%;
            border: solid 1px #ccc;
            box-shadow: 0px 0px 6px #000;
            
            
        }
    </style>
    
    </head>
    
    <body>
        <div id="perant">
             <div id="inner_left">
                 <div id="child_left">
                     <img src="icon/username_image.png" id="profile_image">
                     <br>
                     <h3 id="username">UserName</h3>
                     <p id="email">Email@gamil.com<p>
                     <br>
                     
                     <div id="sidbar_chat">
                         <label for="check_chat" id="chat_veiw">Chat 
                             
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"                       fill="currentColor">
                               <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                              <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                            </svg>
                         </label>
                         
                         <label for="check_contenar" id="contacts_veiw">Contacts
                             
                             
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                         </label>
                         <label for="check_settings" id="settings_veiw">Settings
                             
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                         </label>
                                                  
                         <label id="logout" for="button_id">Logout
                             <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                             </svg>
                         </label>
                         <input type="button" id="button_id" style="float:reight;display:none">
                         
                     </div>
                     
                 </div>
     
             </div>
            
            
            <div id="inner_reight">
           
                
                <div id="header">
                    <div class="loding_off" id="loding"><img src="icon/loding.gif"></div>
                   WhatsUp Speed
                </div>
                
                
                <div id="contenar">
                    
                     <div id="cont_left">

                     </div>
                    
                    
                    <input type="radio" id="check_contenar" name="myradios" style="display:none">
                    <input type="radio" id="check_settings" name="myradios" style="display:none">
                    <input type="radio" id="check_chat" name="myradios" style="display:none">


                    <div id="cont_reight">
                        
                    </div>
                </div>
                 
            </div>
           
        </div>
    </body>
</html>


<script>
    
//get data to index.php with ajax => output file.php
var CURRENT_CHAT_USER = "";
var username = document.getElementById("username");
var email = document.getElementById("email");
var image = document.getElementById("profile_image");    
    
    
    function  get_info()
    {
    var ajax = new XMLHttpRequest();
    
    ajax.onload= function kase()
    {
        if(ajax.status==200 || ajax.readyState==4)
        {
          result_user(ajax.responseText);
        }
        else
        {
            prompt("can not response  is the server ??");
        }
    }
    var user = {};
    user.data_type = "username";
    user.data_type2 = "get";
    var user_name = JSON.stringify(user);
    ajax.open("POST","file.php",true);
    ajax.send(user_name);
    }
    
    function result_user(result)
    {
       var info_user = JSON.parse(result);
        if(info_user.session =="yes" ){
            email.innerHTML = info_user.email;
            username.innerHTML = info_user.username;
            image.src = info_user.image;
            
        }else
        {
              window.location = "login2.php";
        } 
        
        }
    window.onload = get_info();
    var logout = document.getElementById("button_id"); 
    
    //logout user 
   logout.onclick = function()
   {
       var conf = confirm("Are you want logout profile ?");
       if(conf)
          {
            var log = new XMLHttpRequest();
        log.onload = function(){      
            if(log.readyState ==4 || log.status ==200)
               {
                    alert(log.responseText());
               } 
        }
              var out_info = {};
              out_info.data_type = "username";
              out_info.data_type2 = "logout";
              out_info = JSON.stringify(out_info);
              log.open("POST" , "file.php" , true);
              log.send(out_info);
            window.location = "login2.php";
          }else
          {
            //no thing
          }
   }
   
   
    //get element veiw
   var settings = document.getElementById("settings_veiw");
   var contacts = document.getElementById("contacts_veiw");
   var chat = document.getElementById("chat_veiw");
    

    //function centraly 
    function get_veiw(find,type)
    {
        var veiw = new XMLHttpRequest();
        var load = document.getElementById("loding");
        if(type != "chatupdate")
           {
              load.className = "loding_on";
           }
        
        veiw.onload = function()
    {
        if(veiw.readyState == 4 || veiw.status==200)
        {
             load.className = "loding_off";
            //alert(veiw.responseText);
             result_veiw(veiw.responseText);
              
        }
            
    }
        var data_veiw ={};
        data_veiw.data_type= type;
        var cont_reight = document.getElementById("cont_reight");
            if(data_veiw.data_type=="contacts" || data_veiw.data_type=="settings")
           {
                   cont_reight.style.overflow="hidden";
           }
        else
        {
                   cont_reight.style.display="visible";
        }
        
        data_veiw.find = find;
        data_veiw_string = JSON.stringify(data_veiw);
        veiw.open("POST","file.php",true);
        veiw.send(data_veiw_string);
    }
    
    //function result view
    
    function result_veiw(result){
        var info_view = JSON.parse(result);
        var cont_left = document.getElementById("cont_left");
        
        
                if(info_view.data_update == "update")
        {
            var update_left = document.getElementById("all_messages");
            if(update_left)
            {
                 update_left.innerHTML = info_view.messages;
                
                //أخر ظهور للمستخدم
                
                
                //التاكد من انو مو متصل
                    if(info_view.active_or_no == 1 )
                   {
                       
                        var date_last_show = document.getElementById("date_last_show");
                       date_last_show.innerHTML = "<span style = 'color:greenyellow'>activ now</span>";
                   }
                    else
                   {    
                       if(info_view.date_last)
                          {
                             var date_logout = info_view.date_last.split("-");
                            var date_now_array = info_view.date_now.split("-");
                         
                    
                            date_logout[0] = Number(date_logout[0]);
                            date_now_array[0] = Number(date_now_array[0]);
                            date_logout[1] = Number(date_logout[1]);
                            date_now_array[1] = Number(date_now_array[1]);
                
                
                
                if(date_logout[2]==date_now_array[2])
                {
                    //التوقيت متساوي
                    if(date_logout[0]==date_now_array[0])
                    {
                        if(date_now_array[1]>date_logout[1])
                           {
                            var last_show_active = date_now_array[1]-date_logout[1] + " minutes";
                           }
                        else if (date_now_array[1]==date_logout[1])
                                 {
                                    var last_show_active = "since secounds";
                                 }
                        
                    }else
                    {
                     //طرح ساعات
                        
                        var last_show_active = date_now_array[0]-date_logout[0] + " Hours";
                    }
                }
                else
                {
                    //التوقيت مو متساوي
                    var last_show_active =date_now_array[0]-date_logout[0] + 12 + " Hours";
                    
                }
                    var date_last_show = document.getElementById("date_last_show");
                    date_last_show.innerHTML = last_show_active;
                       
                   }
                }    
                    
                }
            }
            
       
        else
        {
        cont_left.innerHTML = info_view.data_veiw;
        cont_reight.innerHTML = info_view.messages;
        }
         if(info_view.scroll == "scroll")
        {
            var all_messages = document.getElementById('all_messages');
                if(all_messages)
                   {
                     all_messages.scrollTo(0,all_messages.scrollHeight);
                        var focus = document.getElementById("text_message");
                   }
                if(focus)
                   {
                     focus.focus();
                   }
        } 
        if(info_view.data_update == "update")
        {    
                var all_messages = document.getElementById('all_messages');
                if(all_messages)
                {
                    var top = Math.round(all_messages.scrollTop);
                        if(top < all_messages.scrollHeight - 490)
                           {
                               var message = document.getElementById("message_down");
                               message.className = "message_down_after";


                           } 
                        else
                           {
                                var message = document.getElementById("message_down");
                               all_messages.scrollTop = all_messages.scrollTop + 150;
                                message.className = "message_down_befor";

                           }
                }
                 
            
        }
           
    }
    
       //start click view function
    settings.onclick = function get_settings()
    {
        get_veiw({},"settings");
    }
    contacts.onclick = function get_contacts()
    {
        get_veiw({},"contacts");
        
    }
    chat.onclick = function get_chat()
    {
        get_veiw({},"chat");
    }
    
    
    
    

</script>

<script>
    
    
//select one answer in radio auto
  function radio_checked()
{
     var radio = document.getElementById("radio_check");
     var radio2 = document.getElementById("radio_check2");
    if(radio.checked)
    {
        radio2.checked=false;
    } else 
    {
         radio2.checked=true;
    }
} 
  function radio_checked1 ()
{
     var radio = document.getElementById("radio_check");
     var radio2 = document.getElementById("radio_check2");
    if(radio2.checked)
    {
        radio.checked=false;
    } else 
    {
         radio.checked=true;
    }
}

    

    
//function stor data input_form on variabls Object (data[])
   function culct_data()
                                   {
                                       
     var button_save = document.getElementById("save");                                   
    button_save.disabled = true;
    button_save.value = "Loding...Plase Wait";
       var myform = document.getElementById("myform");
       var inputs = document.getElementsByTagName("input");
        var data = {};
        for(var i = 0 ; i<inputs.length ; i++)
        {
            var name_input = inputs[i].name;
        switch(name_input)
        {
            case "username":
                data.username = inputs[i].value;
                break;
            case "email":
                data.email = inputs[i].value;
                break;
            case "password":
                data.password = inputs[i].value;
                break;
             case "password1":
                data.password1 = inputs[i].value;
                break;
             case "radio_gread_male":
             case "radio_gread_female":
                 
                if(inputs[i].checked){
                data.gread = inputs[i].value;
                }
                break;
        }
              }
        
        //start function send data with ajax
        sendinfo(data,"save_data");
    };
    
    //function send data to file.php (ajax)
    
    function sendinfo(data , type)
    {
        var xml3 = new XMLHttpRequest();
        
        xml3.onload = function()
        {
            if(xml3.readyState==4 || xml3.status == 200)
               {
                   var button_save = document.getElementById("save"); 
                        result_saving(xml3.responseText);
                        button_save.disabled = false ;
                        button_save.value = "Save Settings"; 
               }
        }
            data.data_type = type;
        //convert data to string (jesson)
            var data_string = JSON.stringify(data);
            xml3.open("POST" ,"file.php", true);
            xml3.send(data_string);
    }
    

    
    //show div (error or sucssfly)// and //refresh ajax (setting and info)
    function result_saving (result)
    {
        var info_save = JSON.parse(result);
        
        if(info_save.data_type_save == "error")
        {
            var error = document.getElementById("error");
            error.innerHTML = info_save.message;
            error.style.display = "block";
        }
        else
        {
             var error = document.getElementById("error");
            error.innerHTML = info_save.message;
            error.style.display = "block";
            error.style.backgroundColor = "aquamarine";
                 get_info();
                 get_veiw({},"settings");
        }
    }
    
    
    //function click_lable = click_input_file 
    function click_file()
    {
        var but = document.getElementById("chang_image");
        but.click(true);
    }
    
    
    
    //download image with object ajax to => uploding.php
    function upload_image(files)
    {
        var lable_button = document.getElementById("button_chang_image");
        lable_button.disabled = true;
        lable_button.innerHTML = "Uploading Image ...";
        var myform = new FormData();
        var ajax5 = new XMLHttpRequest();
        
        ajax5.onload = function()
        {
            if(ajax5.readyState==4 || ajax5.status ==200)
               {
                    lable_button.disabled = false;
                    lable_button.innerHTML = "Change Image";
                    result_saving(ajax5.responseText);
               }
        }
        
        myform.append("file",files[0]);
        myform.append("data_type","Uploading");
     
        ajax5.open("POST" , "uploding.php" , true);
        ajax5.send(myform);
        
    }
    
    
    
    //set imag with draging settings
    function drag_image(e)
    {
        if(e.type=='dragover')
        {
             e.preventDefault();
             e.target.className = "drag_border";
            
        }
        else if(e.type=='dragleave')
        {
            e.preventDefault();
            e.target.className = "";
        }
        else if(e.type=='drop')
        {
            e.preventDefault();
            e.target.className = "";
            upload_image(e.dataTransfer.files);
        }else
        {
            e.target.className = "";
        }
    }
    

    
    //onload on div contacts auto dpwnload the page 
    
    var check_contenar = document.getElementById("check_contenar");
    
    window.onload = function()
    {
        check_contenar.checked=true;
         get_veiw({},"contacts");
    }
    
    //click in view media send to user
    function veiw_media()
    {
        document.getElementById('file').click(true);
    }
    
         //send userid to chat for when click contact open message display in rieght pannel   
function go_chat(e)
    {
         var userid = e.target.parentNode.getAttribute("userid");

        CURRENT_CHAT_USER = userid;
        var check_chat = document.getElementById("check_chat");
        check_chat.checked = true;
        var data_send = {};
        data_send.reseve = CURRENT_CHAT_USER;
        get_veiw({data_send},"chat");
    }
    
    //ارسال الرسالة 
    function send_message()
    {
        var text_message = document.getElementById("text_message");
        var message = text_message.value;
        if(message.trim() == "")
           {
                alert("Plase Enter Something To Send !");
           }else
           {
             var data_send = {};
        
            data_send.message = message;
            data_send.reseve = CURRENT_CHAT_USER;
            get_veiw(data_send , "send_message");
           }
    }
    
    //send with key Enter keyboard 
    
    function enter_send(e)
    {
        if(e.keyCode==13)
        {
            send_message();
        }
    }
    
    var chat_checd  = document.getElementById("check_chat");
   
    setInterval(function()
              {
        
    if(CURRENT_CHAT_USER != "")
      {
        
         var data_send = {};
        data_send.reseve = CURRENT_CHAT_USER;
        get_veiw({data_send},"chatupdate");
          if(chat_checd.checked == false)
          {
              CURRENT_CHAT_USER = "";
          }
      }

  },1000)
  
     
// click div message down the scroll is equle scroll height and disbled div
function message_down()
    {
            var all_messages = document.getElementById('all_messages');
            all_messages.scrollTo(0,all_messages.scrollHeight);
            var focus = document.getElementById("text_message");
            focus.focus();
            var message_down = document.getElementById('message_down');
            message_down.classList.remove('message_down_after');
            message_down.className = "message_down_befor";
    }
    
    /*
         setInterval(function()
                    {
            if(top == all_messages.scrollHeight - 492 && info_view.data_update == "update") all_messages.scrolltop = all_messages.scrollHeight;
        },1000);
        */
    
    //check message in out chat 
  var loding_check_chat = document.getElementById("loding"); 
        setInterval(function()
              {
                var check_chat_message = document.getElementById("check_chat_message");
                if(check_chat_message)
                {
                
                    if(check_chat_message.innerHTML=='start chating with:')
                    {
                            loding_check_chat.style.display = "none";
                            get_veiw({},"chat");
                
                    }
                }
  },1000);


  function send_image(files)
    {
        var myform = new FormData();
        var ajax5 = new XMLHttpRequest();
        
        ajax5.onload = function()
        {
            if(ajax5.readyState==4 || ajax5.status ==200)
               {
                    
               }
        }
        
        myform.append("file",files[0]);
        myform.append("data_type","send_image");
        myform.append("reseve",CURRENT_CHAT_USER);
        ajax5.open("POST" , "send_image.php" , true);
        ajax5.send(myform);
        
    }


         


</script>


