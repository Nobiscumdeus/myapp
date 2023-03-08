<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAC Oke-Alaafia Mass Choir </title>
    <style type="text/css">
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        background:#333;
        color:#ff004f;
        min-height:100vh;
        display:flex;
        flex-direction:column;
        flex-wrap:wrap;
        align-items:center;
        justify-content: center;
        place-items:center;
    }
    .header,.main,.footer{
        flex-basis:100%;
        width:100%;
        display:flex;
        justify-content:center;
    }
    .header{
        min-height:10vh;
        background:skyblue;
    }
    .main{
        min-height:70vh;
        background:#333;

    }
    .footer{
        min-height:20vh;
        background:#000;
    }
    </style>
</head>
<body>
    <x-header data="header component"/>
    <div class="main">
      @yield('main-content')
       

    </div>
    <div class="footer">
    </div>

    
    
</body>
</html>