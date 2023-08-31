<?php
   require_once 'header.php';
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
.HOME{
  margin-left: 1%;
}
.login{
   margin-right: 1%;
}
/*green color*/
.HOME:hover {
    background-color: #04AA6D;
}
.login:hover {
    background-color: #04AA6D;
}
/*.active {
  background-color: #04AA6D;

  li a:hover:not(.active) {
  background-color: #111;
}
}*/
</style>
<!-- <p class="navi">
  <header>
        <h2 class="logo"></h2>
        <nav class="navigation">
            
            Login</a>
          

        </nav>
    </header>
</p> -->
<ul>
  <li class="HOME"><a class="active" href="HOMEpage.php">Home</a></li>
  <li class="HOME"><a href="http://kurunegala.sliate.ac.lk/news.php">News</a></li>
  <li class="HOME"><a href="http://kurunegala.sliate.ac.lk/about.html#footer">Contact</a></li>
  <li class="HOME"><a href="http://kurunegala.sliate.ac.lk/about.html">About</a></li>
  <li style="float:right" class="login"><a href="login.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Login</a></li>
 
</ul>

<?php
   require_once 'footer.php';
?>

