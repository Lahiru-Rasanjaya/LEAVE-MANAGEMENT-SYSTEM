<?php


//for registation

function emptyInputsSignup($username, $email, $password, $REpassword) {
    $result;
    if (empty($username) || empty($email) || empty($password) || empty($REpassword)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

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


function passwordMatch($password, $REpassword) {
    $result;
    if ($password !== $REpassword) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}


function usernameExists($conn, $email) {
    $sql = "SELECT * FROM  registration WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registation.php?error=stmtfailed1");
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

function createUser($conn, $username, $email, $password) {
    $sql = "INSERT INTO registration (username,email,password) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registation.php?error=stmtfailed2");
        exit();
    }
    if (isset($_POST["agree"])) {
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
     echo"<script>alert('Registation Sussusfull');window.location.href='../login.php';</script>";
    exit();
    }
    //checkbox not sellect
    else{
        echo"<script>alert('Dear Sir/Madam,It is mandatory to select I agree to the terms & condition to register.');window.location.href='../registation.php';</script>"; 
    }

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
    $usernameExists = usernameExists($conn, $email);
    if ($usernameExists === false){
        header("Location:../login.php?error=wronglogin1");
        echo "<style>.input-box .input-valid{ border: 2px solid red;}</style>";
        exit();
    }

    $pwdHashed = $usernameExists["password"];
    $checkpwd = password_verify($password, $pwdHashed);

    if ($checkpwd == false){
        header("Location:../login.php?error=wronglogin2");
        exit();
        
    }else if ($checkpwd === true){
        session_start();
        $_SESSION["sliate_id"] = $usernameExists["sliate_id"];
        $_SESSION["email"] = $usernameExists["email"];
        echo "<script>window.location.href='../1leave/log.php';</script>";
        exit();
    }
}