
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
</head>
<body>
    <?php 
    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, 'sistema_academia');

    $id = $_POST["id"];

    $query = "SELECT * FROM registration WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);


    if($query_run){
        while($row = mysqli_fetch_array($query_run)){
            ?>
            <div>
            <h2>PHP: Update Data</h2>
            <hr>
            <form action="./process-signup.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="input-form">
                
                    <div class="name">
                        <label for="name"></label>
                        <input type="text" name="name" id="name" placeholder="Full Name" required value="<?php echo $row['id']?>">
                    </div>
                    <div class="email">
                        <label for="email"></label>
                        <input type="email" name="email" id="email" placeholder="Email" required value="<?php echo $row['id']?>">
                    </div>
                    <div class="phone">
                        <label for="phone_number"></label>
                        <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" required value="<?php echo $row['id']?>">
                    </div>
                    <div class="date-birth">
                        <label for="date_birth"></label>
                        <input type="date" style="color: black;" name="date_birth" id="date_birth" required value="<?php echo $row['id']?>">
                    </div>
                    <!-- Gender Fieldset radio -->
                    <fieldset>
                        <h3>Gender</h3>
                        <div class="gender">
                        <input type="radio" id="male" name="gender" value="Male" />
                        <label for="male">Male</label>
                    
                        <input type="radio" id="female" name="gender" value="female" />
                        <label for="female">Female</label>
                    
                        <input type="radio" id="diverse" name="gender" value="diverse" />
                        <label for="diverse">Diverse</label>

                        </div>
                        </fieldset>

                        <div class="password">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $row['id']?>">
                        </div> 
                        <div class="confirm-password">
                            <label for="confirm_password"></label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" value="<?php echo $row['id']?>">
                        </div> 
                        <button type="button"><a href="main.html">Cancel</a></button>
                        <button type="submit" name="submit">Update</button>
                </div>
           </form>
            </div>
           <?php 
        
        }
    } else {
        echo "No Record Found";
    }
    ?>
</body>
</html>