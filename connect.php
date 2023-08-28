<?php 

if($_SERVER['REQUEST_METHOD']  == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $date_birth = $_POST['date_birth'];
    $gender = $_POST['gender'];
    $administrator = $_POST['yes_no'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
}

/* Database connection bellow */

$conn = new mysqli('localhost', 'root', '', 'sistema_academia');

if($conn){

    // echo "Connection successful";

    $sql = "insert into `usuario`(name,email,phone_number,date_birth,gender,administrator,password,confirm_password) values ('$name', '$email','$phone_number','$date_birth','$administrator','$password','$confirm_password')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data inserted successfully";
    } else {
        die (mysqli_error($conn));
    }

} else{
    die (mysqli_error($conn));
}

