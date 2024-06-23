<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//
//$name = $_POST['username'];
//$email = $_POST['email'];
//$Number = $_POST['phone'];
//$Message = $_POST['message'];
//
//
//$to = "drishtiarora460@gmail.com";
//$subject = 'Seo Page  | NeedleAds';
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//$headers .= 'From: ' . $email. "\r\n";
//$headers .= 'Cc: '. "\r\n";
//$message = '<p>email:'. $email.'</p><p>number:'. $Number.'</p><p>name:'. $name.'</p><p>message:'. $Message.'</p><br>';
//$result = @mail($to, $subject, $message, $headers);
//echo  '<script>alert("Mail sent successfully !")</script>';
//echo  '<script>window.location.href="index.php";</script>';
    
?>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['username'];
$email = $_POST['email'];
$Number = $_POST['phone'];
$Message = $_POST['message'];

$to = "rsdeveloper2000@gmail.com";
$cc = "rakesh.roibundle@gmail.com"; 
$subject = 'NeedleAds Technologies  (www.theneedleads.com) | New Inqury';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $email . "\r\n";
$headers .= 'Cc: ' . $cc . "\r\n"; // Add the CC recipient here
$message = '<p>email:'. $email.'</p><p>number:'. $Number.'</p><p>name:'. $name.'</p><p>message:'. $Message.'</p><br>';
$result = @mail($to, $subject, $message, $headers);
if ($result) {
    echo '<script>alert("Mail sent successfully !")</script>';
} else {
    echo '<script>alert("Error: Unable to send mail.")</script>';
}
echo '<script>window.location.href="index.php";</script>';
?>