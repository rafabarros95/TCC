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

/* Here starts the process of storaging the data from the form into a table booking for retrieve booking */

require __DIR__ . "/database.php";

$sql = "INSERT INTO booking (name_course, gym, name_user, time_from, time_to, price, email) VALUES (?, ?, ?, ?, ?, ?, ?) ";

$stmt = $mysqli -> stmt_init();

if( ! $stmt -> prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt -> bind_param("sssssss", 
$_POST["name_course"],
$_POST["gym"],
$_POST["name"],
$_POST["time_from"],
$_POST["time_to"],
$_POST["price"],
$_POST["email"]);

if ($stmt -> execute()) {
    
        header("Location: booking-success.html");
        exit();
    } else {
        if($mysqli ->errno == 1062) {
            die("email already taken");
        } else {
            die($mysqli -> error . " " . $mysqli ->errno);
        }
    }

    /* echo
    "
    <script>
    alert('Course booked sucessfully. Please Check your email ');
    document.location.href = 'user.php';
    </script>
    ";
    header("Location: booking.php"); */
    
  
    
    if($mysqli ->errno == 1062) {
        die("email already taken");
    } else {
        die($mysqli -> error . " " . $mysqli ->errno);
    }


/* Here ends the process of storaging the data from the form into a table booking for retrieve booking */

/* sending email to user for booking confirmation
 */
if(isset($_POST["send"])){
    
    $mail = new PHPMailer(true);

    $mail ->isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'rafaelr.barros956789@gmail.com';  /*my email from gmail */
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
    $mail ->Subject = $_POST["name_course"];

    
}
    /* Sending the details to the customer by email */
    
    $mail ->Body = 'Your Reservation was confirmed. Mr/Mrs. ' .  $_POST["name"] .   ' your '.$_POST["name_course"].' course  costs ' . $_POST["price"] . ' . It goes from ' . $_POST["time_from"] . ' to ' . $_POST["time_to"] . ' at ' . $_POST["gym"] . '.  Please make sure you are there 5 min earlier for the payment procedure. Thanks for using Flexfit. Come back soon :)';

    $mail ->send();
 
     

?>
