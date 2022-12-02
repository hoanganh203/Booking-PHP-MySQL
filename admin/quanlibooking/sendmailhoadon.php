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

    $mailhoadon = new PHPMailer(true);
    try {
        //Server settings
        $mailhoadon->SMTPDebug = 0;                      //Enable verbose debug output
        $mailhoadon->isSMTP();                                            //Send using SMTP
        $mailhoadon->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mailhoadon->CharSet    = 'utf8';
        $mailhoadon->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mailhoadon->Username   = 'hoangmaph23084@gmail.com';                     //SMTP username
        $mailhoadon->Password   = 'dlaujylgakprmvdo';                               //SMTP password
        $mailhoadon->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mailhoadon->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mailhoadon->setFrom('hoangmaph23084@gmail.com', 'Ô-TÔ Hoàng Sơn Nam Thông báo');
        $mailhoadon->addAddress($email);     //Add a recipient
        // $mailhoadon->addAddress('hoanpro1892003@gmail.com','Hoàng');               //Name is optional
        // $mailhoadon->addReplyTo('info@example.com', 'Information');
        // $mailhoadon->addCC('duongnam2703@gmail.com');
        // $mailhoadon->addBCC('bcc@example.com');
    
        // //Attachments
        // $mailhoadon->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mailhoadon->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mailhoadon->isHTML(true);                                  //Set email format to HTML
        $mailhoadon->Subject ='This is the body in plain text for non-HTML mail clients';
        $mailhoadon->Body    = '<div id="DivIdToPrint">    
        <table cellpadding="0" cellspacing="0">
        <table style="border:0;width:100%;">
        <tr><td colspan="2" align="center"><b>DOTBIKE</b></td></tr>	
        <tr><td colspan="2" align="center">Phường Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</td></tr>
        <tr><td colspan="2" align="center"><b>Liên hệ:</b> +123 4567 89</td></tr>
        <tr><td><b>Tên Khách hàng:</b> '.$user.'</td></tr>
        <tr><td><b>Số điện thoại:</b> '.$tel.' </td></tr>
        <tr><td colspan="2" align="center"><b>Hoá đơn</b></td></tr>
        <tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
            <td>
               Sản phẩm
            </td>
            <td align="right">
                Giá
            </td>
        </tr>
        <tr class="itemrows">
            <td>
                <b> '.$name.'</b>
            </td>
            <td align="right">
            '.number_format($price, 0, '', ',') .'
            </td>
        </tr>
        <tr class="total">
            <td></td>
            <td align="right">
            <b>Tổng thanh toán :'.number_format($price, 0, '', ',') .'</b>
            </td>
        </tr>
        <tr><td colspan="2" align="center">Thank You ! Visit Again</td></tr>
        </table>
    </table>  
</div>';
        $mailhoadon->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mailhoadon->send();
        echo 'Gửi mail thành công';
    } catch (Exception $e) {
        echo "Xông thể gửi mail.Lỗi xảy ra: {$mail->ErrorInfo}";
    }
?>



   

