<?php

$severname = "localhost";
$dBUsername = "root";
$dBPassword = "";
$bBName = "logingsystem";

$conn = mysqli_connect($severname, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}