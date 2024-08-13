
<?php

      

        $conn = mysqli_connect("localhost","root","","registation");
   
       
        $id = $_GET['em'];   
        $query = "UPDATE  registration SET approval='2' WHERE email ='$id' ";
            if(mysqli_query($conn, $query) === TRUE){
             
                echo"<script>alert('Login in Database and go to the new user and add Leave taken in current year');window.location.href='http://localhost/NEWlms/Admin/Accept.php';</script>";
            
            
            }else{
                echo  "Error: " . $query . "</br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        
       