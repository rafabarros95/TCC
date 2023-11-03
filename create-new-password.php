<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <link rel="stylesheet" href="./styles/login.style.css">  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/reset-password.style.css">
</head>
<body>
    <main>
        <div class="login">
            <section class="section-container">
                <!-- Getting from url the 2 variables sent with GET method -->
              <?php 
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if(empty($selector) || empty($validator)){
                    echo "Could not validate your request";
                } else {
                    if(ctype_digit($selector)!== false && ctype_digit($validator)!== false ) {
                        /* Extra Security on website */
                        ?>
                        <form action="reset-password-new.php" method="post">
                          <input type="hidden" name="selector" value="<?php echo $selector ?>">
                          <input type="hidden" name="validator" value="<?php echo $validator ?>">
                          <input type="password" name="pwd" placeholder="Enter a new Password...">
                          <input type="password" name="pwd-repeat" placeholder="Repeat new Password...">
                          <button type="submit" name="reset-password-submit">Reset password</button>
                        </form>

                        <?php

                    }
                }

              ?>
            </section>
        </div>
    </main>
</body>