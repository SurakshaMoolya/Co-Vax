<?php


 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 require 'credentials.php';
   function sendNotification($email,$date){
     
    
      require '../phpmailer/vendor/autoload.php';
     
    

    $message_body = "<b>Hey Co-Vaxer</b>,<br><br>
    Your next dose is scheduled on<big><b> ". $date. "</b>.</big><br> Our aim is to make India COVID-19 free. Join us to win this battle at #CoVAX.<br>Thank You.";
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
    $mail->Subject= "Update for Next Dose.";
    $mail->MsgHTML($message_body);
    $result=$mail->Send();
    if (!$result){
       echo "Mailer Error:" . $mail->ErrorInfo;
    }else{

       return $result;
    }
   }


   function secondNotification($email){
     
    
      require '../phpmailer/vendor/autoload.php';
      
    

    $message_body = "<b>Hey Co-Vaxer</b>,<br><br>
    Today onwards you are ready for your 2nd Dose Vaccination as per the Guidelines of Government.<br>
    Kindly book your slot and get fully vaccinated.<br>Our aim is to make India COVID-19 free. Join us to win this battle at #CoVAX.<br>Thank You.";
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
   $mail->Subject= "Update for Next Dose.";
   $mail->MsgHTML($message_body);
   $result=$mail->Send();
    if (!$result){
       echo "Mailer Error:" . $mail->ErrorInfo;
    }else{

       return $result;
    }
   }

   function appointment($email){
     
    
      require '../phpmailer/vendor/autoload.php';
      
    
   

    $code=rand(1000,9999);
    $message_body = "<b>Hey Co-Vaxer</b>,<br><br>
    We have Scheduled your Appointment tomorrow. You can visit the address given below any time between 10:00 AM and 05:00 PM<br>
    Your Unique Identification Code is <big>".$code.".</big><br><br>
    Please Visit:<br><big><b>
    PCMC YCM Hospital,Utarayana Hotel Rd Near Yashwantrao Chavan Memorial Hospital Yayati Housing Society Sant Tukaram Nagar Pimpri Colony Pune Maharashtra 411018.<br>
    The Vaccine available is Covishield and Covaxin which is free of cost. </b><br><br></big>
    Our aim is to make India COVID-19 free. Join us to win this battle at #CoVAX.<br>
    Thank You.";
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
   $mail->Subject= "Update for Next Dose.";
   $mail->MsgHTML($message_body);
   $result=$mail->Send();
    if (!$result){
       echo "Mailer Error:" . $mail->ErrorInfo;
    }else{

       return $result;
    }
   }




?>