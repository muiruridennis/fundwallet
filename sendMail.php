<!-- <meta http-equiv="refresh" content="0; url=https://localhost/edmatech/contact.php?id=Message Sent Successfully!"/> -->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$errors = [];
$errorMessage = '';
$mail = new PHPMailer(true);
try {
    if (isset($_POST)) {
        $senders_names = $_POST['name'];
        $senders_email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        if (empty($name)) {
            $errors[] = 'Name is empty';
        }
     
        if (empty($email)) {
            $errors[] = 'Email is empty';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email is invalid';
        }
        if (empty($subject)) {
         $errors[] = 'subject is empty';
        }
     
        if (empty($message)) {
            $errors[] = 'Message is empty';
        }
        if (!empty($errors)) {
         $allErrors = join('<br/>', $errors);
         $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
         }
        
            // specify SMTP credentials
            $mail->SMTPDebug = 3;                                       
            $mail->isSMTP();   
            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
                );                                         
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                             
            $mail->Username   = 'm.dennismuiruri@gmail.com';                 
            $mail->Password   = 'Welcomenow1';                        
            $mail->SMTPSecure = 'tls';                              
            $mail->Port       = 587;  
        
            $mail->setFrom($senders_email);
            $mail->addAddress('m.dennismuiruri@gmail.com', 'fund wallet');           
            
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = '<b>Name:</b>'.$senders_names. "<br><b>Message:</b>" .$message;
            $mail->AltBody = '<b>Fund Wallet Credit Limited</b>';
            $mail->send();
            echo 'Message has been sent';
        }
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

    

?>