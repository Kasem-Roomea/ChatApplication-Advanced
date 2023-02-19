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
            margin: 300px 130px;
        }

    </style>
    
    </head>
    
    <body>
        <div id="perant">
            <div id="header">
                <span id="name_app">WhatsUp Speed</span><br><span id="login">SingUp Application</span>
            </div>
            <div id="error">Some text</div>
            <form id="myform">
                <input type="text" name="username" placeholder="User Name" required>
                <input type="text" name="email" placeholder="Email" required>
                <div id="radio_multi">
                <br>Gread:<br>  
                  <input type="radio" name="radio_gread_male" value="Male" id="radio_check"> Male 
                    <br>
                    <input type="radio" name="radio_gread_female" value="Female" id="radio_check2"> Female
                </div>    
                <input type="password" name="password" placeholder="password">
                <input type="password" name="password1" placeholder="Confirm Password">
                <input type="button" name="send_data_login" value="Sing Up" id="sing_up">
                <br>
                <a href="login2.php" > Are You Have Acount? Login</a> 
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
    
    
    //select one answer in radio auto
    var radio = document.getElementById("radio_check");
    var radio2 = document.getElementById("radio_check2");
    
window.onload = function()
{
    radio.checked = true;
}    
 radio.onclick = function()
{
    if(radio.checked)
    {
        radio2.checked=false;
    } else 
    {
         radio2.checked=true;
    }
} 
 radio2.onclick = function()
{
    if(radio2.checked)
    {
        radio.checked=false;
    } else 
    {
         radio.checked=true;
    }
}

    
var button_singup = _("sing_up");
    
//function stor data input_form on variabls Object (data[])
    button_singup.addEventListener("click",function()
                                   {
    button_singup.disabled = true;
    button_singup.value = "Loding...Plase Wait";
       var myform = _("myform");
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
        sendinfo(data,"singup");
    });
    
    //function send data to file.php (ajax)
    
    function sendinfo(data , type)
    {
        var xml = new XMLHttpRequest();
        
        xml.onload = function()
        {
            if(xml.readyState==4 || xml.status == 200)
               {
                        alert(xml.responseText);
                        button_singup.disabled = false ;
                        button_singup.value = "Sing Up"; 
               }
        }
            data.data_type = type;
        //convert data to string (jesson)
            var data_string = JSON.stringify(data);
            xml.open("POST" ,"file.php", true);
            xml.send(data_string);
    }
    
    function result_valdite (result)
    {
        var info = JSON.parse(result);
        
        if(info.data_type_valedat == "error")
        {
            var error = _("error");
            error.innerHTML = info.message;
            error.style.display = "block";
        }
        else
        {
             var error = _("error");
            error.innerHTML = info.message;
            error.style.display = "block";
            error.style.backgroundColor = "aquamarine";
            setTimeout(function(){
            window.location = "login2.php";
                
            },3000)
            
        }
    }
    


    
    
</script>








