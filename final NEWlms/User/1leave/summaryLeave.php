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
    width: 60%;
    margin-left:20%;
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
  <li class="pnewRegistration"><a href="summaryLeave.php">Summary of Leave</a></li>
  <li class="newRegistration"><a href="leaveaccept.php">Last Application</a></li>
  <li style="float:left" class="newRegistration"><a href="allsentapplication.php"><span class="icon">All Sent Application</a></li> 
  <li class="newRegistration"><a href="http://localhost/NEWlms/User/1leave/log.php">Leave Application</a></li>
  <li style="float:right" class="logoutt"><a href="http://localhost/NEWlms/User/login.php"><span class="icon">
  <ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
 </ul>



<div class="">
             <!-- hidden email -->
             <input type="hidden" class="out" name="email"  value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" readonly >
        </div>

   
     <div class="row">
         <div class="col m-auto">
            <div class="card mt-5">
                <table class="tableDB1"border="2">
                            <tr  class="tableDB1td1">
                                <td align="center"> CASUAL LEAVE</td>
                                <td align="center"> SICK LEAVE </td>
                                <td align="center"> VACATION LEAVE </td>
                                <td align="center"> OTHER LEAVE </td>
                            </tr>

                            <?php 
                             if(isset($_SESSION['email']))
                             {
                             $stud_id = $_SESSION['email'];
                               $con = mysqli_connect("localhost","root","","registation");
                               $query = "SELECT * FROM registration WHERE email='$stud_id'"; 
                               $result = mysqli_query($conn,$query);    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['leave_Casual'];
                                        $UserName = $row['leave_Sick'];
                                        $UserEmail = $row['leave_Vacation'];
                                        $UserAge = $row['leave_Other'];
                                    
                            ?>
                                  
                                    <tr class="tableDB1td2">
                                        <td align="center">&nbsp;&nbsp;<?php echo $UserID ?></td>
                                        <td align="center">&nbsp;&nbsp;<?php echo $UserName ?></td>
                                        <td align="center">&nbsp;&nbsp;<?php echo $UserEmail ?></td>
                                        <td align="center">&nbsp;&nbsp;<?php echo $UserAge ?></td>

                                       
                                        
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
