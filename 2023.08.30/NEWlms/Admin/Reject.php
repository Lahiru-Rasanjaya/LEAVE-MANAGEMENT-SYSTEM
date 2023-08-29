
<?php
        $conn = mysqli_connect("localhost","root","","registation");
   
       
        $id = $_GET['uid'];   
        $query = "UPDATE leaves SET approval='3' WHERE id='$id' ";
            if(mysqli_query($conn, $query) === TRUE){
             
                echo"<script>alert('Application Rejected');window.location.href='http://localhost/NEWlms/Admin/pending.php';</script>";
            }else{
                echo  "Error: " . $query . "</br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        
       