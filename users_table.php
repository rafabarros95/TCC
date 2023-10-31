<?php 

require_once("config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Data</title>
    <link rel="stylesheet" href="./styles/users_table.style.css">
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
</head>
<body>
    <header class="header">
            <a href="#" class="logo"><span>Flex</span>Fit</a>

            <nav class="navbar">
                <a href="adm.php">Home</a>
                <a href="users_table.php">Users</a>
                <a href="about.adm.php">About us</a>
                <a href="new_course.html">Add course</a>
                <a href="new_gym.html">Add gym</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>
    <main>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Date_birth</th>
                <th>Gender</th>
                
            </tr>
            
            <?php 
            if($conn->connect_error){
                die ("Unable to connect to db");
             } else {
                $sql = "SELECT `id`, `name`, `email`, `phone_number`, `date_birth`, `gender` FROM `registration`";  
                $result = $conn -> query($sql);

                if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>". $row["id"] . "<td>" . $row["name"] . "<td>" . $row["email"] . "<td>" . $row["phone_number"] . "<td>" . $row["date_birth"] . "<td>" . $row["gender"] . "</td></tr>";
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