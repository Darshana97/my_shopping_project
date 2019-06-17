<!DOCTYPE html>
<html>

<head>
    <title>Welcome to achi;s loging system</title>
    <link rel="icon" type="image/jpg" href="images/icon.jpg">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body background="images/p1.jpg">
   
   
    <div class="login">
        <img src="images/p2.JPG" height="150px" width="150px" class="login_icon">
        <h1>Login Here</h1>
        <form action="log.php" method="post">
            <p>Username</p>
            <input type="text" name="name" placeholder="Username">
            <p>Password</p>
            <input type="Password" name="pwd" placeholder="Password">
            <button>Login</button><br>
            <br>
        </form>
        <br><br>
        <h2>Don't have Account Please Sign in to visit our web site</h2>
        <form action="singup.inc.php" method="post">
           <h1>Signup Here</h1>
            <p>Username</p>
            <input type="text" name="name" placeholder="Username">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="signup-submit">Sing up</button>
        </form>
    </div>
</body>

</html>
