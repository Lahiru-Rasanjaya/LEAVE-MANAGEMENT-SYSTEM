<?php


//for registation

function emptyInputsSignup($SID, $username, $email, $password, $REpassword, $NID, $designayion, $division) {
    $result;
    if (empty($SID) || empty($username) || empty($NID) || empty($designayion) || empty($division) || empty($email) || empty($password) || empty($REpassword)) {
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


function usernameExists1($conn, $SID) {
    $sql = "SELECT * FROM  registration WHERE sliateId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registation.php?error=stmtfailedSID");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $SID);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}

function usernameExists2($conn, $email) {
    $sql = "SELECT * FROM  registration WHERE email = ?;";
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

function usernameExists3($conn, $NID) {
    $sql = "SELECT * FROM  registration WHERE NID = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registation.php?error=stmtfailedNID");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $NID);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $SID, $username, $email, $password, $NID, $designayion, $division,$lcsual,$lsick,$lVacation,$lOther) {
    // $sql=" INSERT INTO leaves(leave_Casual,leave_Sick,leave_Vacation,leave_Other) VALUES ()";
    $sql = "INSERT INTO registration (	sliateId,username,email,password,NID,designation,division,leave_Casual,leave_Sick,leave_Vacation,leave_Other) VALUES (?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registation.php?error=stmtfailed2");
        exit();
    }
    if (isset($_POST["agree"])) {
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssssssiiii",$SID, $username, $email, $hashedpassword, $NID, $designayion, $division,$lcsual,$lsick,$lVacation,$lOther);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
     echo"<script>alert('Registation Sussusfull');window.location.href='http://localhost/NEWlms/Admin/dDisplay.php';</script>";
    exit();
    }
    //checkbox not sellect
    else{
        echo"<script>alert('Dear Sir/Madam,It is mandatory to select I agree to the terms & condition to register.');window.location.href='../registation.php';</script>"; 
    }

}


