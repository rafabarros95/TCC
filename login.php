<?php 
   require ("config.php");
  
  $email = $_POST['email'];
  $password = $_POST['password'];


  if($conn->connect_error){
    die("Unable to connect" . $conn->connect_error);
  } else {
    $stmt = $conn->prepare("select * from registration where email = ?");
    $stmt ->bind_param("s", $email);
    $stmt ->execute();
    $stmt_result = $stmt->get_result();

    /* Logic to differ 'Admin' and 'user' */
    
    if($stmt_result->num_rows >0){
      $data = $stmt_result->fetch_assoc();
      if($data['password'] === $password && $data['email'] === $email && $data['usertype'] !== 'user'){

        header("location:adm.php");

      } elseif (($data['password'] === $password && $data['email'] === $email && $data['usertype'] === 'user')) {
         
        header("location:index.php");
        
      } else {
        echo "<script> alert('Invalid Email or Password')</script>";
        
      }
    } else {
      echo "<script> alert('Invalid Email or Password')</script>";
      
    }
  } 
?>

