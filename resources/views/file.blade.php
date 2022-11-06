<h1> Upload your File </h1>
<form method="POST" action="upload" enctype="multipart/form-data">
    @csrf
    <input type="text" name="username" placeholder="Enter your Username" />
    <input type="file" name="file" placeholder="Enter your file " />
    <input type="submit" value="Upload File" />
</form>