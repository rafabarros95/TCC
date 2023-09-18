<?php 

require_once("config.php");
$course = $_POST['search'];

$query = "SELECT * FROM `course` WHERE name='$course'";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/main.style.css">
    <link rel="stylesheet" href="./styles/main_search.style.css">
    
    <!-- Book link local configuration  -->
    <style>
        main table td a {
            text-decoration: none;
            color: #07777E;
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
                <a href="index.php">Home</a>
                <a href="about.php">About us</a>
                <a href="registration.php">Sign up</a>
                <a href="login.html">Login</a>
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
                    <td><a href="login.html">Book</a></td>
                    </tr>
                    <?php 
                        }
                    ?>
                        
        </table>
    </main>
    
    <footer>
        <p>Site developed by <a href="https://github.com/rafabarros95" target="_blank"><span>Rafa Barros</span></a></p>
    </footer>
        

</body>
</html>