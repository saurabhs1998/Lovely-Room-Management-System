<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'config.php';

// Instantiation and passing `true` enables exceptions
if(isset($_POST["email"])){
    
    $emailTo=$_POST["email"];

    $code =uniqid(true);

    $query =mysqli_query($con ,"INSERT INTO reset_passwords(code ,email) VALUES('$code' ,'$emailTo')");
    if(!$query){
        exit("Error");
    }

    $mail = new PHPMailer(true);

    try {
    //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'zchanchal1998@gmail.com';                     // SMTP username
        $mail->Password   = 'Singh123@';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
        $mail->setFrom('zchanchal1998@gmail.com', 'Saurabh');
        $mail->addAddress($emailTo);     // Add a recipient
        $mail->addReplyTo('no-reply@gmail.com', 'no-reply');

    // Content
        $url="http://".$_SERVER["HTTP_HOST"]. dirname($_SERVER["PHP_SELF"])."/resetPassword.php?code=$code";
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Your password reset link';
        $mail->Body    = "<h1>Your request a reset password</h1>
                          Click <a href='$url'>this link</a>to do so";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Reset Password link has been sent to your email';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    exit();

}

?>


<form method="POST">
    <input type="email" name="email" placeholder="Email" autocomplete="off">
    <br><br>
    <input type="submit" name="submit" value="Reset password">


</form>