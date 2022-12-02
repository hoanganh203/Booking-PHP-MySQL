<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include '../modal/pdo.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Create an instance; passing `true` enables exceptions

function sendMail($email, $name, $title, $content){
    $mail = new PHPMailer(true);


    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->CharSet    = 'utf8';
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'duongnam2703@gmail.com';                     //SMTP username
        $mail->Password   = 'qfdlzxjxortclxdk';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('duongnam2703@gmail.com', 'Duongnam');
        $mail->addAddress($email, $name);     //Add a recipient
        // $mail->addAddress('hoanpro1892003@gmail.com','Hoàng');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('duongnam2703@gmail.com');
        // $mail->addBCC('bcc@example.com');
    
        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject =$title;
        $mail->Body    = $content;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Gửi mail thành công';
    } catch (Exception $e) {
        echo "Xông thể gửi mail.Lỗi xảy ra: {$mail->ErrorInfo}";
    }

// output
// $mail->isSMTP();
// $mail->Host  ='smtp.gmail.com'

}

   

