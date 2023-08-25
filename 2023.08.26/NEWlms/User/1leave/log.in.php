<?php
// for registation
$servername = "localhost";
$username = "root";
$password = "";
$database = "registation";

// creat connection
$conn = mysqli_connect($servername, $username, $password, $database); 

// check connection...error massage
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
} 
// check for form submission
if (isset($_POST["submitoutO"])) {


    $email = $_POST['email'];
    $name = $_POST['name'];
    $NID = $_POST['nid'];
    $ANO = $_POST['atino']; 
    $DES = $_POST['des'];
    $DIV = $_POST['divi'];
    $NC = $_POST['NCO'];
    $NS = $_POST['NSO'];
    $NV = $_POST['NVO'];
    $NO = $_POST['NOO']; 
    $DOFA = $_POST['DOFAO'];
    $DOCOL = $_POST['DOCOLO'];
    $DORD = $_POST['DORDO']; 
    $RFL = $_POST['RFLO'];
    $AWOL = $_POST['AWOLO'];
    // $NO = $_POST["NO"];
    

    $sql=" INSERT INTO leaves(email,username,NID,ANO,DES,DIVI,NC,NS,NV,NO,DOFA,DOCOL,DORD,RFL,AWOL) VALUES ('$email','$name','$NID','$ANO','$DES','$DIV','$NC','$NS','$NV','$NO','$DOFA','$DOCOL','$DORD','$RFL','$AWOL')";
    if(mysqli_query($conn, $sql) === TRUE){
     
        echo"<script>alert('Application Submitted');window.location.href='leaveaccept.html';</script>";
    }else{
        echo  "Error: " . $sql . "</br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

}else{
    header('Location:../login.php');
    exit();
}