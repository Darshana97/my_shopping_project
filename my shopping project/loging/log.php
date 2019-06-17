<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'last-loging-2');

$name = $_POST['name'];
$pass = $_POST['pwd'];

$s = " select * from users where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("Location: shopping/myproject.html");
   
    exit();
}
else{
    header("Location: invalid-log.php?");
    exit();
}
?>