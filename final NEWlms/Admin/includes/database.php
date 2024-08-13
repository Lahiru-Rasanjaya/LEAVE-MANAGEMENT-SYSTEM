<?php
//for registation
$servername = "localhost";
$username = "root";
$password = "";
$database = "registation";

//creat connection
$conn = mysqli_connect($servername, $username, $password, $database); 

//check connection...error massage
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
