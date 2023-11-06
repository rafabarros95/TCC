<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

require __DIR__ . "./vendor/autoload.php";

$mail = new PHPMailer(true);

/* After problems are solved, make the bellow line under comments */

//$mail -> SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail -> Host = 'smtp.gmail.com';
$mail -> SMTPSecure = 'ssl';

$mail -> Port = 465;
$mail -> Username = 'rafaelr.barros956789@gmail.com';
$mail -> Password = 'ieskmjqkvuekvoxz';


$mail -> isHTML(true);

return $mail;


?>