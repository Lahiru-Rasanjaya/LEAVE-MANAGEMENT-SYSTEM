<?php 

    require_once 'includes/database.php';
    $query = " SELECT * FROM  registration";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>ATIkurunegala</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- alirt -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  



</head>
<body>
    
<script src="script.js?v=<?php echo time(); ?>"></script>

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
    min-height: 24vh;
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
    
    background-color: #04AA6D;
}

.logoutt:hover {
    
    background-color: #aa041d;
}

.newRegistration:hover{
  background-color: #04AA6D;
}
.newAdmin{
  margin-left:35%;
}
</style>

