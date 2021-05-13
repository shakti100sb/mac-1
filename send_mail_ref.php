<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


if(empty($send_to_ref) or empty($full_name_ref)){
    echo "cannot send email";
    die();
}
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {                  // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'macstechnology000@gmail.com';                     // SMTP username
    $mail->Password   = 'nepal@12345';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('macstechnology000@gmail.com', 'Macs Technology');
    $mail->addAddress($send_to_ref, $full_name_ref);     // Add a recipient
   // Optional name

    // Content
    $mail->isHTML(true);          
    $date = date("Y-m-d h:i:s");                        // Set email format to HTML
    $mail->Subject = 'Job application verification';
    $mail->Body    =  " Hello, <b>Dr. Jhon doe  </b>, Please verify the application details followed by this link<b>http://192.168.64.2/mac/refere/refree_conform.php</b> at $date<br/><br/>Regards,<br/>Macs Technology";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}