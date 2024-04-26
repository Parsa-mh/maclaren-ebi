<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $user=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $link=mysqli_connect("localhost","root","","mclaren");

    $query="INSERT INTO maclaren(username,email,password) VALUES ('$user','$email','$password')";
    $er=mysqli_query($link,$query);
    if($er)
    {
        echo "Welcome To Mclaren";
    }
    else
    {
    echo " You Cant Not Connect ";
    }

    ?>
</body>
</html>