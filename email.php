<?php
$name = $_POST['First_Name'];
$email = $_POST['Email'];
$number = $_POST['Number'];
$msg = $_POST['Message'];


require 'PHPMailer-master/PHPMailerAutoload.php';


$mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 1;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "kalansooriya666@gmail.com";
   $mail ->Password = "0774001591";
   $mail ->SetFrom("kalansooriya666@gmail.com");
   $mail ->Subject = "test";
   $mail ->Body = "<!DOCTYPE html>
   <html>
   <head>
   	<title></title>
   </head>
   <body>
   <h4>First Name: ".$name."</h4>
   <h4>Phone: ".$number."</h4>
   <p>".$msg."</p>
   </body>
   </html>";
   $mail ->AddAddress($email);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       // echo "<script>window.location.href = "/";</script>";
   	header("Location: /site"); 
   }

?>