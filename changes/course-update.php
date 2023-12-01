<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update course</title>
    <link rel="stylesheet" href="../styles/registration.style.css">
    <link rel="shortcut icon" href="../images/Favicon.png" type="image/x-icon">
    <style>
        .update-form  {
            text-align: center;
            color: #07777E;
            border: none;
            outline: none;
        }

        .update-form form .input-form .gym  {
            text-align: center;
            color: #07777E;
            border: none;
            outline: none;
        }
        .update-form .input-form #from, #to {
            border-radius: 10%;
            outline: none;
            border: 1px solid #07777E;
            margin-left: 30px;
            width: 90px;

        }
        /* styling only the "to" field */
        .update-form .input-form #to {
            
            margin-left: 53px;

        }
        
        
         .update-form hr {
            
            border: none;
            outline: none;
        } 
        .update-form {
            background-color: white;
            width: 500px;
            border-radius: 20%;
            
        }

        .update-form form {
            text-align: center;
        }

        .update-form span {
            color: black;
        }
    </style>
</head>
<body>
    <?php 
    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, 'academia');

    $id = $_POST['id'];

    $query = "SELECT * FROM course WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);


    if($query_run)
        {
            while($row = mysqli_fetch_assoc($query_run)){

            
            ?>
            <div class="update-form">
            <h2>Update Course</h2>
            <hr>
            <form action="#" method="post">
              <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="input-form">
                
                    <div class="name">
                        <label for="name"></label>
                        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $row['name_course']?>" required>
                    </div>
                    <div class="name">
                        <label for="gym"></label>
                        <input type="text" name="gym" id="gym" placeholder="Gym" value="<?php echo $row['gym']?>" required>
                    </div>
                    <div class="name">
                        <label for="email"></label>
                        <input type="text" name="description" id="description" placeholder="Description" value="<?php echo $row['description']?>" required>
                    </div>
                    <div class="name">
                        <label for="vacancies"></label>
                        <input type="number" name="vacancies" id="vacancies" placeholder="Number of Vacancies" value="<?php echo $row['vacancies']?>" min="1" required>
                    </div>
                    <div class="name">
                        <label for="price"></label>
                        <input type="number" name="price" id="price" placeholder="Price (€)" value="<?php echo $row['price']?>" min="1" required>
                    </div>
                    <div class="time">
                        <label for="time-from"></label>
                        <label for="time-to"></label>

                        <span>From:</span>

                        <input id="from" type="time" name="time-from" id="time-from" value="time_from" required>

                        <br>

                        <span>To:</span>

                        <input id="to" type="time" name="time-to" id="time-to" value="time_to" required>
                    </div>
                        
                         <button type="button">
                            <a href="course-index.php">Cancel
                            </a>
                        </button>
                        <button type="submit" name="update">Update course</button>
                </div>
           </form>
           <?php 
           if(isset($_POST['update'])){
                $name_course = $_POST['name'];
                $gym = $_POST['gym'];
                $description = $_POST['description'];
                $vacancies = $_POST['vacancies'];
                $price = $_POST['price'];
                $time_from = $_POST['time-from'];
                $time_to = $_POST['time-to'];

                $query = "UPDATE course SET name_course='$name_course', gym='$gym', description = '$description', vacancies = '$vacancies', price = '$price', time_from = '$time_from', time_to = '$time_to' WHERE id = '$id' ";
                $query_run = mysqli_query($conn, $query);

                if($query_run){
                    echo "<script> alert('Course updated successfully.'); </script>";
                    echo '<script>window.location = "course-index.php"</script>';
                } else {
                    echo "<script> alert('Course not updated. Check that out again!'); </script>";
                    
                }
           }
           
           ?>
            </div>
           <?php 
        
        }
    } else {
        echo "No Record Found";
    }
    ?>
</body>
</html>