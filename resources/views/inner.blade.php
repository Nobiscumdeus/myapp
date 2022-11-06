<h4> This is inner.blade.php </h4>

<h1> This is also for a login </h1>
<form action="userform" method="POST">
    {{method_field('PUT')}}
    @csrf
    <fieldset>
        <legend> Mobilization Form </legend>
        <input type="text" name="user" placeholder="Enter your name" />
        <input type="password" name="pass" placeholder="Enter your Password" />
        <input type="submit" value="Login">
    </fieldset>
</form>