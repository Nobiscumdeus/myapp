<h1> Registration </h1>



<form method="POST" action="choirregister">
    @csrf
    <span style="color:red;"> @error('names'){{$message}} @enderror</span>
<div class="form-group">
    <input type="text" name="names" class="form-control" placeholder="What are your names " required/>
</div>
<div class="form-group">
    <input type="text" name="voicepart" class="form-control" placeholder="Enter your voice part" required/>
</div>
<div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Enter your Email Address" required/>
</div>
<div class="form-group">
    <input type="number" name="age" class="form-control" placeholder="Enter your age" required />
</div>
<div class="form-group">
    <input type="date" name="birth-day"class="form-control" placeholder="If you mind, Let's know your birthday" />
</div>
<div class="form-group">
    <label for="school"> Are you still Schooling ? </label> <br/>
    Yes : <input type="radio" id="sex" name="school" value="Yes" required/> 
    No: <input type="radio" id="sex" name="school" value="No" required/>
</div>
<div class="form-group">
    <label for="sex"> Your Sex ? </label> <br/>
   Male:  <input type="radio" id="sex" name="sex" value="Male" required/>
   Female: <input type="radio" id="sex" name="sex" value="Female" required />
</div>
<div class="form-group">
    <input type="submit" value="Click to Submit " class="btn btn-secondary btn-lg" />
</div>
   
   
   
    
   

</form>
