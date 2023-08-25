<?php
   require_once 'headerdDis.php';
?>
       
    <?php 
    session_start();
    ?>

    <style>
        label{
          width: 180px;
          display: inline-block;
          
        }
        .Mlogout{
            margin-top: -0.2%;
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 5%;
            border-style: solid;
            border-bottom-right-radius: 15px;
            border-bottom-left-radius: 15px;
          
        }
    
        .out{
            margin-top: 1%;
            margin-left: 2%;
            margin-bottom: 2%;
        }
        table{
            margin-left: 2%;
            margin-bottom: 5%;
            margin-top: 5%;
            width: 96%;
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
            margin-left: 8%; 
            padding-left: 1%; 
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

         .backO{
            margin-top: -5%;
            margin-left: 91.5%;
            margin-bottom: 0.6%;
            width: 100px;
            padding: 10px;
            border: none;
            background-color: black;
            color: white;
            border-top-right-radius: 15px;
           
         }

        .backO a{    
            text-decoration: none;
            color: white;
        }   
    
       
        .backO:hover {
            background-color: #aa041d;
            color:#aa041d;
            
         }
         .editC{
            margin-top:  1%;
            margin-left: 5%;
            margin-right: 5%;
            border-style: solid;
            margin-top: 1.5%;
            background-color:#F6FBFF;
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;

         }
        .editCN{
            margin-top: 1%;
            margin-left: 2%;
            margin-bottom: -1.5%;
            font-size: 20px;
            font-weight: 700;
         }
         textarea{
            display: block;
            resize: none;      
        }
        .outn{
            height: 35px;
            font-size: 20px;
            margin-top: -5%;
            padding-left: 50%;
        }
        .outATINO{
            height: 35px;
            font-size: 20px;
            margin-top: -5%;
            margin-left: 50%;
        }
        .outDIV{
            height: 35px;
            font-size: 20px;
            margin-top: -5%;
            padding-left: 50%;
        }
      


    </style>
</head>
<body>
    <div class="editC">
        <div class="editCN">
           <label>Edit Category</label>
        </div>
        <div class="Oback">
             <button type="submit" class="backO" name="submitoutOE"><a href="leaveaccept.html">BACK</a></button> 
        </div>
    </div>

    <div class="Mlogout">
    <form class="logout" action="log.in.php" method="POST">
   
        <div class="out">
             <label>01. Email : </label>
             <input type="email" class="out" name="email"  value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" required >
        

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

        <div class="outn">
            <label>02. Name : </label>
            <input type="text" class="out" name="name"  value="&nbsp;<?= $row['username'];?>"  required>
       </div>
       </div>

       <div class="out">
        <label>03. National ID NO : </label>
        <input type="text" class="out" name="nid" value="<?= $row['NID'];?>"  required>
       

       <div class="outATINO">
        <label>04. ATI NO : </label>
        <input type="text" class="out" name="atino" value="&nbsp;<?= $row['ANO'];?>" required>
       </div>
       </div>

       <div class="out">
        <label>05. Designation : </label>
        <input type="text" class="out" name="des" value="<?= $row['DES'];?>" required>
       

       <div class="outDIV">
        <label>06. Division : </label>
        <input type="text" class="out" name="divi"  value="&nbsp;<?= $row['DIVI'];?>" required>
       </div>
       </div>


       <table border="2" class="Tout">
        <tr>
            <th></th>
            <th>Casual</th>
            <th>Sick</th>
            <th>Vacation</th>
            <th>Other</th>
          </tr>
       
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
                       <input type="text" name="LCO" class="TBout"  value="<?= $row['leave_Casual'];?>" required>
                   </div>
       </td>
       <td >
       <div class="input-box2">
                       <input type="text" name="LSO" class="TBout"   value="<?= $row['leave_Sick'];?>" required>
                   </div>
       </td>
       <td>
       <div class="input-box2">
                       <input type="text" name="LVO" class="TBout" value="<?= $row['leave_Vacation'];?>" required>
                   </div>
       </td>
       <td>
       <div class="input-box2">
                       <input type="text" name="LOO" class="TBout"  value="<?= $row['leave_Other'];?>"  required>
                   </div>
       </td>
     </tr>
   
     

   
   
   </table>

   <?php

}


}
}




?>   


</form>
</div>



<?php
   require_once 'footerDis.php';
?>