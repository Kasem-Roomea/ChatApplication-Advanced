ٍ<html>
    <head>
    <meta charset="utf-8">
    <style>
        body
        {
            cursor: context-menu;
        }
        #perant
        {
            max-width: 1000px;
            min-height: 600px;
            margin: 10px auto ;
            padding: 10px;
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
            width:98%;
            height: 40px;
            border: solid 1px grey;
            border-radius: 5px;
            margin: 10px;
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
            width: 98.5%;
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
         #header
        {
            height: 100px;
            width: 100%;
            background-color: #97cadb;
            text-align: center;
            font-size: 35px;
            line-height: 60px;
            font-family:monospace; 
            letter-spacing: 4px;
            transition: 1s;
            text-shadow: 4px 4px 10px #000;
            color: #001b4b;
            margin-bottom: 0px;
        }
        #header #login
        {
          font-size: 20px;
          letter-spacing: 2px;
          line-height: 30px;
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
        a
        {
            text-decoration: none;
            font-size: 20px;
            margin: 300px 139px;
        }
    </style>
    
    </head>
    
    <body>
        <div id="perant">
            <div id="header">
                <span id="name_app">WhatsUp Speed</span><br><span id="login">Login Application</span>
            </div>
            <div id="error"></div>
            <form id="myform">
                <input type="text" name="email" placeholder="Email" required>  
                <input type="password" name="password" placeholder="password">
                <input type="button" name="send_data_login" value="Login" id="button_login">
                <br>
                <a href="login.php" style="">Dont Have acount? Sing up</a>
            </form>
        
        </div>

    </body>
</html>


<script>
//function get element to away esey
function _(element)
    {
        return document.getElementById(element);
    }
    

    
var button_login = _("button_login");
    
//function stor data input_form on variabls Object (data[])
    button_login.addEventListener("click",function()
                                   {
    button_login.disabled = true;
    button_login.value = "Loding...Plase Wait";
       var myform = _("myform");
       var inputs = document.getElementsByTagName("input");
        var data = {};
        for(var i = 0 ; i<inputs.length ; i++)
        {
            var name_input = inputs[i].name;
        switch(name_input)
        {
           
            case "email":
                data.email = inputs[i].value;
                break;
            case "password":
                data.password = inputs[i].value;
                break;
        }
              }
        
        //start function send data with ajax
        sendinfo(data,"login");

    });
    
    //function send data to file.php (ajax)
    
    function sendinfo(data , type)
    {
        var xml = new XMLHttpRequest();
        
        xml.onload = function()
        {
            if(xml.readyState==4 || xml.status == 200)
               {
                        result_valdite(xml.responseText);
                        button_login.disabled = false ;
                        button_login.value = "Login"; 
               }
        }
            data.data_type = type;
        //convert data to string (jesson)
            var data_string = JSON.stringify(data);
            xml.open("POST" ,"file.php", true);
            xml.send(data_string);
    }
    
    //get info valdite on insert login 
    
    function result_valdite (result)
    {
        var info = JSON.parse(result);
        
        if(info.data_type_valedat == "error")
        {
            var error = _("error");
            error.innerHTML = info.message;
            error.style.display = "block";
        }
        else if (info.data_type_valedat == "sucssfuly")
        {
             var error = _("error");
            error.innerHTML = info.message;
            error.style.display = "block";
            error.style.backgroundColor = "aquamarine";
            setTimeout(function(){
                
            var xml2 = new XMLHttpRequest();
        
        xml2.onload = function()
        {
            var alert = xml2.responseText;  
        }
        
        info_profile = {};
        info_profile.data_type = "username";
        info_profile.data_type2 = "session";       
        info_profile.userid = info.userid;       
        //convert data to string (jesson)
            var info_profile_string = JSON.stringify(info_profile);
            xml2.open("POST" ,"file.php", true);
            xml2.send(info_profile_string);    
            window.location = "index.php";
                
            },2000)
            
        }
    }
    
    


    
    
</script>
