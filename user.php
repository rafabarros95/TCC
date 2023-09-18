
<!-- user section -->

<?php 
require_once("config.php");
$query = "SELECT * FROM `course`";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexFit</title>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/main.style.css">
    <link rel="stylesheet" href="./styles/main_search.style.css">
    <!-- styling form, table, email confirmation localy -->
    <style>
      main table td a {
            text-decoration: none;
            color: #07777E;
            border: none;
            font-size: 16px;
            background-color: transparent;
            text-align: center; 
        }

        td a:hover { 
            text-decoration: underline;
        }
        
    </style>

</head>
<body>
    <header class="header">
        <a href="#" class="logo"><span>Flex</span>Fit</a>

        <nav class="navbar">
            <a href="main.html">Home</a>
            <a href="about.php">About</a>
            <a href="reservation.php">My Reservation</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
      
    <table>
                    <tr>
                        <th>Id</th>
                        <th>Gym</th>
                        <th>Name</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Price(€)</th>
                        <th>Vacancies</th>
                        <th>Reservation</th>
        
                    </tr>
                    <tr>
                    <?php

                        while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['gym'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['time_from'];?></td>
                    <td><?php echo $row['time_to'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['vacancies'];?></td>
                    <!-- <td><button type="submit" name="submit">Book</button></td> -->
                    <td><a href="reservation.php">Book</a></td>
                    </tr> 
                    <?php 
                        }
                    ?>
                        
        </table>
        
    </main>
    <aside>
        <div class="contact-container">
            <div>
              <h1 class="section-title">Contact us:</h1>
            </div>
            <div class="contact-items">
              <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
                <div class="contact-info">
                  <h2>Phone</h2>
                  <h3>+49 1534 4679914</h3>
                </div>
              </div>
              <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
                <div class="contact-info">
                  <h2>Email</h2>
                  <h3>flexfit@gmx.de</h3>
                </div>
              </div>
              <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
                <div class="contact-info">
                  <h2>Address</h2>
                  <h3>Bonn, Germany</h3>
                </div>
              </div>
            </div>
          </div>
    </aside>

    <footer>
        <p>Site developed by <a href="https://github.com/rafabarros95" target="_blank"><span>Rafa Barros</span></a></p>
    </footer>

</body>
</html>