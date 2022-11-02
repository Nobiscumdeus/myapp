<h1> User Login </h1>

@if($errors->any())
@foreach($errors->all() as $err)
<li> {{$err}} </li>
@endforeach
@endif

<form action="forms" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter your username" /><br/>
    <span style="color:red;"> @error('username'){{$message}}@enderror</span> <br/>
    <input type="password" name="password" placeholder="enter your password" /><br/>
    <span style="color:red"> @error('password'){{$message}}@enderror</span> <br/>
    <button type="submit"> Login </button>
</form>