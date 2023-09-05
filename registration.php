<?php 

require 'config.php';

/* getting data from the registration form */

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $date_birth = $_POST['date_birth'];
    $gender = $_POST['gender'];
    $administrator = $_POST['yes_no'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $duplicate = mysqli_query($conn, "SELECT * FROM usuario WHERE name = '$name' OR email = '$email'");

    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email has already taken'); </script>";
    } else {
        if($password == $confirm_password){
            $query = "INSERT INTO usuario VALUES ('', '$name', '$email', '$phone_number', '$date_birth', '$gender', '$administrator', '$password')";

            mysqli_query($conn,$query);
            echo "<script> Registration Successful </script>";
        } else {
            echo "<script> alert('Password does not match') </script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./styles/registration.style.css">
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
</head>
<body>
    <section>
        <div class="registration">
            <div class="top">
                <img src="./images/FlexFit_Logo.png" alt="" style="width: 210px; height: 210px;">
            </div> 
            <h1>Create your Account</h1>
            <form action="#" method="post">
                <div class="input-form">
                
                    <div class="name">
                        <label for="name"></label>
                        <input type="text" name="name" id="name" placeholder="Full Name" required>
                    </div>
                    <div class="email">
                        <label for="email"></label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="phone">
                        <label for="phone_number"></label>
                        <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" required>
                    </div>
                    <div class="date-birth">
                        <label for="date_birth"></label>
                        <input type="date" style="color: black;" name="date_birth" id="date_birth" required>
                    </div>
                    <!-- Gender Fieldset radio -->
                    <fieldset>
                        <h3>Gender</h3>
                        <div class="gender">
                        <input type="radio" id="male" name="gender" value="Male" />
                        <label for="male">Male</label>
                    
                        <input type="radio" id="female" name="gender" value="female" />
                        <label for="female">Female</label>
                    
                        <input type="radio" id="diverse" name="gender" value="diverse" />
                        <label for="diverse">Diverse</label>

                        </div>
                        </fieldset>

                        <div class="password">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div> 
                        <div class="confirm-password">
                            <label for="confirm_password"></label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                        </div> 
                        <button type="button"><a href="index.php">Cancel</a></button>
                        <button type="submit" name="submit">Create account</button>
                </div>
           </form>
        </div>
    </section>
</body>
</html>