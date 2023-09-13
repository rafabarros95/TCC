<?php 
require ("config.php");


/* Checking connection and preparing stmt */

if($conn->connect_error){
  die ("Unable to connect to db");
} else {
  
  /* Data from form submitted */
  $name = $_POST['gym'];
  $address = $_POST['address'];
  $membership_fee = $_POST['type'];

  $query = "INSERT INTO `gym`( `name_gym`, `address`, `membership_fee`) VALUES ('$name','$address','$membership_fee')";

  $result = mysqli_query($conn,$query);

  if($result){
    
    echo "<script> alert('Gym inserted successfully')</script>";

    echo '<script>window.location = "adm.php"</script>';
    //header("location:adm.php");
   
  } else {
    echo "<script> alert('Gym not inserted, try one more time')</script>";

    echo '<script>window.location = "new_gym.html"</script>';
  }

  
  mysqli_close($conn);
}
?>