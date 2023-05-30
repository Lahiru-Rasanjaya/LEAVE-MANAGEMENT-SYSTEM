
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
.HOME:hover {
    background-color: #04AA6D;
}
.logout:hover {
    background-color: #aa041d;
}
/*.active {
  background-color: #04AA6D;

  li a:hover:not(.active) {
  background-color: #111;
}
}*/




</style>
</head>
<body>

<ul>
  <li class="HOME"><a class="active" href="#home">Home</a></li>
  <li class="HOME"><a href="#news">News</a></li>
  <li class="HOME"><a href="#contact">Contact</a></li>
  <li class="HOME"><a href="#about">About</a></li>
  
 /* <li style="float:right" class="logoutt"><a href="#"></a></li>
  <li style="float:right" class="logout"><a href="../login.php"><span class="icon"><ion-icon name="person-outline"></ion-icon></span>Logout</a></li>
 
</ul>




