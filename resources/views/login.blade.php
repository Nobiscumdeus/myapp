<head>
   <style type="text/css">
  
   input{
    width:78%;
    height:10%;
    border-radius:10px;
   }
   input::placeholder{
    color:blue;
    text-align:center;
    letter-spacing:10px;
   }
   </style>
</head>
<h1> user Login </h1>
<form action="loginauth" method="POST">
    @csrf
<input type="text" name="username" placeholder="Enter User Name" /><br/><br/>
<input type="password" name="password" placeholder="Enter your Password" /><br/><br/>
<button type="submit"> Login </button>
</form>