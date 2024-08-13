<?php

//check for form submission
if (isset($_POST["submit"])) {

//connect
require_once 'database.php';
require_once 'functions.php';

$SID = $_POST["NC"];
$username = $_POST["NS"];
$email = $_POST["NV"];
$password = $_POST["NO"];



// $emptyInput = emptyInputsSignup($SID, $username, $email, $password);
// $invalidSID = invalidSID($SID);
// $invalidNID = invalidNID($NID);
// $invalidEmail = invalidEmail($email);
// $passwordMatch = passwordMatch($password, $REpassword);
// $usernameExists1 = usernameExists1($conn, $SID);

    
// if ($emptyInput !== false) {
//     header("Location:../registation.php?error=emptyinput");
//     exit();
// }
// /*if ($invalidusername !== false) {
//     header("Location:../HOME PAGE.php?error=invalidusername");
//     exit();
// }*/
// // if ($invalidSID !== false) {
//     // header("Location:../registation.php?error=invalidSID");
//     // exit();
// // }
// // if ($invalidNID !== false) {
//     // header("Location:../registation.php?error=invalidNID");
//     // exit();
// // }
// if ($invalidEmail !== false) {
//     header("Location:../registation.php?error=invalidEmail");
//     exit();
// }
// if ($passwordMatch !== false) {
//     header("Location:../registation.php?error=passwordsdontmatch");
//     exit();
// }
// if ($usernameExists1 !== false) {
//     header("Location:../registation.php?error=userSLIATEID");
//     exit();
// }
// if ($usernameExists2 !== false) {
//     header("Location:../registation.php?error=userEmail");
//     exit();
// }
// if ($usernameExists3 !== false) {
//     header("Location:../registation.php?error=userNID");
//     exit();
// }
 createUser($conn, $SID, $username, $email, $password);

}else{
    header('Location:../login.php');
    exit();
}

