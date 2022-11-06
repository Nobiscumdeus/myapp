<h1> Add Members </h1>
@if(session('user'))
<h3 style="color:green"> {{session('user')}} user has been addedd successfully </h3>
@endif
<form action="addMember" method="POST" >
    @csrf
    <input type="text" name="username" placeholder="Enter Username" /> <br><br>
    <input type="password" name="password" placeholder="Enter User Password" /> <br><br>
    <input type="email" name="email" placeholder="Enter User Email" /> <br><br>
    <button> Add Member </button>
</form>