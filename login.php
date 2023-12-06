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

?>

