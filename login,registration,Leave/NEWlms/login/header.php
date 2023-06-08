<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>ATIkurunegala</title>
    <link rel="stylesheet"href="style.css?v=<?php echo time(); ?>">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




    

<style>


/*navigation bar and background image*/
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('sliateku1.jpg')no-repeat;
    background-size: cover;
    background-position: center;
}

header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;

}
/*SLIATE*/
.logo{
    font-size: 2em;
    color: #fff;
    user-select: none;
}
/*.navigation a h1{
    position: relative;
    font-size: 1.1em;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
    display: none;
}
*/

/*LOGIN */
.navigation a{
    font-size: 1.5em;
    color: #fff;
    text-decoration: none;
    border: 0.5px solid #fff;
    padding: 6px;
}
.navigation a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6PX;
    width: 100%;
    height: 3PX;
    background: #fff;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .5s;

}
.navigation a:hover::after{
    transform-origin: left;
    transform: scaleX(1);
}/*
.navigation .btnLogin-popup{
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
   border-radius: 6px;
   cursor: pointer;
   font-size: 1.1em;
   color: #fff;
   font-weight: 500;
   margin-left: 40px;
   transition: .5s;


}
.navigation .btnLogin-popup:hover{
    background: #fff;
}*/
</style>

</head>


<body>
 <p class="navi"></p>
  <header>
        <h2 class="logo">SLIATE</h2>
        <nav class="navigation">
            
            <a href="login.php">Login</a>
          

        </nav>
    </header>
<script src="script.js?v=<?php echo time(); ?>"></script>