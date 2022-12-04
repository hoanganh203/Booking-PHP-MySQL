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

    $mailhuy = new PHPMailer(true);
    try {
        //Server settings
        $mailhuy->SMTPDebug = 0;                      //Enable verbose debug output
        $mailhuy->isSMTP();                                            //Send using SMTP
        $mailhuy->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mailhuy->CharSet    = 'utf8';
        $mailhuy->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mailhuy->Username      = 'duongnam2703@gmail.com';                     //SMTP username
        $mailhuy->Password      = 'pzyiggbirukoaotx';                             //SMTP password
        $mailhuy->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mailhuy->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mailhuy->setFrom('duongnam2703@gmail.com', 'Ô-TÔ Hoàng Sơn Nam Thông báo');
        $mailhuy->addAddress($email);     //Add a recipient
        // $mailhuy->addAddress('hoanpro1892003@gmail.com','Hoàng');               //Name is optional
        // $mailhuy->addReplyTo('info@example.com', 'Information');
        // $mailhuy->addCC('duongnam2703@gmail.com');
        // $mailhuy->addBCC('bcc@example.com');
    
        // //Attachments
        // $mailhuy->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mailhuy->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mailhuy->isHTML(true);                                  //Set email format to HTML
        $mailhuy->Subject ='This is the body in plain text for non-HTML mail clients';
        $mailhuy->Body    = '<div id="DivIdToPrint">    
        <table cellpadding="0" cellspacing="0">
        <table style="border:0;width:100%;">
        <tr><td colspan="2" align="center"><b>DOTBIKE</b></td></tr>	
        <tr><td colspan="2" align="center">Phường Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</td></tr>
        <tr><td colspan="2" align="center"><b>Liên hệ:</b> +123 4567 89</td></tr>
        <tr><td><b>Xin Chào:</b> '.$user.'</td></tr>
        <tr><td><b>Số điện thoại:</b> '.$tel.' </td></tr>
        <tr><td><b>Thông báo! <strong>Bạn đặt lịch không thành công</strong> <br>
        Lí do:Bị trùng lịch hoặc lí do khác <br>
        Rất mong bạn thông cảm và chọn lịch khách</td></tr>
        <tr><td colspan="2" align="center">Thank You ! Visit Again</td></tr>
        </table>
    </table>  
</div>';
        $mailhuy->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mailhuy->send();
        echo 'Gửi mail thành công';
    } catch (Exception $e) {
        echo "Xông thể gửi mail.Lỗi xảy ra: {$mail->ErrorInfo}";
    }
?>



   

