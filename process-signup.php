<?php 

if($_POST["password"] !== $_POST["confirm_password"]) {
   die("Passwords must match"); 
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

require __DIR__ . "/database.php";

$sql = "INSERT INTO registration (name, email, phone_number, date_birth, gender, password, confirm_password, password_hash) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";

$stmt = $mysqli -> stmt_init();

if( ! $stmt -> prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt -> bind_param("ssssssss", 
$_POST["name"],
$_POST["email"],
$_POST["phone_number"],
$_POST["date_birth"],
$_POST["gender"],
$_POST["password"],
$_POST["confirm_password"],
$password_hash);

if ($stmt -> execute()) {
    header("Location: signup_success.html");
    exit();
} else {
    if($mysqli ->errno == 1062) {
        die("email already taken");
    } else {
        die($mysqli -> error . " " . $mysqli ->errno);
    }
}



