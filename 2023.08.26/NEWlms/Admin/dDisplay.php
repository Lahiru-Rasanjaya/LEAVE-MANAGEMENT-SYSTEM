<?php
   require_once 'headerdDis.php';
?>
<style>
/* database page (dDisplay.php)*/

.tableDB1{
    margin: 2%;
    width: 96%;
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
.tableDB1ED button{
  font-size: 15px;
  color: white;
  background-color: #04AA6D;
  height: 30px;
  width: 70px;
}
.tableDB1DE button{
  font-size: 15px;
  color: white;
  background-color: #aa000d;
  height: 30px;
  width: 70px;
}
.tableDB1DE{
  background-color: #aa000d;
}
.tableDB1ED{
  background-color: #04AA6D;
}
.DBtopic1{
  color: #154360 ;
  font-size: 55px;
  text-align: center;
  margin-top: 3%;
  font-family: "Times New Roman";
  margin-bottom: 0%;
}
.DBsearch{
    margin-top: 1%;
    margin-left: 2%;
    margin-bottom: -1%;
    padding: 5px;
    width: 37%;
    font-size: 1.3em;
    color: black;
    border:2px solid rgba(255, 255, 255, 0.945);
    background-color: #D0D3D4;
}
.DBtextbox{
    height: 40px;
    width: 100px;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 18px;
    border-color: #ffffff;
    color: #000000;
    background: #f3f3f3;
    border-radius: 5px;
}
.DBbutton{
    margin-left: 1%;
    margin-top: -1%;
    width: 22%;
    height: 35px;
    background-color: #424949 ;
    color: white;
    font-size: 0.8em;
    
}
.DBbuttonALL{
    margin-left: 1%;
    margin-top: -1%;
    width: 25%;
    height: 35px;
    background-color: #424949 ;
    color: white;
    font-size: 0.8em;
}
.DBbuttonALL:hover{
    background-color: #04AA6D;
}
.DBbutton:hover{
    background-color: #04AA6D;
}
.tableDB1td3{
    color: red;
    height: 60px;
    font-size: 20px;
    background: #f3f3f3;
}
a{
    text-decoration: none;
    color:white;
}
</style>




<body class="bg-dark">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">


                            <div class="DBsearch">
                                <form action="dDisplay.php" method="GET">
                                        <label>&nbsp;ENTER ATI NO: </label>
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="DBtextbox" placeholder="Enter NO: ">
                                        <button type="submit" class="DBbutton" name="DBsearch">Search</button>  
                                        <button type="submit" class="DBbuttonALL" name="DBsearchAll">All Details</button>                                                  
                                </form>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">

                    <table class="tableDB1">
                            <tr class="tableDB1td1">
                                <td align="center"> ATI NO</td>
                                <td align="center"> NAME </td>
                                <td align="center"> EMAIL </td>
                                <td align="center"> NID  </td>
                                <td align="center"> DESIGNATION </td>
                                <td align="center"> DIVISION</td>
                                <td align="center"> EDIT  </td>
                                <td align="center"> DELETE </td>
                            </tr>

                                <?php 
                                    $con = mysqli_connect("localhost","root","","registation");

                                    if(isset($_GET['DBsearch']))
                                    {
                                      
                                      ?><br><br><hr><?php
                                    
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM registration WHERE CONCAT(sliateId) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            { 
                                              
                                              ?>
                                                <tr class="tableDB1td2">
                                                    <td>&nbsp;&nbsp;<?= $items['sliateId']; ?></td>
                                                    <td>&nbsp;&nbsp;<?= $items['username']; ?></td>
                                                    <td>&nbsp;&nbsp;<?= $items['email']; ?></td>
                                                    <td>&nbsp;&nbsp;<?= $items['NID']; ?></td>
                                                    <td>&nbsp;&nbsp;<?= $items['designation']; ?></td>
                                                    <td>&nbsp;&nbsp;<?= $items['division']; ?></td>

                                                    <form method="post">
                                                    <td class="tableDB1ED"   align="center">
                                                    <input type="hidden" name="deleteid" value="<?php echo $items['sliateId']; ?>">
                                                    <button type="submit" class="TDBedit" name="DBedit"><a href="edit.php"> Edit </a></button></td>
                                                    <td class="tableDB1DE"  align="center">
                                                    <input type="hidden" name="deleteid" value="<?php echo $items['sliateId']; ?>">
                                                    <button type="submit" class="TDBdele"  name="DBdelete" value="<?=$row['sliateId'];?>" >Delete</button></td>
                                                    </form>

                                                </tr>
                                                </tbody>                                   
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr class="tableDB1td3">
                                                    <td colspan="8" align="center">&nbsp;&nbsp;&nbsp;&nbsp;No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }else{
                                      ?>
                                    <div class="DBtopic1">
                                       <label>All Members in the Database</label>
                                    </div>
                                    <hr>
                            <?php 
                                  
                                  if(isset($_GET['DBsearchAll']))
                                  {  
                                   
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['sliateId'];
                                        $UserName = $row['username'];
                                        $UserEmail = $row['email'];
                                        $UserNID = $row['NID'];
                                        $UserDES = $row['designation'];
                                        $UserDIV = $row['division'];
                            ?>
                                    <tr class="tableDB1td2">
                                        <td>&nbsp;&nbsp;<?php echo $UserID ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserName ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserEmail ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserNID ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserDES ?></td>
                                        <td>&nbsp;&nbsp;<?php echo $UserDIV ?></td>

                                        <form method="post">
                                        <td class="tableDB1ED"   align="center">
                                        <input type="hidden" name="deleteid" value="<?php echo $row['sliateId']; ?>">
                                        <button type="submit" class="TDBedit" name="DBedit"><a href="edit.php">Edit</a></button></td>
                                        <td class="tableDB1DE"  align="center">
                                        <input type="hidden" name="deleteid" value="<?php echo $row['sliateId']; ?>">
                                        <button type="submit" class="TDBdele"  name="DBdelete" value="<?=$row['sliateId'];?>" >Delete</button></td>
                                        </form>

                                    </tr>        
                                  <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php
                                    }else{

                                    }
                                  }
                                ?>

                                 <?php 
                                  
                                    if(isset($_GET['DBsearch']))
                                    {
                                        
                                    }else{

                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            $UserID = $row['sliateId'];
                                            $UserName = $row['username'];
                                            $UserEmail = $row['email'];
                                            $UserNID = $row['NID'];
                                            $UserDES = $row['designation'];
                                            $UserDIV = $row['division'];
                                ?>
                                        <tr class="tableDB1td2">
                                            <td>&nbsp;&nbsp;<?php echo $UserID ?></td>
                                            <td>&nbsp;&nbsp;<?php echo $UserName ?></td>
                                            <td>&nbsp;&nbsp;<?php echo $UserEmail ?></td>
                                            <td>&nbsp;&nbsp;<?php echo $UserNID ?></td>
                                            <td>&nbsp;&nbsp;<?php echo $UserDES ?></td>
                                            <td>&nbsp;&nbsp;<?php echo $UserDIV ?></td>

                                            <form method="post">
                                            <td class="tableDB1ED"   align="center">
                                                <input type="hidden" name="deleteid" value="<?php echo $row['sliateId']; ?>">
                                                <button type="submit" class="TDBedit" name="DBedit"><a href="edit.php">Edit</a></button></td>
                                            <td class="tableDB1DE"  align="center">
                                                <input type="hidden" name="deleteid" value="<?php echo $row['sliateId']; ?>">
                                                <button type="submit" class="TDBdele"  name="DBdelete" value="<?=$row['sliateId'];?>" >Delete</button></td>
                                            </form>

                                        </tr>        
                                      <?php 
                                        }  
                                ?>                                                                    
                                       
    
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                   

                                    }
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php  
 $con = mysqli_connect("localhost","root","","registation");

 if (isset($_POST['DBdelete'])) {  
    $id = $_POST['deleteid'];  
      $query = "DELETE FROM registration WHERE sliateId = '$id' ";  
      $query_run = mysqli_query($con,$query);  
      if ($query_run) {  
        echo"<script>alert('Delete Sussusfull');window.location.href='dDisplay.php';</script>";
           
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  

        
<?php
   require_once 'footerDis.php';
?>