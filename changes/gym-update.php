<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update gym</title>
    <link rel="stylesheet" href="../styles/registration.style.css">
    <link rel="shortcut icon" href="../images/Favicon.png" type="image/x-icon">
    <style>
         .update-form .input-box .gym {
            position:relative; 
            border: 1px solid #07777E;
            border-radius: 15px;
            margin: 4px 4px;
            padding: 5px 5px;
            width: 243px;
    
        } 

         .update-form fieldset .type  {
            display: inline-block;
            text-align: center;
           
        }

         .update-form fieldset label  {
            color: black;
        }

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

    $query = "SELECT * FROM gym WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);


    if($query_run)
        {
            while($row = mysqli_fetch_assoc($query_run)){

            
            ?>
            <div class="update-form">
            <h2>Update Data</h2>
            
            <form action="#" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="input-form">
                    <div class="logo">
                    <img src="../images/FlexFit_Logo.png" alt="" style="width: 210px; height: 130px;">
                </div>
          
                <h1>Update Gym Data</h1>
        
                <div class="input-box">
                    <label for="gym"></label>
                    <input type="text" name="gym" class="gym" id="gym" placeholder="Name" value="<?php echo $row['name_gym']?>"  required>
                </div>
        
                <div class="input-box">
                    <label for="address"></label>
                    <input type="text" class="gym" name="address" id="address" placeholder="Address" value="<?php echo $row['address']?>" required>
                </div>
                    <fieldset>
                        <h3>Membership Type</h3>
                        <div class="type">
                            <input type="radio" id="monthly" name="type" class="membership" value="<?php echo $row['membership_fee']?>"/>
                            <label for="monthly">monthly - €25</label>
                        </div>

                        <div class="type">
                            <input type="radio" id="yearly" name="type" class="membership" value="<?php echo $row['membership_fee']?>"/>
                            <label for="yearly">yearly - €250</label>
                        </div>
                    </fieldset>
                    
                        <button type="button"><a href="../changes/gym-index.php">Cancel</a></button>
                        <button type="submit" name="update">Update</button>
                </div>
           </form>
           <?php 
           if(isset($_POST['update'])){
                $name_gym = $_POST['name_gym'];
                $address = $_POST['address'];
                $membership_fee = $_POST['membership_fee'];

                $query = "UPDATE gym SET name_gym='$name_gym', address='$address', membership_fee = '$membership_fee' WHERE id = '$id' ";
                $query_run = mysqli_query($conn, $query);

                if($query_run){
                    echo "<script> alert('Gym updated successfully.'); </script>";
                    
                    echo '<script>window.location = "changes-index.php"</script>';
                    
                } else {
                    echo "<script> alert('Gym not updated. Try again!'); </script>";
                    
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