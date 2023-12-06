<?php 
session_start();

require_once("config.php");

if(!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {
    
  unset($_SESSION['email']);
  unset($_SESSION['password']);
  header('Location: login.html');
  
  
} 
  $logged = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="./styles/main.style.css">
    <link rel="stylesheet" href="./styles/main_search.style.css">
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">

     <!-- email and booking - local configuration  -->

     <style>
        main {
          border: none; /* removing red border */
        }
        main form {
          float: left;
        }

        main form label{
          color: white;
          margin-left: 16px;
        }

        main form #email, #subject, #message, #gym, #name, #time_from, #time_to, #price, #name_course {
          color: #07777E;
          border: none;
          outline: none;
          border-radius: 30px;
          padding-left: 15px;
          padding-bottom: 10px;
          padding-top: 10px;
          margin-left: 10px;
          margin-bottom: 10px;
          width: 390px;

        }

        main form ::placeholder {
          color: #07777E;
          font-size: 16px;
          padding-left: 3px;
          
        }

        main form button {
          border-radius: 20px;
          color: #07777E;
          width: 80px;
          border: none;
          outline: none;
          margin-top: 20px;
          margin-bottom: 20px;
          
        }

        main form button:hover {
          background-color: #07777E;
          color:white;
        }

        h1 {
          color: #07777E;
          font-size: 20px;
          margin-bottom: 10px;
          margin-left: 25px;
          text-decoration: underline;
        }


    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><span>Flex</span>Fit</a>

        <nav class="navbar">
            <a href="user.php">Home</a>
            <a href="about.user.php">About</a>
            <a href="booking.php">Booking</a>
            <a href="reservation.php">My Reservation</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
          <h1>Courses Available:</h1>

          <?php
          
          $query = "SELECT * FROM `course`,`registration` WHERE email ='$logged'";

          $result = mysqli_query($conn, $query);

          if(mysqli_num_rows($result)>0){
             
            foreach($result as $row)
            {

              ?>

              
            <form action="send_email.php"  method="post">
                
                <label for="name_course"></label>
                <input type="text" name="name_course" id="name_course" placeholder="name_course" value="<?php echo $row['name_course'] ?>"> <br><br>
                
                <label for="gym"></label>
                <input type="text" name="gym" id="gym" placeholder="Gym" value="<?php echo $row['gym'] ?>"> <br><br>

                <label for="name"></label>
                <input type="text" name="name" id="name"  value="<?php echo $row['name'] ?>"> <br><br>

                <label for="time_from"></label>
                <input type="text" name="time_from" id="time_from"  value="<?php echo $row['time_from'] ?>"> <br><br>

                <label for="time_to"></label>
                <input type="text" name="time_to" id="time_to"  value="<?php echo $row['time_to'] ?>"> <br><br>

                <label for="price"></label>
                <input type="text" name="price" id="price" value="<?php echo $row['price'] ?>€"> <br><br>

                <label for="email"></label>
                <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>"> <br><br>


                <button type="submit" name="send">Book course</button> 
            </form>
            <?php 

             }
          }
          ?>
          
    </main>
</body>
</html>