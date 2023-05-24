<?php

//check for form submission
if (isset($_POST["submit"])) {

//connect
require_once 'database.php';
require_once 'functions.php';

$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$REpassword = $_POST["REpassword"];


$emptyInput = emptyInputsSignup($username, $email, $password, $REpassword);
//$invalidusername = invalidusername($username);
$invalidEmail = invalidEmail($email);
$passwordMatch = passwordMatch($password, $REpassword);
$usernameExists = usernameExists($conn, $email);
    
if ($emptyInput !== false) {
    header("Location:../registation.php?error=emptyinput");
    exit();
}
/*if ($invalidusername !== false) {
    header("Location:../HOME PAGE.php?error=invalidusername");
    exit();
}*/
if ($invalidEmail !== false) {
    header("Location:../registation.php?error=invalidEmail");
    exit();
}
if ($passwordMatch !== false) {
    header("Location:../registation.php?error=passwordsdontmatch");
    exit();
}
if ($usernameExists !== false) {
    header("Location:../registation.php?error=usernametaken");
    exit();
}

createUser($conn, $username, $email, $password);

}else{
    header('Location:../login.php');
    exit();
}

