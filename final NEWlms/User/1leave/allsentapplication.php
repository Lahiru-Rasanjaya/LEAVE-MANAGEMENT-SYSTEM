<style>
.pnewRegistration a{
    background-color: #CCE5FF;
    color: black;
   
}
.main{
    text-align:center;
}
.mainOne{
     margin-left:-50%;
     margin-top: 5%;
     width:20%;
     height:40%;
     background-color: #333;
     color:white;
     font-size: 1em;
     border-radius: 15px;
}
.mainOne:hover {
    
    background-color: #04AA6D;
}

.mainTwo{
     margin-top: -18.9%;
     width:20%;
     height:40%;
     background-color: #333;
     color:white;
     font-size: 1em;
     border-radius: 15px;
}
.mainTwo:hover {
    
    background-color: #04AA6D;
}
.mainTree{
     margin-left:50%;
     margin-top: -18.9%;
     width:20%;
     height:40%;
     background-color: #333;
     color:white;
     font-size: 1em;
     border-radius: 15px;
}
.mainTree:hover {
    
    background-color: #04AA6D;
}

</style>
<?php
   require_once 'headerdDis.php';
?>

<ul>
  <li class="pnewRegistration"><a href="allsentapplication.php">All Sent Application</a></li>
  <li class="newRegistration"><a href="leaveaccept.php">Last Application</a></li>
  <li class="newRegistration"><a href="summaryLeave.php">Summary of Leave</a></li>
  <li class="newRegistration"><a href="http://localhost/NEWlms/User/1leave/log.php">Leave Application</a></li>
  <li style="float:right" class="login"><a href="http://localhost/NEWlms/User/login.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
 
</ul>


<div class="main">
    <div>
    <a href="pending.php"> <button  class="mainOne">Pending Applictions</button></a>
    </div>
    <div>
    <a href="approved.php">  <button  class="mainTwo">Approved Applictions</button></a>
    </div>
    <div>
    <a href="reject.php">   <button class="mainTree">Rejact Applictions</button></a>
    </div>
</div>

<?php
   require_once 'footerDis.php';
?>
