
        <?php

require "../phpmailer/PHPMailer.php";
require "../phpmailer/SMTP.php";
require "../phpmailer/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\POP3;
use PHPMailer\PHPMailer\SMTP;


        $conn = mysqli_connect("localhost","root","","registation");
   
        $id = $_GET['em'];  
        $idd = $_GET['uid'];   
        $query = "UPDATE leaves SET approval='2' WHERE id='$idd' ";
            if(mysqli_query($conn, $query) === TRUE){
             
                
                $mail = new PHPMailer(true);
                // set to use smtp
                $mail -> isSMTP();
                // define smtp host
                $mail -> Host = "smtp.gmail.com";
                // authentication
                $mail -> SMTPAuth = "true";
                // set encryption type
                $mail -> SMTPSecure = "tls";
                // set port
                $mail -> Port = "587";
                // email username
                $mail -> Username = "leave4584@gmail.com";
                // password
                $mail -> Password = "qjnbabylawtthaze";
                // subject
                $mail -> Subject = "Leave Accepted";
                // from set
                $mail -> setFrom("leave4584@gmail.com", "Leave Management System ATI KURUNEGALA");
                
                $email = $id;
                $message = "Your Leave Application Accepted";
                // body
                $mail -> isHTML(true);
                $mail -> CharSet = "UTF-8";
                $mail -> Body = $message;
                // recipient
                $mail -> addAddress($id);
                
                
                $mail -> Send();
                $mail ->  smtpClose();

                echo"<script>alert('Application Accepted');window.location.href='http://localhost/NEWlms/Admin/pending.php';</script>";
                
                
            }else{
                echo  "Error: " . $query . "</br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        
        