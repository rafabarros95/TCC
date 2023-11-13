<?php 


/* require_once("config.php");
require("user.php");
$query = "SELECT * FROM `course`";
$result = mysqli_query($conn,$query); */


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail ->isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'rafaelr.barros956789@gmail.com'; /* my email from gmail */
    $mail ->Password = 'qiwyxzjfnzzmovij'; /* gmail app password */
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port = 465;

    $mail -> setFrom('rafaelr.barros956789@gmail.com');

    $mail -> addAddress($_POST["email"]);

    $mail -> isHTML(true);

    /* Getting the data from input box in reservation.php */

    $mail ->Subject = $_POST["name"];
    $mail ->Subject = $_POST["time_from"];
    $mail ->Subject = $_POST["time_to"];
    $mail ->Subject = $_POST["gym"];

    /* Sending the details to the customer by email */

    $mail ->Body = 'Your Reservation was confirmed. Mr/Mrs. ' .  $_POST["name"] .   ' your course  costs ' . $_POST["price"] . ' . It goes from ' . $_POST["time_from"] . ' to ' . $_POST["time_to"] . ' at ' . $_POST["gym"] . '.  Please make sure you are there 5 min earlier for the payment procedure. Thanks for using Flexfit. Come back soon :)';

    $mail ->send();
 
    echo
    "
    <script>
    alert('Email sent Sucessfully');
    document.location.href = 'user.php';
    </script>
    ";
 }
?>
