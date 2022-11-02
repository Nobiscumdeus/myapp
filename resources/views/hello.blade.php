
<!DOCTYPE html>
<html>
    <head> 
        <title>Chasfat Projects </title>
        <style type="text/css">
            a{
                text-decoration:none;
                font-size:20px;
            }
            a:hover{
                color:green;
            }
            span{
                text-transform:uppercase;
            }
            </style>
     </head>
     <body>
        <?php
        $id=$_GET['id'];
        ?>
        <h2> Hello <span> <?php echo $id; ?></span> This is Chasfat_Project$</h2>
        <!-- Routing our hyperlinks in laravel -->
        <a href="about"> About Us</a> <br/>
        <a href="welcome"> Information</a> <br/>
        <a href="email"> Email Us </a> <br/>
</body>
    </html>