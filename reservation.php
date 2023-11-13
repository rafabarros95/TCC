<?php 
require_once("config.php");

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

        main form {
          float: left;
        }

        main form label{
          color: white;
          margin-left: 16px;
        }

        main form #email, #subject, #message, #gym, #name, #time_from, #time_to, #price {
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
            <a href="about.php">About</a>
            <a href="booking.php">Booking</a>
            <a href="reservation.php">My Reservation</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <table class="show">
          <thead>
            <tr>
              <th>Gym</th>
              <th>Name</th>
              <th>From</th>
              <th>To</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php ?></td>
              <td><?php ?></td>
              <td><?php ?></td>
              <td><?php ?></td>
              <td><?php ?></td>
            </tr>
          </tbody>
        </table>
        
    </main>
</body>
</html>