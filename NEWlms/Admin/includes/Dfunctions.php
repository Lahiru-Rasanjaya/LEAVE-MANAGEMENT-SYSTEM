<?php

if (isset($_POST["submit"])) {
//for registation


/*function invalidusername($username) {
    $result;
    //A to Z wenna ho 0 - 9 athara wenna
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}*/

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}






function usernameExists2($conn, $email) {
    $sql = "SELECT * FROM   admindatabse WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registation.php?error=stmtfailedEmail");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}

function usernameExists3($conn, $password) {
    $sql = "SELECT * FROM   admindatabse WHERE password = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registation.php?error=stmtfailedPassword");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $password);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}




//for login

function emptyInputsLogin($email, $password) {
    $result;
    if (empty($email) || empty($password)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function LoginUser($conn, $email, $password) {
    $usernameExists2 = usernameExists2($conn, $email);
    if ($usernameExists2 === false){
        header("Location:../databaselogin.php?error=wronglogin1");
        echo "<style>.input-box .input-valid{ border: 2px solid red;}</style>";
        exit();
    }

    $usernameExists3 = usernameExists3($conn, $password);
    if ($usernameExists3 === false){
        header("Location:../databaselogin.php?error=wronglogin2");
        echo "<style>.input-box .input-valid{ border: 2px solid red;}</style>";
        exit();
   
   
        }
            echo "<script>window.location.href='../dDisplay.php';</script>";
            exit();
        }


    }else{
        header('Location:../login.php');
        exit();
    }