
<?php 
    session_start();
    ?>
<?php
//check for form submission
if (isset($_POST["submit"])) {

    

//connect
require_once 'database.php';



$SID = $_POST["SIDNO"];
$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$NID = $_POST["NID"];
$designayion = $_POST["desi"];
$division = $_POST["divi"];
$lC = $_POST["LCO"];
$lS = $_POST["LSO"];
$lV = $_POST["LVO"];
$lO = $_POST["LOO"];

if (isset($_POST["agree"])) {

$query = "UPDATE registration SET sliateId='$SID',username='$username',email ='$email',password='$password',
NID ='$NID',designation='$designayion',division='$division',leave_Casual='$lC',leave_Sick='$lS',leave_Vacation='$lV',
leave_Other='$lO' WHERE email='$email'";
$query_run = mysqli_query($conn, $query);

   if($query_run)
    {
        echo"<script>alert('Update Succsssful');window.location.href='../dDisplay.php';</script>";
        exit();
    }
    else
    {
    echo"Some values exist in the database.Check back.";
    exit();
    } 
}
else{
    echo"<script>alert('Final data entry has not been agreed upon as complete.');window.location.href='../dDisplay.php';</script>"; 
    exit();
}


}else{
    header('Location:../login.php');
    exit();
}

