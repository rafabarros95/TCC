<?php 

if(isset($_POST["reset-request-submit"])){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/TCC/TCC/reset-password.php/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800; /* tokens have to get expired to secure the procedure - Security  */

    require 'config.php'; /* fetching database connection */

    $userEmail = $_POST["email"];

    /* Using question mark '?' make sure the security of the process - prepared statments are called  */

    $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?,);";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "There was an error!";
        exit();
    } else {

        $hashedToken = password_hash($token,PASSWORD_DEFAULT);
        /* HASH is used to protect data inside Database from Hackers */

        mysqli_stmt_bind_param($stmt, "s", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }
    /* closing this specific stmt up here */
    mysqli_stmt_close($stmt);
    
    $to = $userEmail;

    $subject = 'Reset your password for FlexFit';

    $message = '<p>We received a password reset request. The link to reset your pasword is bellow. If you did not make the request, then please ignore this email. FlexFit Team!</p>';

    $message .= '<p> Here is your password reset link: </p></br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers;

} else {
    header("Location: login.html");
}