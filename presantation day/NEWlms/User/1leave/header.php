      
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


</style>
</head>
<body>

<ul>
  <li class="pnewRegistration"><a href="http://localhost/NEWlms/User/1leave/log.php">Leave Application</a></li>
  <li class="newRegistration"><a href="leaveaccept.php">Last Application</a></li>
  <li class="newRegistration"><a href="summaryLeave.php">Summary of Leave</a></li>
  <li style="float:right" class="logout"><a href="../login.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
 
</ul>




