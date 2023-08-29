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
      <div class="topic">  &nbsp;&nbsp;&nbsp;   YOUR DETAILS</div>

        <form action="log.out.php" method="post">

                <div class="input-boxID">
                <p>
                    <label>01. Email : </label>
                    <input type="text" name="stud_id" id="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" class="input" readonly>
                    <!-- <b>EX : A11</b> -->
                </p>   
               
                </div>
                

                <div class="textbox">

<?php
     $conn = mysqli_connect("localhost","root","","registation");
   
     if(isset($_SESSION['email']))
     {
        $stud_id = $_SESSION['email'];

        $query = "SELECT * FROM registration WHERE email= '$stud_id' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                ?>

                <div class="Sliate-ID-input-box" >
                <p> 
                </br>
                    <label> 02. ATI NO: </label>
                    <input type="text" name="name" value="<?= $row['sliateId'];?>" readonly>
                </p>
                </div>

                <div class="input-box" >
                <p> 
           
                    <label> 02. Name : </label>
                    <input type="text" name="name" value="<?= $row['username'];?>" readonly>
                </p>
                </div>

                <div class="input-box">
                <p>
                    <label> 03. National ID NO : </label>
                    <input type="text" name="division" value="<?= $row['NID'];?>" readonly>
                </p>
                </div>

                <div class="input-box">
                <p>
                    <label> 04. Designation : </label> 
                    <input type="text" name="disignation" value="<?= $row['designation'];?>" readonly>
                </p>
                </div>

                <div class="input-box">
                <p>
                    <label> 05. Division : </label>
                    <input type="text" name="division" value="<?= $row['division'];?>" readonly>
                </p>
                </div>




             
        </div>

        </form>
        
      </div>
        
      <div class="wrapper1">
      <div class="topic1">  &nbsp;&nbsp;&nbsp; DETAILS OF LEAVE REQUESTS  </div>
        <form action="log.out.php" method="post">
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


<table  border="2" class="table1">
  <tr>
    <th></th>
    <th>Casual</th>
    <th>Sick</th>
    <th>Vacation</th>
    <th>Other</th>
  </tr>
  <tr>
    <td > <label > <div class="align">  06. Number of Days Leave Appli </div> </label></td>
    <td> 
    <div class="input-box1">
              <input type="text" name="NC" class="input-box1A" value="0" required>
         </div>
    </td>
    <td>
    <div class="input-box1">
              <input type="text" name="NS" class="input-box1B" value="0" required>
         </div>
    </td>
    <td>
    <div class="input-box1">
              <input type="text" name="NV" class="input-box1C" value="0" required>
         </div>
    </td>
    <td >
    <div class="input-box1">
              <input type="text" name="NO" class="input-box1D" value="0" required>
         </div>
    </td>
  </tr>

  <tr>
    
    <td><label> <div class="align">07. Leave taken in current year </div> </label></td>


    <td style="text-align: center">
    <div class="input-box2">
                    <input type="text" name="LC" class="input-box2A" value="<?= $row['leave_Casual'];?>" readonly>
                </div>
    </td>
    <td style="text-align:center">
    <div class="input-box2">
                    <input type="text" name="LS" class="input-box2B"  value="<?= $row['leave_Sick'];?>" readonly>
                </div>
    </td>
    <td>
    <div class="input-box2">
                    <input type="text" name="LV" class="input-box2C" value="<?= $row['leave_Vacation'];?>" readonly>
                </div>
    </td>
    <td>
    <div class="input-box2">
                    <input type="text" name="LO" class="input-box2D" value="<?= $row['leave_Other'];?>" readonly>
                </div>
    </td>
  </tr>

  


</table>

</br></br>

<table border="2" class="table2">
  <tr>
    <th></th>
    <th>Date</th>
    <!-- <th>Month</th>
    <th>Date</th> -->
  </tr>
  <tr>
    <td> <label> <div class="align"> 08. Date of first appointment </div> </label></td>
    <td > 
    <div class="input-box3">    
                    <input type="date" name="DOFA" class="input-box3A" required>
                   
                </div>
    </td>
    <!-- <td>
    <div class="input-box3">    
                    <input type="text" name="division" class="input-box3B" required>
                </div>
    </td>
    <td>
    <div class="input-box3">    
                    <input type="text" name="division" class="input-box3C" required>
                </div>
    </td> -->
  </tr>

  <tr>
    <td> <label> <div class="align"> 09. Date of commencement of leave </div> </label></td>
    <td>
    <div class="input-box4">
                    <input type="date" name="DOCOL" class="input-box4A" required>
                </div>
    </td>
    <!-- <td>
    <div class="input-box4">
                    <input type="text" name="division" class="input-box4B" required>
                </div>
    </td>
    <td>
    <div class="input-box4">
                    <input type="text" name="division" class="input-box4C" required>
                </div>
    </td> -->
  </tr>

  <tr>
    <td> <label> <div class="align"> 10. Date of Resuming dates </div> </label></td>
    <td>
    <div class="input-box5">
                    <input type="date" name="DORD" class="input-box5A" required>
                </div>
    </td>
    <!-- <td>
    <div class="input-box5">
                    <input type="text" name="division" class="input-box5B" required>
                </div>
    </td>
    <td>
    <div class="input-box5">
                    <input type="text" name="division" class="input-box5C" required>
                </div>
    </td> -->
  </tr>
</table>

</br></br>




            <div class="input-box6">
                <p>
                    <label> 11. Resumes for Leave  : </label>
                    <textarea  rows="5" cols="130" class="text1"  name="RFL" placeholder="Resumes for Leave...."required></textarea>
                </p>
            </div>
</br></br>
            <div class="input-box7">
                <p>
                    <label> 12. Address when on leave : </label>
                    <textarea rows="5" cols="130" class="text1" name="AWOL" placeholder="Address when on leave...."required></textarea>
            </div>


</br></br>
                 <button type="submit" class="submit" name="submit" id="submit" >SUBMIT</button> 

</br></br>




        
                

      </div>


      <?php

}


}
}



?>     

   </form>




<!-- connect data log.out.php -->
  <!-- <script>

    const submit = document.grtElementById('submit');
    const email = document.grtElementById('email');
    const emailO = document.grtElementById('emailO');

    function showEmail(inputEmail) {
        emailO.innerText = inputEmail;   
    }

    submit.addEventListener('click', () => {
        showEmail(email.value)
    })


  </script>  -->

</br></br></br></br>

<?php
require_once 'footer.php';
?>


