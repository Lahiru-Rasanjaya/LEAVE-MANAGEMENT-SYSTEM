<?php 

//check for form submission
if (isset($_POST["submit"])) {


//connect
require_once 'database.php';
require_once 'Dfunctions.php';

$email = $_POST["Demail"];
$password = $_POST["Dpassword"];


    
if (emptyInputslogin($email, $password) !== false) {
    exit();
}
LoginUser($conn, $email, $password);






}else{
    header('Location:../login.php');
    exit();
}

