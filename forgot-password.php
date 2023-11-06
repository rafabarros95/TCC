<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="./styles/login.style.css">  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/reset-password.style.css">
</head>
<body>
   <section>
    <div class="login">
        <h1>Reset your Password</h1>
        <p>An email will be send to you with a link to reset your password.</p>
      <form action="send-pwd-reset.php" method="post">
        <input type="text" name="email" id="email" placeholder="Enter your email address...">
        <button type="submit" name="reset-request-submit">Receive a Link by email</button>

      </form>
        

      <p><a href="main.html">Home</a></p>
    </div>
   </section>
</body>
</html>