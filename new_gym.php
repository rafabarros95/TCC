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

  $query = "INSERT INTO `gym`( `name`, `address`, `membership_fee`) VALUES ('$name','$address','$membership_fee')";

  $result = mysqli_query($conn,$query);

  if($result){
    
    echo "Gym inserted successfully";
    //header("location:adm.php");
   
  } else {
    echo "New gym not inserted";
  }

  
  mysqli_close($conn);
}
?>