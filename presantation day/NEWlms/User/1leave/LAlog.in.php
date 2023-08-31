<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIkurunegala</title>

          
    <?php 
    session_start();

    


    ?>

    <style>
        *{
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               font-family: 'Poppins',sans-serif;
        }
        label{
          width: 200px;
          display: inline-block;
          
        }
        .Mlogout{
            margin-top: 3%;
            margin-left: 20%;
            margin-right: 20%;
            margin-bottom: 5%;
            border-style: solid;
          
        }
        .Mlogout .SLIATEO{
        
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 25vh;
            background: url('SLIATE.jpg')no-repeat;
            background-size: cover;
            background-position: center;
            margin: -25px;
        }
        
        .logout{
            margin: 3%;
            font-size: 20px;
        
        }
        .out{
            margin-bottom: 2%;
        }
        table{
            margin-bottom: 5%;
            margin-top: 5%;
            width: 100%;
            height: auto;
        }
        .ATIout{
            text-align: center;
            margin-bottom: 2%;
            font-size: 25px;
        }
        .out{
            height: 35px;
            font-size: 20px;
            padding-left: 10px;  
        }
       
        .TBout{
            height: 35px;
            font-size: 20px;
            text-align: center;
            width: 80px; 
            margin: 5%;
            margin-left: 18px;           
        }
        .TBDout{
            height: 35px;
            font-size: 20px;
            text-align: center;
            margin: 5%;
            width: 50%;
            margin-left: 25%;     
        }

        td{
            font-size: 20px;
        }
        .TBTout{
            height: 35px;
            font-size: 20px;
            margin: 3%;
            width: 50%;
            margin-left: 5%;  
            width: 90%;
            height: 110px;  
            padding: 2%; 
            
        }
        .submitO{
            width: 100px;
            padding: 10px;
            border: none;
            background-color: black;
            color: white;
            border-radius: 15px;
    
         }
        .submitO:hover {
            background-color: #04AA6D;
         }
         .Osubmit{
            margin-left: 85%;
            margin-top: -4.1%;

         }


         .backO{
            margin-left: 85%;
            width: 100px;
            padding: 10px;
            border: none;
            background-color: black;
            color: white;
            border-radius: 15px;
         }

        .backO a{    
            text-decoration: none;
            color: white;
        }   
    
       
        .backO:hover {
            background-color: #aa041d;
            color:#aa041d;
            
         }
         .Oback{
            margin-left: 10%;
            margin-top: 0%;

         }
         textarea{
            display: block;
            resize: none;      
        }

    </style>
</head>
<body>
    <div class="Mlogout">
    <form class="logout" action="log.in.php" method="POST">
  
    
        <div class="SLIATEO"></div>

<!-- 
        <div class="ATIout"> Sri Lanka Institute of Advanced Technological Education</br>
                            ADVANCED TECHNOLOGICAL INSTITUTE-KURUNEGALA</br>
                            APPLICATION FOR LEAVE</div>--></br></br>

        <div class="out">
             <label>01. Email : </label>
             <input type="email" class="out" name="email"  value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" readonly >
        </div>

        <?php
     $conn = mysqli_connect("localhost","root","","registation");
   
     if(isset($_SESSION['email']))
     {
        $stud_id = $_SESSION['email'];

        $query = "SELECT * FROM leaves WHERE email= '$stud_id'ORDER BY id DESC LIMIT 1 ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                ?>

        <div class="out">
            <label>02. Name : </label>
            <input type="text" class="out" name="name"  value="<?= $row['username'];?>"  readonly>
       </div>

       <div class="out">
        <label>03. National ID NO : </label>
        <input type="text" class="out" name="nid" value="<?= $row['NID'];?>"  readonly>
       </div>

       <div class="out">
        <label>04. ATI NO : </label>
        <input type="text" class="out" name="atino" value="<?= $row['ANO'];?>" readonly>
       </div>

       <div class="out">
        <label>05. Designation : </label>
        <input type="text" class="out" name="des" value="<?= $row['DES'];?>" readonly>
       </div>

       <div class="out">
        <label>06. Division : </label>
        <input type="text" class="out" name="divi"  value="<?= $row['DIVI'];?>" readonly>
       </div>


       <table border="2" class="Tout">
        <tr>
            <th></th>
            <th>Casual</th>
            <th>Sick</th>
            <th>Vacation</th>
            <th>Other</th>
          </tr>
          <tr>

       <td>  &nbsp;&nbsp;&nbsp;06: Number of Days Leave Appli</td>
       <td> 
       <div class="input-box1">
                 <input type="text" name="NCO" class="TBout"value="<?= $row['NC'];?>" readonly>
            </div>
       </td>
       <td>
       <div class="input-box1">
                 <input type="text" name="NSO" class="TBout" value="<?= $row['NS'];?>" readonly>
            </div>
       </td>
       <td>
       <div class="input-box1">
                 <input type="text" name="NVO" class="TBout" value="<?= $row['NV'];?>" readonly>
            </div>
       </td>
       <td >
       <div class="input-box1">
                 <input type="text" name="NOO" class="TBout" value="<?= $row['NO'];?>" readonly>
            </div>
       </td>
     </tr>
   
     <tr>
       
       <td>&nbsp;&nbsp;&nbsp; 07. Leave taken in current year</td>

       <?php

}


}
}




?>  


       <?php
     $conn = mysqli_connect("localhost","root","","registation");
   
     if(isset($_SESSION['email']))
     {
        $stud_id = $_SESSION['email'];

        $query = "SELECT * FROM registration WHERE email=  '$stud_id'";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                ?>
   
   
       <td>
       <div class="input-box2">
                       <input type="text" name="LCO" class="TBout"  value="<?= $row['leave_Casual'];?>" readonly>
                   </div>
       </td>
       <td >
       <div class="input-box2">
                       <input type="text" name="LSO" class="TBout"   value="<?= $row['leave_Sick'];?>" readonly>
                   </div>
       </td>
       <td>
       <div class="input-box2">
                       <input type="text" name="LVO" class="TBout" value="<?= $row['leave_Vacation'];?>" readonly>
                   </div>
       </td>
       <td>
       <div class="input-box2">
                       <input type="text" name="LOO" class="TBout"  value="<?= $row['leave_Other'];?>"  readonly>
                   </div>
       </td>
     </tr>
   
     

   
   
   </table>

   <?php

}


}
}




?>  

   <?php
     $conn = mysqli_connect("localhost","root","","registation");
   
     if(isset($_SESSION['email']))
     {
        $stud_id = $_SESSION['email'];

        $query = "SELECT * FROM leaves WHERE email= '$stud_id'ORDER BY id DESC LIMIT 1";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                ?>

   <table border="2" class="TDout">
    <tr>
      <th></th>
      <th>Date</th>
    
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp; 08. Date of first appointment </td>
      <td > 
      <div class="input-box3">    
                      <input type="text" name="DOFAO" class="TBDout" value="<?= $row['DOFA'];?>" readonly>
                     
                  </div>
      </td>

    </tr>
  
    <tr>
      <td> &nbsp;&nbsp;&nbsp;09. Date of commencement of leave </td>
      <td>
      <div class="input-box4">
                      <input type="text" name="DOCOLO" class="TBDout"  value="<?= $row['DOCOL'];?>"  readonly>
                  </div>
      </td>

    </tr>
  
    <tr>
      <td>  &nbsp;&nbsp;&nbsp;10. Date of Resuming dates </td>
      <td>
      <div class="input-box5">
                      <input type="text" name="DORDO" class="TBDout" value="<?= $row['DORD'];?>"  readonly>
                  </div>
      </td>
  
    </tr>
  </table>
  


  
  
              <div class="input-box6">
                  <p>
                       11. Resumes for Leave  :</br>
                      <textarea  name="RFLO"  class="TBTout" readonly ><?= $row['RFL'];?></textarea>
                  </p>
              </div>
  </br>
              <div class="input-box7">
                  <p>
                       12. Address when on leave : </br>
                      <textarea  name="AWOLO" class="TBTout" readonly><?= $row['AWOL'];?></textarea>
                  </p>    
              </div>

            <div class="Oback">
                <button type="submit" class="backO" name="submitoutOE"><a href="leaveaccept.php">BACK</a></button> 
            </div>
        
        </br>

      <?php

}


}
}




?>  


    </form>
    </div>

</body>
</html>