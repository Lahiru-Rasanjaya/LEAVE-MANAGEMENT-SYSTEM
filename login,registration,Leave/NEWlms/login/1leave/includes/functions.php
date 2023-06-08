<?php
                 $conn = mysqli_connect("localhost","root","","registation");
                 if(isset($_GET['idno']))
                 {
                    $stud_id = $_GET['idno'];

                    $query = "SELECT * FROM registration WHERE id= '$stud_id' ";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $row)
                        {


                        ?>
            
                        <?php
                        }

                    }
                    else{
                        echo "No Record Found";
                    }
                 }
                 
                 ?>