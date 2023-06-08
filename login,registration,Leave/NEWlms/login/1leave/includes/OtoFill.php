<!DOCTYPE html>
<html>
    <head>
        <title>ATIkurunegala</title>
        <link rel="stylesheet"href="style.css?v=<?php echo time(); ?>">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
        
    </head>
    
    <body>
        <div class="SLIATE">
        </div>
     <!--
        <div class="LEAVE">
            
            <div class="LEAVEad">ADVANCED TECHNOLOGICAL INSTITUTE - KURUNEGALA</div>
            <div class="LEAVEap">APPLICATION FOR LEAVE</div>
        </div>-->
       
       <!-- navigation bar -->
         <?php require_once 'header.php';
         ?>



      <div class="wrapper">
      <div class="topic">  &nbsp;&nbsp;&nbsp; YOUR DETAILS  </div>
            <div class="row justify-content-center">
                <div class="card-body">
                <div class="name"><label>01. SLIATE ID NO : </label></div>
                    <form action="" method="GET">
                    
                        <div class="sliateID">
                            
                            <input type="text" name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];}?>" class="form-contol">
                             <b>EX : AB00</b>
                        <button type="submit" class="Lbtn">&nbsp;&nbsp;&nbsp;Search&nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </form>
                    <div class="row">
                        <div class="textbox">

            <?php
                 $conn = mysqli_connect("localhost","root","","registation");
                 if(isset($_GET['stud_id']))
                 {
                    $stud_id = $_GET['stud_id'];

                    $query = "SELECT * FROM registration WHERE sliateId= '$stud_id' ";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $row)
                        {
                            ?>


                        <div class="form-group">
                                <label>name</label>
                                <input type="text" value="<?= $row['username'];?>" class="input-box1">
                        </div>


                            <?php

                        }
   

                    }
                    else
                    {
                        echo "No Record Found";
                    }
                 }
                 
            ?>

                         
                    </div>
                </div>    
            </div>
        </div>
      </div>
        
      <div class="wrapper1">
      <div class="topic1">  &nbsp;&nbsp;&nbsp; DETAILS OF LEAVE REQUESTS  </div>
        <form>
               <!-- <div class="input-box1">
                <p>
                    <label> 05: Number of Days Leave Appli: </label>
                    <input type="text" name="division" required>
                    <b>EX : 5</b>
                    
                    <select name="nofd" id="nofd" class="select1">
                        <option value="#">Casual</option>
                        <option value="#">Sick</option>
                        <option value="#">Vacation</option>
                        <option value="#">Other</option>
                    </select>

                    <input type="text" name="division" class="nofd1" required>
                    <b>EX : 5</b>
                    
                    <select name="nofd" id="nofd" class="select11">
                        <option value="#">Casual</option>
                        <option value="#">Sick</option>
                        <option value="#">Vacation</option>
                        <option value="#">Other</option>
                    </select>

                </p>
                </div>

                <div class="input-box2">
                <p>
                    <label> 06. Leave taken in current year : </label>
                    <input type="text" name="division" required>
                </p>
                </div>

                <div class="input-box3">
                <p>
                    <label> 07. Date of first appointment : </label>
                    <input type="text" name="division" required>
                </p>
                </div>

                <div class="input-box4">
                <p>
                    <label> 08. Date of commencement of leave : </label>
                    <input type="text" name="division" required>
                </p>
                </div>

                <div class="input-box5">
                <p>
                    <label> 09. Date of Resuming dates : </label>
                    <input type="text" name="division" required>
                </p>
                </div>

                <div class="input-box6">
                <p>
                    <label> 10. Resumes for Leave  : </label>
                    <input type="text" name="division" required>
                </p>
                </div>

                <div class="input-box7">
                <p>
                    <label> 11. Address when on leave : </label>
                    <input type="text" name="division" required>
                </p>
                </div>-->


<table  border="2">
  <tr>
    <th></th>
    <th>Casual</th>
    <th>Sick</th>
    <th>Vacation</th>
    <th>Other</th>
  </tr>
  <tr>
    <td> <label> 05: Number of Days Leave Appli</label></td>
    <td> 
    <div class="input-box1">
              <input type="text" name="division" class="input-box1A" required>
         </div>
    </td>
    <td>
    <div class="input-box1">
              <input type="text" name="division" class="input-box1B" required>
         </div>
    </td>
    <td>
    <div class="input-box1">
              <input type="text" name="division" class="input-box1C" required>
         </div>
    </td>
    <td>
    <div class="input-box1">
              <input type="text" name="division" class="input-box1D" required>
         </div>
    </td>
  </tr>

  <tr>
    <td><label> 06. Leave taken in current year </label></td>
    <td>
    <div class="input-box2">
                    <input type="text" name="division" class="input-box2A" required>
                </div>
    </td>
    <td>
    <div class="input-box2">
                    <input type="text" name="division" class="input-box2B" required>
                </div>
    </td>
    <td>
    <div class="input-box2">
                    <input type="text" name="division" class="input-box2C" required>
                </div>
    </td>
    <td>
    <div class="input-box2">
                    <input type="text" name="division" class="input-box2D" required>
                </div>
    </td>
  </tr>
</table>


</br></br>

<table border="2">
  <tr>
    <th></th>
    <th>Year</th>
    <th>Month</th>
    <th>Date</th>
  </tr>
  <tr>
    <td> <label> 07. Date of first appointment </label></td>
    <td> 
    <div class="input-box3">    
                    <input type="text" name="division" class="input-box3A" required>
                    <b>EX : 5</b>
                </div>
    </td>
    <td>
    <div class="input-box3">    
                    <input type="text" name="division" class="input-box3B" required>
                </div>
    </td>
    <td>
    <div class="input-box3">    
                    <input type="text" name="division" class="input-box3C" required>
                </div>
    </td>
  </tr>

  <tr>
    <td> <label> 08. Date of commencement of leave </label></td>
    <td>
    <div class="input-box4">
                    <input type="text" name="division" class="input-box4A" required>
                </div>
    </td>
    <td>
    <div class="input-box4">
                    <input type="text" name="division" class="input-box4B" required>
                </div>
    </td>
    <td>
    <div class="input-box4">
                    <input type="text" name="division" class="input-box4C" required>
                </div>
    </td>
  </tr>

  <tr>
    <td> <label> 09. Date of Resuming dates </label></td>
    <td>
    <div class="input-box5">
                    <input type="text" name="division" class="input-box5A" required>
                </div>
    </td>
    <td>
    <div class="input-box5">
                    <input type="text" name="division" class="input-box5B" required>
                </div>
    </td>
    <td>
    <div class="input-box5">
                    <input type="text" name="division" class="input-box5C" required>
                </div>
    </td>
  </tr>
</table>

</br></br>

            <div class="input-box6">
                <p>
                    <label> 10. Resumes for Leave  : </label>
                    <input type="text" name="division" required>
                </p>
            </div>
</br></br>
            <div class="input-box7">
                <p>
                    <label> 11. Address when on leave : </label>
                    <input type="text" name="division" required>
                </p>
            </div>


</br></br>
                 <button type="submit" class="submit" name="submit">SUBMIT</button> 

</br></br>

        </form>
        
                

      </div>



<?php
require_once 'footer.php';
?>


