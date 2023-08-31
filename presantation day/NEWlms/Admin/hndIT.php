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
    width: 80%;
    margin-left:10%;
    margin-top:5%;
  
    
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

.pnewRegistration a{
    background-color: #CCE5FF;
    color: black;
   
}


</style>



<ul>
    
  <li style="float:left" class="pnewRegistration"><a href="hndit.php"><span class="icon">HNDIT</a></li>
 <li style="float:left" class="newRegistration"><a href="Accept.php"><span class="icon">Dashboard</a></li> 
  <li style="float:right" class="logout"><a href="http://localhost/NEWlms/Admin/login.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
  
 
</ul>


<div class="">
           
   
     <div class="row">
         <div class="col m-auto">
            <div class="card mt-5">
                <table class="tableDB1"border="2">
                            <tr  class="tableDB1td1">
                                <td align="center"> ATI NO</td>
                                <td align="center"> NAME </td>
                                <td align="center"> EMAIL </td>
                                <td align="center"> DESIGNATION </td>
                            </tr>

                            <?php 
                             if(isset($_SESSION['email']))
                             {
                             $stud_id = $_SESSION['email'];
                               $con = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM registration WHERE 	division='HNDIT'"; 
                               $result = mysqli_query($conn,$query);    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['sliateId'];
                                        $UserName = $row['username'];
                                        $UserEmail = $row['email'];
                                        $UserAge = $row['designation'];
                                    
                            ?>
                                  
                                    <tr class="tableDB1td2">
                                        <td>&nbsp;&nbsp;<?php echo $UserID ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserName ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserEmail ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserAge ?></td>

                                       
                                        
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
