<?php 



$token = $_POST["token"];

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM registration WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);

$stmt -> bind_param("s", $token_hash);

$stmt -> execute();

$result = $stmt -> get_result();

$registration = $result -> fetch_assoc();

if($registration === null){
    die("Token not found");
} 

/* Autentication for security measures */

if(strtotime($registration["reset_token_expires_at"]) <= time()) {
    die("token has expired");

}


 $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT); 

 $password = $_POST["password"];
 $confirm_password = $_POST["confirm_password"]; 


 $sql = "UPDATE registration SET password = '$password', confirm_password = '$confirm_password', password_hash = ?,
reset_token_hash = NULL, reset_token_expires_at = NULL WHERE id = ?";  


 $stmt = $mysqli-> prepare($sql);

$stmt ->bind_param("ss", $password_hash, $registration["id"]);

$stmt -> execute(); 


echo "<script> alert('Password updated successfully')</script>";

echo '<script>window.location = "login.html"</script>';




