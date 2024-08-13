
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>ATIkurunegala</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



</head>
<body>
    
<script src="script.js?v=<?php echo time(); ?>"></script>

<?php 
    session_start();
    ?>

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
    min-height: 23vh;
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
    
    background-color: #aa041d;
}

.logoutt:hover {
    
    background-color: #aa041d;
}

.newRegistration:hover{
  background-color: #04AA6D;
}
.msg{  
    margin: 1%;
    font-size: 17px;
    margin-left: 3%;
    margin-right: 3%;
    text-align: center;
}
table{
    height: 60px;
    width: 50%;
    margin-left: 25%;
    margin-top: 3%;
    font-size: 18px;
    border-color: #ffffff;
    color: #ffffff;
    background:#4b7aa0;    
}
.sentB{
    color: white;
    background:#4b7aa0; 
    height: 40px;
    width: 110px;
}
.sentB a{    
    text-decoration: none;
    color: white;
}   
    
       
.sentB:hover{
    background-color: #04AA6D;
            
}
.pnewRegistration a{
    background-color: #CCE5FF;
    color: black;
   
}

</style>

<body>
<ul>
  <li class="pnewRegistration"><a href="leaveaccept.php">Last Application</a></li>
  <li class="newRegistration"><a href="allsentapplication.php">All Sent Application</a></li> 
  <li class="newRegistration"><a href="summaryLeave.php">Summary of Leave</a></li>
  <li class="newRegistration"><a href="http://localhost/NEWlms/User/1leave/log.php">Leave Application</a></li>
  <li style="float:right" class="login"><a href="http://localhost/NEWlms/User/login.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
 
</ul>




<div class="senttable">
    <form class="sentfrom">
       <!-- hidden textbox for email  -->
        <input type="hidden"name="email"class="email"value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>">
        
        <table border="1">


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

                         <tr>
                             <td>&nbsp;&nbsp;&nbsp;&nbsp;
                             <?php 
                                if($row['approval']==1){
                                    echo " Your entered information has been sent";
                                }
                                if($row['approval']==2){
                                    echo "The information you entered has been Approved";
                                }
                                if($row['approval']==3){
                                    echo "Your information has been rejected";
                                }
                                ?>
                               </td>
                             <td align="center">
                                <?php 
                                if($row['approval']==1){
                                    echo "Pending..";
                                }
                                if($row['approval']==2){
                                    echo "Approved";
                                }
                                if($row['approval']==3){
                                    echo "Reject";            //  echo "<font color='white'>Reject";
                                }
                                ?>
                            </td>
               
                      <?php
               }
            }
        }
        ?>
                             <td align="center"><button class="sentB"><a href="LAlog.in.php">View Application</a></button></td>
                         </tr>
        </table>
    </form>
</div>

<br>
<hr>

<div class="msg">
    Your entered information has been sent.The entered information will be checked and will be sent via this web page or via a text message to your email account in the future.
</div>

</body>
</html>