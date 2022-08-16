<html>
<header>
    <title> Email Confirmation </title>
<link rel="stylesheet" href="main.css">
</header>

<body>

<p1>

<?php

session_start();


$email_add = $_SESSION['email_add'];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

$mail = new PHPMailer();


$mail->isSMTP();


$mail->SMTPDebug = SMTP::DEBUG_SERVER;


$mail->Host = 'smtp.gmail.com';

$mail->Port = 465;


$mail->SMTPSecure = 'ssl';


$mail->SMTPAuth = true;


$mail->Username = 'godwin.taters@gmail.com';


$mail->Password = 'cbiwvrqmkdtfhlwf';


$mail->setFrom('godwinurbano07@gmail.com', 'Godwin Urbano');


$mail->addReplyTo('replyto@example.com', 'First Last');


$mail->addAddress($email_add);


$mail->Subject = 'PHPMailer GMail SMTP test';


$mail->Body = 'Hello, this is my message. <br> Go to http://localhost/taters/passwordsetup.php ';


$mail->AltBody = 'This is a plain-text message body';



if (!$mail->send()) {


} else {
    echo 'Message sent!';
    echo "A message has been sent to your email for your password Setup. <br> Kindly Check your Spam Folder.";
}

?>
</p1>

<p2>
    Message has been sent to your email! Check your inbox and spam.
</p2>

</body>

</html>





