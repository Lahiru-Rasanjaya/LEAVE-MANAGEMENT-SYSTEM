
<?php
   require_once 'header.php';
?>
 
 
 
<style>


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  width: 100%;
  margin-top: -33%;
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

</style>


<ul>
  <li style="float:right" class="logout"><a href="Accept.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
 
 
</ul>



<?php
   require_once 'footer.php';
?>