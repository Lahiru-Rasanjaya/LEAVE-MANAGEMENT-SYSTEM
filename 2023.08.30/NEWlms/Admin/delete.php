<?php 
$con = mysqli_connect("localhost","root","","registation");
error_reporting(0);
$row=$_GET['sid'];
$query = "DELETE FROM registration WHERE sliateId = '$row' ";  
      $query_run = mysqli_query($con,$query);  
      if ($query_run) {  
        echo"<script>alert('Delete Sussusfull');window.location.href='dDisplay.php';</script>";
          exit();
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }   
     
?>  
