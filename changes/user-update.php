
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    <link rel="stylesheet" href="../styles/registration.style.css">
    <link rel="shortcut icon" href="../images/Favicon.png" type="image/x-icon">
    <style>
        .update-form h2 {
            text-align: center;
            color: #07777E;
            border: none;
            outline: none;
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
    </style>
</head>
<body>
    <?php 
    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, 'sistema_academia');

    $id = $_POST['id'];

    $query = "SELECT * FROM registration WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);


    if($query_run)
        {
            while($row = mysqli_fetch_assoc($query_run)){

            
            ?>
            <div class="update-form">
            <h2>Update Data</h2>
            <hr>
            <form action="#" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="input-form">
                
                    <div class="name">
                        <label for="name"></label>
                        <input type="text" name="name" id="name" placeholder="Full Name" required value="<?php echo $row['name']?>">
                    </div>
                    <div class="email">
                        <label for="email"></label>
                        <input type="email" name="email" id="email" placeholder="Email" required value="<?php echo $row['email']?>">
                    </div>
                    <div class="phone">
                        <label for="phone_number"></label>
                        <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" required value="<?php echo $row['phone_number']?>">
                    </div>
                    <div class="date-birth">
                        <label for="date_birth"></label>
                        <input type="date" style="color: black;" name="date_birth" id="date_birth" required value="<?php echo $row['date_birth']?>">
                    </div>
                    <!-- Gender Fieldset radio -->
                    <fieldset>
                        <h3>Gender</h3>
                        <div class="gender">
                        <input type="radio" id="male" name="gender" value="<?php echo $row['gender']?>">
                        <label for="male">Male</label>
                    
                        <input type="radio" id="female" name="gender" value="<?php echo $row['gender']?>">
                        <label for="female">Female</label>
                    
                        <input type="radio" id="diverse" name="gender" value="<?php echo $row['gender']?>">
                        <label for="diverse">Diverse</label>

                        </div>
                        </fieldset>

                        <div class="password">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $row['password']?>">
                        </div> 
                        <div class="confirm-password">
                            <label for="confirm_password"></label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" value="<?php echo $row['confirm_password']?>">
                        </div> 
                        <button type="button"><a href="../changes/changes-index.php">Cancel</a></button>
                        <button type="submit" name="update">Update</button>
                </div>
           </form>
           <?php 
           if(isset($_POST['update'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone_number = $_POST['phone_number'];
                $date_birth = $_POST['date_birth'];
                $gender = $_POST['gender'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];

                $query = "UPDATE registration SET name='$name', email='$email', phone_number = '$phone_number', date_birth = '$date_birth', gender = '$gender', password = '$password', confirm_password = '$confirm_password' WHERE id = '$id' ";
                $query_run = mysqli_query($conn, $query);

                if($query_run){
                    echo "<script> alert('User Data updated successfully.'); </script>";
                    echo '<script>window.location = "changes-index.php"</script>';
                } else {
                    echo "<script> alert('User Data not updated.'); </script>";
                    
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