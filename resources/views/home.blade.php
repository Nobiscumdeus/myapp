<x-header data="First Page header component"/>
<!DOCTYPE html>
<html>
    <head>
        <title> Chasfat Projects </title>
        <style type="text/css">
        *{
 
    box-sizing:border-box;
    text-align:center;
}
body{
    background-color:black;
    color:yellow;
    letter-spacing:5px;
    
}
input{
    width:50%;
    height:10vh;
    margin-top:5%;
    border-radius:10px;
    outline:none;

}
input:invalid{
    border:3px solid red;

}
input:valid{
    border:3px solid green;
}
button{
    margin-top:30px;
    width:20%;
    height:5vh;
    color:black;
    font-weight:700;
    letter-spacing:10px;
    cursor:pointer;
    
}
button:hover{
    background-color:green;
    border-radius:5px;
    width:20%;
    height:7vh;
    transform:scale(1.3);
}
        </style>
    </head>
    <body>
        <div>
            <h1> Chasfat Projects Introduction </h1>
            <hr/>
            <p> Hello guys, this is Olumide Adeola ,the Author of Chasfat Projects </p>
            <p> Please enter your name below and click on my link below to subscribe to my channel <br/>
                
                <input type="text" id="demo" placeholder="Please enter your name to subscribe" required /> <br>
                <button type="submit" onclick="move()"> Subscribe </button>
            </p>
        </div>
        <div>
            <h1> Chasfat Projects Ambitions </h1>
            <hr/>
            <p> I am a man driven by : <b> Passion </b> ; <b> Purpose </b>; <b> Pains </b> and <b>Persistence </b></p>

        </div>
        <script>
            function move(){
                var result=document.getElementById("demo").value;
                if(result==""){
                    alert("You didn't enter an input");
                    return false;
                }else{
                    location.href="/hello?id="+result;

                }
                
            }
            
            </script>
    </body>
    </html>