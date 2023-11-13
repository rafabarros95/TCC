<?php 

    $token = $_GET["token"];

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

    if(strtotime($registration["reset_token_expires_at"]) <= time()) {
        die("token has expired");

    }

    echo "token is valid and hasn't expired";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="./styles/login.style.css">  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/reset-password.style.css">
    <style>
      section .login form .pwd {
        
        border: 1px solid #07777E;
        outline: none;
        margin-bottom: 10px;
        margin-top: 10px;
      }  

    section .login {
        /* div container in the middle */
        position: relative;
        right: -20%;
        top: 50%;
        transform: translate(-50%);
        
    }


    </style>
</head>
<body>
   <section>
    <div class="login">
        <h1>Update your Password</h1>
        <form action="process-reset-password.php" method="post">

            <input type="hidden" name="token" value="<?= htmlspecialchars($token)  ?>">

            <label for="password"></label>
            <input class="pwd" type="password" name="password" id="password" placeholder="New password....">

            <label for="password"></label>
            <input class="pwd" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat password">

            <button>Update password</button>

      
        </form>
        

      <p><a href="main.html">Home</a></p>
    </div>
   </section>
</body>
</html> 