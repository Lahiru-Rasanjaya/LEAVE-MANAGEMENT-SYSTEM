<?php
   require_once 'header.php';
?>
  


    <div class="wrapper">
    <div class="wrapperR">
    <a href="http://localhost/NEWlms/Admin/dDisplay.php"> <span class="close"><ion-icon name="close-outline"></ion-icon></span></a>
        <div class="form-boxregister">

        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo '<p class="loginerror">Empty Inputs</p>';
                }
                else if($_GET["error"] == "invalidEmail"){
                    echo '<p class="loginerror">Invalid Email </p>';
                }
                else if($_GET["error"] == "passwordsdontmatch"){
                    echo '<p class="loginerror"> Password not Match</p>';
                }
                else if($_GET["error"] == "userSLIATEID"){
                    echo '<p class="loginerror">Invalid SLIATE ID NO</p>';
                }
                else if($_GET["error"] == "userEmail"){
                    echo '<p class="loginerror">Please Enter Your Email</p>';
                }
                else if($_GET["error"] == "userNID"){
                    echo '<p class="loginerror">Invalid National ID NO</p>';
                }
                    
            }
            ?>


            <h2 class="Registation">Registation</h2>
            <form action="includes/register.in.php" method="POST">


                <div class="input-box">
                    <div class="input-box1">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <input type="Username" name="name" required>
                        <label>Enter your name</label>
                    </div>

                    <div class="input-box1">
                         <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                         <input type="text" name="NID" required>
                         <label>Enter your National ID NO</label>
                </div>
                </div>
   


                <div class="input-box">
                    <div class="input-box1">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="text" name="email" required>
                        <label>Enter your email</label>
                    </div>

                    <div class="input-box1">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <input type="text" name="SIDNO" required>
                        <label>Enter your ATI NO</label>
                    </div>     
                </div>   
       


                <div class="input-box">
                    <div class="input-box1">
                         <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                         <input type="text" name="desi" required>
                         <label>Enter your Designation</label>
                    </div>

                    <div class="input-box1">
                         <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                         <input type="text" name="divi" required>
                         <label>Enter your Division</label>
                    </div>
                </div>



             
                <div class="input-box">
                     <div class="input-box1">
                         <input type="password" id="myInput1" name="password" required >
                         <span class="icon-eye" onclick="myfunction1()"><ion-icon name="eye-outline" id="hide11"></ion-icon>
                                           <ion-icon name="eye-off-outline" id="hide22"></ion-icon></span>
                         <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                         <label>Create password</label>
                     </div>

                     <div class="input-box1">
                         <input type="password" id="myInput2" name="REpassword" required >
                         <span class="icon-eye" onclick="myfunction2()"><ion-icon name="eye-outline" id="hide111"></ion-icon>
                                           <ion-icon name="eye-off-outline" id="hide222"></ion-icon></span>
                         <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                         <label>Confirm password</label>
                     </div>
                </div>



                <h2 class="LTICY">Leave taken in current year</h2>

                <div class="input-box">
                    <div class="input-box1">
                         <span class="icon"><ion-icon name="medkit-outline"></ion-icon></span>
                         <input type="text" name="Casual" placeholder="Casual">
                         <label>Casual</label>
                    </div>

                    <div class="input-box1">
                         <span class="icon"><ion-icon name="medkit-outline"></ion-icon></span>
                         <input type="text" name="lSick" placeholder="Sick">
                         <label>Sick</label>
                    </div>
                </div>

                <div class="input-box">
                <div class="input-box1">
                         <span class="icon"><ion-icon name="medkit-outline"></ion-icon></span>
                         <input type="text" name="Vacation" placeholder="Vacation">
                         <label>Vacation</label>
                    </div>

                    <div class="input-box1">
                         <span class="icon"><ion-icon name="medkit-outline"></ion-icon></span>
                         <input type="text" name="Other" placeholder="Other">
                         <label>Other</label>
                    </div>>
                 </div>



          
                <div class="remember-forgot">
                    <label><input type="checkbox" name="agree">
                    I agree to the terms and condition   <a href="seemore.html" target="_blank" class="seemore">see more..</a></p></label>
                </div>


                <button type="submit" class="btn" name="submit">Register</button> 
                
               

           



            </form>
            
        </div>
        
    </div>
    </div>

<?php
   require_once 'footer.php';
?>

