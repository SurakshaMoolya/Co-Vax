
<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 require 'credentials.php';
   function sendOTP($email,$otp){
     
    
      require '../phpmailer/vendor/autoload.php';
    

    $message_body = "One Time Password for Co-VAX login authentication is:<br><br>". $otp;
    $mail = new PHPMailer(true);

    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = EMAILID;                     //SMTP username
    $mail->Password   = PASSWORD;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->SetFrom(EMAILID,'Co-VAX',0);
    $mail->AddAddress($email);
    $mail->Subject= "OTP to Login Co-VAX";
    $mail->MsgHTML($message_body);
    $result=$mail->Send();
    if (!$result){
       echo "Mailer Error:" . $mail->ErrorInfo;
    }else{

       return $result;
    }
   }



?>