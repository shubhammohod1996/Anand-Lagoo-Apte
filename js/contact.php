<?php
require 'phpmailer/includes/PHPMailer.php';
require 'phpmailer/includes/SMTP.php';
require 'phpmailer/includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $configuration = $_POST['configuration'];
   
// Set mailer to use SMTP
$mail->isSMTP();

// Define SMTP host
$mail->Host = "smtp.gmail.com";

// Enable SMTP authentication
$mail->SMTPAuth = true;

// Set SMTP encryption type (ssl/tls)
$mail->SMTPSecure = "ssl";

// Port to connect SMTP
$mail->Port = 465;

// Set Gmail username
// $mail->Username = "shirkesmedia@gmail.com";
$mail->Username = "shubhammohod1234@gmail.com";


// Set Gmail password
// $mail->Password = "xgbvugkfluyldvnq";
$mail->Password = "Pass@123";


// Email subject
$mail->Subject = "Recevied New Lead for Lagoo Apte";

// Set sender email
// $mail->setFrom('shirkesmedia@gmail.com', 'GV7 Insignia');
$mail->setFrom('shubhammohod1234@gmail.com', 'Lagoo Apte');


// Enable HTML
$mail->isHTML(true);

// Email body
$mail->Body = "
        <p><b>Name</b>: $fullname</p>
        <p><b>Phone</b>: $mobile</p>
        <p><b>Email</b>: $email</p>
        <p><b>Email</b>: $configuration</p>
        <p><b>City</b>: 'Pune'</p>
        <p><b>Site</b>: "Lagoo Apte"'</p>
        <p><b>Source</b>: 'Website'</p>
        <p><b>Location</b>:'Aambegoan, Pune'</p>
        <p><b>Project</b>: 'gv7 Insignia'</p>
        <p><b>Remark</b>: 'interested'</p>"; // Set email body
// Add recipient
$mail->addAddress('shubhammohod1234@gmail.com', 'Recipient Name');

// // Finally send email
// if ($mail->send()) {
//    // echo "Email Sent..!"
//    echo '<div style="padding: 50px; margin: 60px 60px; border-radius: 5px; background-color: #d4edda; color: #155724; font-size: 16px; border: 1px solid #c3e6cb;">
//    Thank you for submitting your request.<br> We will get in touch with you shortly.
// </div>';
// } else {
//    // echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo 
//     echo '<div style="padding: 10px; margin: 20px 0; border-radius: 5px; background-color: #f8d7da; color: #721c24; font-size: 16px; border: 1px solid #f5c6cb;">
//              Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '
//           </div>';
// }
if ($mail->send()) {
    header("Location: thankyou.php");
    exit(); // It's important to call exit after header to stop further script execution.
} else {
    echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
}
// Closing SMTP connection
$mail->smtpClose();
}
?>