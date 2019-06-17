<?php

session_start();
header ('Location: loging.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'last-loging-2');

$name = $_POST['name'];
$pass = $_POST['pwd'];

$s = " select * from users where name = '$name'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("Location: login.php?usernametaken");
    exit();
}
else{
    $reg = " insert into users(name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    header("Location: register.php?Registrationsuccess");
    exit();
}
?>