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
    <link rel="shortcut icon" href="../images/Favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../styles/courses_table.style.css">
    <style>
        body  .header {
            position:inherit;
      
        }
        table thead th {
            background-color: #07777E;
        } 

        table tbody tr th {
             background-color: #fff; 
             color: #07777E;
        }

        /* Edit button configuration */
        #edit  {
             border-radius: 15%;
             width: 49px;
             outline: none;
             color: #fff;
             background-color: #008000;
             font-size: 18px;
             padding: 4px 2px;
             
        }


         #edit:hover {
             color: #fff;
             background-color: #32cd32;
        }

        /* Delete button configuration */
        #delete {
             border-radius: 15%;
             width: 70px;
             outline: none;
             color: #fff; 
             font-size: 18px;
             padding: 4px 2px; 
             background-color: red;
        }

        #delete:hover {
             color: #fff;
             background-color: #ff6347;
        }
        
        
    </style>
    
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><span>Flex</span>Fit</a>

        <nav class="navbar">
            <a href="../adm.php">Home</a>
            <a href="../changes.php">Back</a> 
        </nav>
    </header>
    <main>
        <?php 
         $conn = mysqli_connect("localhost", "root", "");
         $db = mysqli_select_db($conn, 'academia');

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
                                    <th><input type="submit" id="edit" name="edit" value="Edit"></th>
                                </form>

                                <form action="user-delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <th> <input type="submit" id="delete" name="delete" value="Delete"></th>
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