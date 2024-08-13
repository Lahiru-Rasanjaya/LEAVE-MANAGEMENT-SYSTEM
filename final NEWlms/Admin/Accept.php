<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>ATIkurunegala</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



</head>
<body>
    
<script src="script.js?v=<?php echo time(); ?>"></script>

<div class="name"></div>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
.name{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 24vh;
    background: url('SLIATEnavi.jpg')no-repeat;
    background-size: cover;
    background-position: center;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  width: 100%;

}

li {
  float: left;
}

li a {
  display: block;
  color: white;

  padding: 14px 16px;
  text-decoration: none;
}


/*green color*/
.login:hover {
    
    background-color: #04AA6D;
}

.logout:hover {
    
    background-color: #aa041d;
}
.newRegistration:hover{
  background-color: #04AA6D;
}
.pnewRegistration a{
    background-color: #CCE5FF;
    color: black;
   
}
.tableDB1{
  padding-top: 1%;
  padding-left: 2%;
  width: 50%;
  border:none;
}
.tableDB1td2{
  font-size: 18px;
  height: 30px;
  color: #ECF0F1;
}
.tableDB1ED{
  background-color: #04AA6D;

}
.tableDB1ED button{
  font-size: 15px;
  color: white;
  background-color: #04AA6D;
  height: 25px;
  width: 50px;
  border-radius: 5px;

}
.th1{
background-color: #aa041d;
}
.th2{
background-color: #aa041d;
}
a{
    text-decoration: none;
    color:white;
}
.totalAll{
  margin-left:35.5%;
  margin-top:2%;
  width:30%;
  height:200px;
  background-color: #333;
  color:white;
  font-size: 1.5em;
  border-radius: 15px;
  text-align:center;
  
}
.total{
   padding-top:8%;

}
.total1{
  margin-left: -5%;
  padding-top:5%;
  text-align:center;
  color:#04AA6D;
  
}
.totalAllIT{
  margin-left:2%;
  margin-top:2%;
  width:15%;
  height:200px;
  background-color: #333;
  color:white;
  font-size: 1.5em;
  border-radius: 15px;
  text-align:center;

  
}
.totalHNDIT{
   padding-top:20%;

}
.total2{
  margin-left: -5%;
  padding-top:10%;
  text-align:center;
  color:#04AA6D;
  
}
.totalAllA{
  margin-left:23%;
  margin-top:-14.8%;
  width:15%;
  height:200px;
  background-color: #333;
  color:white;
  font-size: 1.5em;
  border-radius: 15px;
  text-align:center;

  
}
.totalHNDA{
   padding-top:20%;

}
.total3{
  margin-left: -5%;
  padding-top:10%;
  text-align:center;
  color:#04AA6D;
  
}
.totalAllE{
  margin-left:43%;
  margin-top:-14.8%;
  width:15%;
  height:200px;
  background-color: #333;
  color:white;
  font-size: 1.5em;
  border-radius: 15px;
  text-align:center;

  
}
.totalHNDE{
   padding-top:20%;

}
.total4{
  margin-left: -5%;
  padding-top:10%;
  text-align:center;
  color:#04AA6D;
  
}
.totalAllM{
  margin-left:63%;
  margin-top:-14.8%;
  width:15%;
  height:200px;
  background-color: #333;
  color:white;
  font-size: 1.5em;
  border-radius: 15px;
  text-align:center;

  
}
.totalHNDM{
   padding-top:20%;

}
.total5{
  margin-left: -5%;
  padding-top:10%;
  text-align:center;
  color:#04AA6D;
  
}
.totalAllTHM{
  margin-left:83%;
  margin-top:-14.8%;
  width:15%;
  height:200px;
  background-color: #333;
  color:white;
  font-size: 1.5em;
  border-radius: 15px;
  text-align:center;
  margin-bottom:2%;

  
}
.totalHNDTHM{
   padding-top:20%;

}
.total6{
  margin-left: -5%;
  padding-top:10%;
  text-align:center;
  color:#04AA6D;
  
}
.hr{
  margin-top:7%;
}
.totalHNDITlink{
  margin-top:6%;
  color:white;
  font-size: 0.8em;
  text-align:center;
}
.totalHNDITlink:hover {
    
    background-color: #04AA6D;
}
.totalHNDITAlink{
  margin-top:2%;
  color:white;
  font-size: 0.8em;
  text-align:center;
}
.totalHNDITAlink:hover {
    
    background-color: #04AA6D;
}
.backcolor{
  background:#EBF5FE;
}

</style>


<ul>
<li style="float:left" class="pnewRegistration"><a href="Accept.php"><span class="icon">Dashboard</a></li> 
  <li style="float:left" class="newRegistration"><a href="pending.php"><span class="icon">Pending List</a></li>
  <li style="float:left" class="newRegistration"><a href="approvedList.php"><span class="icon">Approved List</a></li>
  <li style="float:right" class="logout"><a href="http://localhost/NEWlms/Admin/login.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
  <li style="float:right" class="login"><a href="databaselogin.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Login Database</a></li>
  
 
</ul>

<div>
<!-- pending message -->
<div class="container">
     <div class="row">
         <div class="col m-auto">
            <div class="card mt-5">
                <table class="tableDB1"border="2">
                            <?php 
                               $conn = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM leaves WHERE approval='1' ORDER BY id DESC LIMIT 1"; 
                               $result = mysqli_query($conn,$query);    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        
                            ?>
                                  
                                    <tr class="tableDB1td2">
                                         <td class="th1">&nbsp;<ion-icon name="notifications-circle-outline"></ion-icon>&nbsp;<?php echo "Database Notifications" ?></td>
                                         <td align="center"class="th2"><ion-icon name="person-add-outline"></ion-icon>&nbsp;<?php echo "Leave application has been received" ?>
                                        
                                         <form action="log.in.php" method="POST">
                                        <td class="tableDB1ED"   align="center">
                                                    <input type="hidden" name="deleteid" value="<?php echo $items['sliateId']; ?>">
                                                    <button type="submit" class="TDBedit" name="DBedit"><a href='pending.php'> View </a></button>
                                                    </td>
                                         </form>
                                        
                                        </td>

                                    </tr>   
                                      
                            <?php 
                                    }  
                            ?> 
                             

                 </table>
            </div>
         </div>
     </div>
 </div>



 <!-- new user message -->
<div class="container">
     <div class="row">
         <div class="col m-auto">
            <div class="card mt-5">
                <table class="tableDB1"border="2">
                            <?php 
                               $conn = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM registration WHERE approval='1'"; 
                               $result = mysqli_query($conn,$query);    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                      $UserEmail = $row['email'];
                            ?>
                                  
                                    <tr class="tableDB1td2">
                                        <td class="th1">&nbsp;<ion-icon name="notifications-circle-outline"></ion-icon>&nbsp;<?php echo "Database Notifications" ?></td>
                                        <td align="center" class="th2" ><ion-icon name="person-add-outline"></ion-icon>&nbsp;<?php echo "New user has logged into the system" ?></td>

                                        <form action="log.in.php" method="POST">
                                        <td class="tableDB1ED"   align="center">
                                                    <input type="hidden" name="deleteid" value="<?php echo $items['sliateId']; ?>">
                                                    <button type="submit" class="TDBedit" name="DBedit"><a href='AcceptOK.php?& em=<?php echo $UserEmail ?>'> OK </a></button>
                                                    </td>

                                                    <td class="tableDB1ED"   align="center">
                                                    <input type="hidden" name="deleteid" value="<?php echo $items['sliateId']; ?>">
                                                    <button type="submit" class="TDBedit" name="DBedit"><a href='notificationView.php?& em=<?php echo $UserEmail ?>'> View </a></button>
                                                    </td>
                                         </form>
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?> 
                             

                 </table>
            </div>
         </div>
     </div>
 </div>
 
<br>

<div class="backcolor">
<br>

 <!-- total users-->
 <div class="container">
     <div class="row">
         <div class="col m-auto">
            <div class="totalAll">
                
            <div class="total">Total Users</div>
                            <?php 
                               $conn = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM registration "; 
                               $result = mysqli_query($conn,$query);    
                                   
                               if($total=mysqli_num_rows($result))
                               {
                                echo'<h4 class="total1">'.$total.'</h4>';
                               }else
                               {
                                echo'<h4 class="total1">'.$total.'</h4>';
                               }
                            ?> 
                            
                             
                            <div class="hr"><hr></div>
                            <div class="totalHNDITAlink"><a href="hnd.php">View Details</a></div>                                                            
    
               
            </div>
         </div>
     </div>
 </div>

  <!-- HNDIT total users-->
  <div class="container">
     <div class="row">
         <div class="col m-auto">
            <div class="totalAllIT">
                
            <div class="totalHNDIT">HNDIT</div>
                            <?php 
                               $conn = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM registration WHERE division='HNDIT'  "; 
                               $result = mysqli_query($conn,$query);    
                                   
                               if($total=mysqli_num_rows($result))
                               {
                                echo'<h4 class="total2">'.$total.'</h4>';
                               }else
                               {
                                echo'<h4 class="total2">'.$total.'</h4>';
                               }
                            ?> 
                            
                             <div class="hr"><hr></div>
                            <div class="totalHNDITlink"><a href="hndit.php">View Details</a></div>                                                                   
                                   

               
            </div>
         </div>
     </div>
 </div>

   <!-- HNDA total users-->
   <div class="container">
     <div class="row">
         <div class="col m-auto">
            <div class="totalAllA">
                
            <div class="totalHNDA">HNDA</div>
                            <?php 
                               $conn = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM registration WHERE division='HNDA'  "; 
                               $result = mysqli_query($conn,$query);    
                                   
                               if($total=mysqli_num_rows($result))
                               {
                                echo'<h4 class="total3">'.$total.'</h4>';
                               }else
                               {
                                echo'<h4 class="total3">'.$total.'</h4>';
                               }
                            ?> 
                            
                            <div class="hr"><hr></div>
                            <div class="totalHNDITlink"><a href="hnda.php">View Details</a></div> 
                                                                                           
                                   

               
            </div>
         </div>
     </div>
 </div>

   <!-- HNDE total users-->
   <div class="container">
     <div class="row">
         <div class="col m-auto">
            <div class="totalAllE">
                
            <div class="totalHNDE">HNDE</div>
                            <?php 
                               $conn = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM registration WHERE division='HNDE'  "; 
                               $result = mysqli_query($conn,$query);    
                                   
                               if($total=mysqli_num_rows($result))
                               {
                                echo'<h4 class="total4">'.$total.'</h4>';
                               }else
                               {
                                echo'<h4 class="total4">'.$total.'</h4>';
                               }
                            ?> 
                            
                             
                            <div class="hr"><hr></div>
                            <div class="totalHNDITlink"><a href="hnde.php">View Details</a></div>                                                        
                                   

               
            </div>
         </div>
     </div>
 </div>

   <!-- HNDM total users-->
   <div class="container">
     <div class="row">
         <div class="col m-auto">
            <div class="totalAllM">
                
            <div class="totalHNDM">HNDM</div>
                            <?php 
                               $conn = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM registration WHERE division='HNDM'  "; 
                               $result = mysqli_query($conn,$query);    
                                   
                               if($total=mysqli_num_rows($result))
                               {
                                echo'<h4 class="total5">'.$total.'</h4>';
                               }else
                               {
                                echo'<h4 class="total5">'.$total.'</h4>';
                               }
                            ?> 
                            
                            <div class="hr"><hr></div>
                            <div class="totalHNDITlink"><a href="hndm.php">View Details</a></div> 
                                                                                           
                                   

               
            </div>
         </div>
     </div>
 </div>

 
   <!-- HNDTHM total users-->
   <div class="container">
     <div class="row">
         <div class="col m-auto">
            <div class="totalAllTHM">
                
            <div class="totalHNDTHM">HNDTHM</div>
                            <?php 
                               $conn = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM registration WHERE division='HNDTHM'  "; 
                               $result = mysqli_query($conn,$query);    
                                   
                               if($total=mysqli_num_rows($result))
                               {
                                echo'<h4 class="total6">'.$total.'</h4>';
                               }else
                               {
                                echo'<h4 class="total6">'.$total.'</h4>';
                               }
                            ?> 
                            
                             
                            <div class="hr"><hr></div>
                            <div class="totalHNDITlink"><a href="hndthm.php">View Details</a></div>                                           
                                   

               
            </div>
         </div>
     </div>
 </div>
 <br>
<div>
</body>
</html>