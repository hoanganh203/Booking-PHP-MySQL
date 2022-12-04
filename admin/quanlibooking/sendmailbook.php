<?php
extract($CT);

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Create an instance; passing `true` enables exceptions

    $mailbook = new PHPMailer(true);
    try {
        //Server settings
        $mailbook->SMTPDebug = 0;                      //Enable verbose debug output
        $mailbook->isSMTP();                                            //Send using SMTP
        $mailbook->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mailbook->CharSet    = 'utf8';
        $mailbook->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mailbook->Username   = 'duongnam2703@gmail.com';                     //SMTP username
        $mailbook->Password   = 'pzyiggbirukoaotx';                               //SMTP password
        $mailbook->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mailbook->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mailbook->setFrom('duongnam2703@gmail.com', 'Ô-TÔ Hoàng Sơn Nam Thông báo');
        $mailbook->addAddress($email);     //Add a recipient
        // $mailbook->addAddress('hoanpro1892003@gmail.com','Hoàng');               //Name is optional
        // $mailbook->addReplyTo('info@example.com', 'Information');
        // $mailbook->addCC('duongnam2703@gmail.com');
        // $mailbook->addBCC('bcc@example.com');
    
        // //Attachments
        // $mailbook->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mailbook->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mailbook->isHTML(true);                                  //Set email format to HTML
        $mailbook->Subject ='This is the body in plain text for non-HTML mail clients';
        $mailbook->Body    = '<div id="DivIdToPrint">    
        <table cellpadding="0" cellspacing="0">
        <table style="border:0;width:100%;">
        <tr><td colspan="2" align="center"><b>DOTBIKE</b></td></tr>	
        <tr><td colspan="2" align="center">Phường Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</td></tr>
        <tr><td colspan="2" align="center"><b>Liên hệ:</b> +123 4567 89</td></tr>
        <tr><td><b>Xin Chào:</b> '.$user.'</td></tr>
        <tr><td><b>Số điện thoại:</b> '.$tel.' </td></tr>
        <tr><td><b>Thông báo! <strong>Bạn đã đặt lịch thành công</strong> <br>
        Rất mong bạn sẽ đến đúng lịch</td></tr>
        <tr><td colspan="2" align="center">Thank You ! Visit Again</td></tr>
        </table>
    </table>  
</div>';
        $mailbook->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mailbook->send();
        echo 'Gửi mail thành công';
    } catch (Exception $e) {
        echo "Xông thể gửi mail.Lỗi xảy ra: {$mail->ErrorInfo}";
    }
?>



   

