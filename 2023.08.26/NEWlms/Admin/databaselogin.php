
<?php
   require_once 'header.php';
?>
    

<div class="wrapper">
    <div class="wrapperL">
    <a href="Accept.php"> <span class="close"><ion-icon name="close-outline"></ion-icon></span></a>
        <div class="form-boxlogin">
            <h2>Login</h2>
            <form action="includes/Dlogin.php" method="post">
                       
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "wronglogin2"){
                    echo '<p class="loginerror">Invalid Password</p>';
                }
                else if($_GET["error"] == "wronglogin1"){
                    echo '<p class="loginerror">Invalid Email / Password</p>';
                }
                    
            }
            ?>
            
                
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="text" name="Demail" class="input-valid" required>
                    <label>Email</label>
                </div>


                <div class="input-box">
                    <input type="password" id="myInput" name="Dpassword" required >
                    <span class="icon-eye" onclick="myfunction()"><ion-icon name="eye-outline" id="hide1"></ion-icon>
                                           <ion-icon name="eye-off-outline" id="hide2"></ion-icon></span>
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <label>password</label>
                </div>


         </br>

         <button type="submit" class="btn" name="submit">Login</button> 
            
                </div>
            </form>
        </div>       
    </div> 
</div>



<?php
   require_once 'footer.php';
?>