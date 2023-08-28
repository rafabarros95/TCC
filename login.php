<?php 

if($_SERVER['REQUEST_METHOD']  == 'POST'){
    $name = $_POST['name'];
}
$conn = new mysqli('localhost', 'root', '', 'sistema_academia');

if($conn){
    echo "connection established";
} else{
    die (mysqli_error($conn));
}

/* $user_email = $_POST["user"];
$password = $_POST["password"];

 Database connection bellow 

$conn = new mysqli("localhost", "root", "", "sistema_academia");
if ($conn->connect_error){
    die ("Connection Failed!!" . $conn->connect_error);
} else {
    
     $stmt = $conn->prepare("select * from usuario where email = ?");
    $stmt ->bind_param("s", $user_email);
    $stmt -> execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data["password" ===$password]){
            echo "<h2>Login Sucessfully</h2>";
        } else {
            echo "<h2>Invalid Email or password</h2>";
        }
    } else {
        echo "<h2>Invalid Email or password</h2>";
    } 
} */

