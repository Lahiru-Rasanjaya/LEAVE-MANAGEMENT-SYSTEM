
<?php
   require_once 'headerdDis.php';
?>     
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
            padding-bottom: 5%;
            margin-bottom: 5%;
            padding-left: 12%;
            border-style: solid;
            
          
        }
        .Mlogout .SLIATEO{
        
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center;
            margin: -25px;
        }
        
       
        .out{
            margin-bottom: 2%;
        }
       
     
        .out{
            margin-top:5%;
            height: 35px;
            font-size: 20px;
            padding-left: 10px;  
        }
        .pnewRegistration a{
            background-color: #CCE5FF;
            color: black;
   
        }
       
      

    </style>
</head>

<body>
<ul>  
    <li style="float:left" class="pnewRegistration"><a href="hndm.php"><span class="icon">User Details</a></li>
   <li style="float:left" class="newRegistration"><a href="Accept.php"><span class="icon">Dashboard</a></li> 
    <li style="float:right" class="logoutt"><a href="http://localhost/NEWlms/Admin/login.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
  </ul>
    <div class="Mlogout">
    <form class="logout" action="log.in.php" method="POST">
  
    
        <div class="SLIATEO"></div>

<?php  $email = $_GET['em'];   ?>

       

        <?php
     $conn = mysqli_connect("localhost","root","","registation");
   
     

        $query = "SELECT * FROM registration WHERE email= '$email'";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                ?>
        <div class="out">
             <label>01. Email : </label>
             <input type="email" class="out" name="email"  value="<?= $row['email'];?>"  readonly >
        </div>
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
        <input type="text" class="out" name="atino" value="<?= $row['sliateId'];?>" readonly>
       </div>

       <div class="out">
        <label>05. Designation : </label>
        <input type="text" class="out" name="des" value="<?= $row['designation'];?>" readonly>
       </div>

       <div class="out">
        <label>06. Division : </label>
        <input type="text" class="out" name="divi"  value="<?= $row['division'];?>" readonly>
       </div>


      
       

       <?php

}


}





?>  


  


    </form>
    </div>

</body>
</html>