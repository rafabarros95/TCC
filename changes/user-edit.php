<?php 
require_once("../config.php");
?>

<!--  Adm section -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../styles/main.style.css">
    
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><span>Flex</span>Fit</a>

        <nav class="navbar">
            <a href="../adm.php">Home</a>
            
            
        </nav>
    </header>
    <main>
        <?php 
         $conn = mysqli_connect("localhost", "root", "");
         $db = mysqli_select_db($conn, 'sistema_academia');

         $query = "SELECT * FROM registration";
         $query_run = mysqli_query($conn, $query);
        ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>DATE-BIRTH</th>
                    <th>GENDER</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                    
                </tr>
            </thead>
        
        <?php 
            if($query_run){
                while($row = mysqli_fetch_array($query_run)){
                    ?>
                        <tbody>
                            <tr>
                                <th><?php echo $row['id']; ?></th>
                                <th><?php echo $row['name']; ?></th>
                                <th><?php echo $row['email']; ?></th>
                                <th><?php echo $row['phone_number']; ?></th>
                                <th><?php echo $row['date_birth']; ?></th>
                                <th><?php echo $row['gender']; ?></th>

                                <form action="user-update.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <th><a href="">Edit</a></th>
                                </form>
                            </tr>
                        </tbody>
                    <?php 
                
                }
            }
        else {
            echo  "No Record Found";
        }
        ?>
        </table>
    </main>
    

    <footer>
        <p>Site developed by <a href="https://github.com/rafabarros95" target="_blank"><span>Rafa Barros</span></a></p>
    </footer>

</body>
</html>