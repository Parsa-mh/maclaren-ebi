<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<video autoplay muted loop>
        <source src="McLaren 750S - The Next Benchmark.mp4" type="">
    </video>
    
    <form  class="login" method="post" action="save.php">
        <label for="user">Username</label>
        <input type="text" name="user" placeholder="username"><i class="ri-user-3-line"></i>     
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="password">
        <br>
        <button>Login</button>
        <input type="reset" value="Reset" class="ff">
</body>
</html>