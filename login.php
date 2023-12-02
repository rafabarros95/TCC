<?php 
  session_start();

  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
   include_once("config.php");
  
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM registration WHERE email = ? and password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  /* $result = $conn->query($sql); */

  if(mysqli_num_rows($result) < 1){

      unset($_SESSION['email']);
      unset($_SESSION['password']); 
      header('Location: login.html');  
    

  } else{

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
   
    if(strcasecmp($_SESSION['email'], 'rafaelbarros95@icloud.com') == 0){
      header('Location: adm.php');
    }  else {
    

      header('Location: user.php');
    }
  }
}
  else {
      header('Location: login.html');   
     
  }

  /* if($conn->connect_error){
    die("Unable to connect" . $conn->connect_error);
  } else {
    $stmt = $conn->prepare("select * from registration where email = ?");
    $stmt ->bind_param("s", $email);
    $stmt ->execute();
    $stmt_result = $stmt->get_result();

    /* Logic to differ 'Admin' and 'user' */
    /*
    if($stmt_result->num_rows >0){
      $data = $stmt_result->fetch_assoc();
      if($data['password'] === $password && $data['email'] === $email && $data['usertype'] !== 'user'){

        header("location:adm.php");

      } elseif (($data['password'] === $password && $data['email'] === $email && $data['usertype'] === 'user')) {
         
        header("location:user.php");
        
      } else {
        echo "<script> alert('Invalid Email or Password, Try again!')</script>";
        
        echo '<script>window.location = "login.html"</script>';
        
      }
    } else {
      echo "<script> alert('Invalid Email or Password, Try again!')</script>";

      echo '<script>window.location = "login.html"</script>';
      
    }
  } */

?>

