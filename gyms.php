<?php 

require_once("config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Data</title>
    <link rel="stylesheet" href="./styles/courses_table.style.css">
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <style>
        main table {
            width: 800px;
        }
    </style>
</head>
<body>
    <header class="header">
            <a href="#" class="logo"><span>Flex</span>Fit</a>

            <nav class="navbar">
                <a href="adm.php">Home</a>
                <a href="booking-table.php">Booking</a>
                <a href="users_table.php">Users</a>
                <a href="courses_table.php">Courses</a>
                <a href="gyms.php">Gyms</a>
                <a href="about.adm.php">About us</a>
                <a href="new_course.html">Add course</a>
                <a href="new_gym.html">Add gym</a>
                <a href="changes.php">Changes</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>
    <main>
        <table>
            <tr>
                <th>Id</th>
                <th>Name_Gym</th>
                <th>Address</th>
                <th>Membership_fee</th>
                
            </tr>
            
            <?php 
            if($conn->connect_error){
                die ("Unable to connect to db");
             } else {
                $sql = "SELECT `id`, `name_gym`, `address`, `membership_fee` FROM `gym`";  
                $result = $conn -> query($sql);

                if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>". $row["id"] . "<td>" . $row["name_gym"] . "<td>" . $row["address"] . "<td>" . $row["membership_fee"]  . "</td></tr>";
                }
                
             }
             else {
                echo "0 result";
             }

            }
            $conn ->close();
            ?>
        </table>
    </main>
    <footer>
        <p>Site developed by <a href="https://github.com/rafabarros95" target="_blank"><span>Rafa Barros</span></a></p>
    </footer>
</body>
</html>