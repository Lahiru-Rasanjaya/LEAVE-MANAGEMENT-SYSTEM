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

        .update{
            margin-top: 1%;
            margin-bottom: 0.8%;
        }
        .update .submit{
            margin-left: 91.5%;
            width: 100px;
            padding: 10px;
            border: none;
            background: black;
            color: white;
            border-bottom-right-radius: 15px;
        }       
        .submit:hover { 
            background-color:#04AA6D;
            
         }
         .remember-forgot{
            margin-left: 80%;
            margin-top: -3%;
            color:red;

         }
         .pnewRegistration a{
            background-color: #CCE5FF;
            color: black;
        }
      


    </style>
</head>
<body>

<?php

include("database.php");
error_reporting(0);
$em = $_GET['em'];
$un = $_GET['un'];
$uid = $_GET['uid'];
$unid = $_GET['unid'];
$div = $_GET['div'];
$des = $_GET['des'];
$lc = $_GET['lc'];
$ls = $_GET['ls'];
$lv = $_GET['lv'];
$lo = $_GET['lo'];
$pw = $_GET['pw'];
$rpw = $_GET['pw'];
?>


<ul>
  <li style="float:right" class="logoutt"><a href="Accept.php"><span class="icon">
  <ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
 <li style="float:left" class="pnewRegistration"><a href="#"><span class="icon">Edit</a></li> 
  <li style="float:left" class="newRegistration"><a href="dDisplay.php"><span class="icon">Dashboard</a></li> 
  <li style="float:center" class="newAdmin"><a href="#"><span class="icon">ADMIN PANEL</a></li> 
</ul>

    <div class="editC">
        <div class="editCN">
           <label>Edit Category</label>
        </div>
        <div class="Oback">
             <button type="submit" class="backO" name="submitoutOE"><a href="dDisplay.php">BACK</a></button> 
        </div>
    </div>

    <div class="Mlogout">


    <form action="include/register.in.php" method="POST">
        
        <div class="out">
             <label>01. Email : </label>
             <input type="email" class="out" name="email"  value="<?php echo "$em" ?>" required >
    

        <div class="outn">
            <label>02. Name : </label>
            <input type="text" class="out" name="name"  value="<?php echo "$un" ?>"  required>
       </div>
       </div>

       <div class="out">
        <label>03. National ID NO : </label>
        <input type="text" class="out" name="NID"  value="<?php echo "$unid" ?>"  required>
       

       <div class="outATINO">
        <label>04. ATI NO : </label>
        <input type="text" class="out" name="SIDNO"  value="<?php echo "$uid" ?>" required>
       </div>
       </div>

       <div class="out">
        <label>05. Designation : </label>
        <input type="text" class="out" name="desi"  value="<?php echo "$des" ?>" required>
       

       <div class="outDIV">
        <label>06. Division : </label>
        <input type="text" class="out" name="divi"   value="<?php echo "$div" ?>" required>
       </div>
       </div>

       <div class="out">
        <label>07.Password : </label>
        <input type="text" class="out" name="password"  value="<?php echo "$pw" ?>" required>
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
    
   
       <td align="center">
       <div class="input-box2">
                       <input type="text" name="LCO" class="TBout" value="<?php echo "$lc" ?>" required>
                   </div>
       </td>
       <td align="center">
       <div class="input-box2">
                       <input type="text" name="LSO" class="TBout"   value="<?php echo "$ls" ?>" required>
                   </div>
       </td>
       <td align="center">
       <div class="input-box2">
                       <input type="text" name="LVO" class="TBout" value="<?php echo "$lv" ?>" required>
                   </div>
       </td>
       <td align="center">
       <div class="input-box2">
                       <input type="text" name="LOO" class="TBout" value="<?php echo "$lo" ?>"  required>
                   </div>
       </td>
     </tr>

   </table>

   <div class="remember-forgot">
                   <p> <input type="checkbox" name="agree">
                   Final data entry is Complete</p>
    </div>

   <div class="update">
    <button type="submit" class="submit" name="submit">Update</button> 
   </div>
 

</form>

</div>




<?php
   require_once 'footer.php';
?>