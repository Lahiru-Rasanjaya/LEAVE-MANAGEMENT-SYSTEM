
<?php
   require_once 'headerdDis.php';
?>

<?php 
    session_start();
    ?>

<style>
/* database page (dDisplay.php)*/

.tableDB1{
    margin: 2%;
    width: 96%;
}

.tableDB1td1{
  font-size: 18px;
  height: 40px;
  background-color: #1B2631;
  color: white;
  border-color: #1B2631;
}
.tableDB1td2{
  font-size: 19px;
  height: 50px;
  color: #ECF0F1;
  background-color: #424949;

}
.tableDB1ED button{
  font-size: 15px;
  color: white;
  background-color: #04AA6D;
  height: 35px;
  width: 70px;

}
.tableDB1DE button{
  font-size: 15px;
  color: white;
  background-color: #aa000d;
  height: 30px;
  width: 70px;
  
}
.tableDB1DE{
  background-color: #aa000d;
}
.tableDB1ED{
  background-color: #04AA6D;
}
.DBtopic1{
  color: #154360 ;
  font-size: 55px;
  text-align: center;
  margin-top: 3%;
  font-family: "Times New Roman";
  margin-bottom: 0%;
}
.DBsearch{
    margin-top: 1%;
    margin-left: 2%;
    margin-bottom: -1%;
    padding: 5px;
    width: 37%;
    font-size: 1.3em;
    color: black;
    border:2px solid rgba(255, 255, 255, 0.945);
    background-color: #D0D3D4;
}
.DBtextbox{
    height: 40px;
    width: 100px;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 18px;
    border-color: #ffffff;
    color: #000000;
    background: #f3f3f3;
    border-radius: 5px;
}
.DBbutton{
    margin-left: 1%;
    margin-top: -1%;
    width: 22%;
    height: 35px;
    background-color: #424949 ;
    color: white;
    font-size: 0.8em;
    
}
.DBbuttonALL{
    margin-left: 1%;
    margin-top: -1%;
    width: 25%;
    height: 35px;
    background-color: #424949 ;
    color: white;
    font-size: 0.8em;
}
.DBbuttonALL:hover{
    background-color: #04AA6D;
}
.DBbutton:hover{
    background-color: #04AA6D;
}
.tableDB1td3{
    color: red;
    height: 60px;
    font-size: 20px;
    background: #f3f3f3;
}
a{
    text-decoration: none;
    color:white;
}
.pnewRegistration a{
    background-color: #CCE5FF;
    color: black;
   
}
</style>
<div class="out">
             <!-- hidden email -->
             <input type="hidden" class="out" name="email"  value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" readonly >
        </div>
<ul>
  <li style="float:right" class="logoutt"><a href="http://localhost/NEWlms/User/login.php"><span class="icon">
  <ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
  <li style="float:left" class="pnewRegistration"><a href="approved.php"><span class="icon">Approved List</a></li> 
  <li style="float:left" class="newRegistration"><a href="allsentapplication.php"><span class="icon">All Sent Application</a></li> 
</ul>

 <div class="container">
     <div class="row">
         <div class="col m-auto">
            <div class="card mt-5">
                <table class="tableDB1"border="2">
                            <tr  class="tableDB1td1">
                                <td align="center"> ATI NO</td>
                                <td align="center"> NAME </td>
                                <td align="center"> EMAIL </td>
                                <td align="center"> NID  </td>
                                <td align="center"> DESIGNATION </td>
                                <td align="center"> DIVISION</td>
                                <td align="center">ACTION</td>
                            </tr>

                            <?php 
                            
                             if(isset($_SESSION['email']))
                               {
                               $stud_id = $_SESSION['email'];
                               $con = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM leaves WHERE email='$stud_id' && approval='2' "; 
                               $result = mysqli_query($conn,$query);    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['ANO'];
                                        $UserName = $row['username'];
                                        $UserEmail = $row['email'];
                                        $UserAge = $row['NID'];
                                        $UserDES = $row['DES'];
                                        $UserDIV = $row['DIVI'];
                                        $approval = $row['id'];
                                      
                                        
                                     
                            ?>
                                  
                                    <tr class="tableDB1td2">
                                        <td>&nbsp;&nbsp;<?php echo $UserID ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserName ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserEmail ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserAge ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserDES ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserDIV ?></td>

                                        <form action="log.in.php" method="POST">
                                        <td class="tableDB1ED"   align="center">
                                                    <input type="hidden" name="deleteid" value="<?php echo $items['sliateId']; ?>">
                                                    <button type="submit" class="TDBedit" name="DBedit"><a href='LAlog.in.php?
                                                    & uid=<?php echo $approval ?>& em=<?php echo $UserEmail ?>'> View </a></button>
                                                    </td>
                                         </form>
                                        
                                    </tr>        
                            <?php 
                                    } 
                                } 
                            ?> 
                            
                             
                                                                                           
                                   

                 </table>
            </div>
         </div>
     </div>
 </div>




<?php
   require_once 'footerDis.php';
?>
