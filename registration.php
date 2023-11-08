 <?php 

 //require ("config.php");


/* Checking connection and preparing stmt */

    if($conn->connect_error){
       die ("Unable to connect to db");
    } else {
    
       /* Data from form submitted */
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone_number = $_POST['phone_number'];
       $date_birth = $_POST['date_birth'];
       $gender = $_POST['gender'];
       $password = $_POST['password'];
       $confirm_password = $_POST['confirm_password'];

       /* $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT); */

       if($password === $confirm_password){

          $query = "INSERT INTO `registration`( `name`, `email`, `phone_number`, `date_birth`, `gender`, `password`, `confirm_password`) VALUES ('$name','$email','$phone_number','$date_birth','$gender','$password','$confirm_password')";

            /* valiable result takes the connection and then the query is execute it */
          $result = mysqli_query($conn,$query);
        
          /* if everything works fine, the query is inserted and no errors have occured */
        if($result){
            
            echo " <script> alert('New member registered successfully')</script>";

            echo '<script>window.location = "login.html"</script>';
            //header("location:adm.php");
        
        } else {
          echo "<script> alert('Registration not successful. Try again')</script>";

            echo '<script>window.location = "ragistration.html"</script>';
        }

        /* mysqli_free_result($result); */
        mysqli_close($conn);

       } else {

        echo "<script> alert('Password does not match. Try again')</script>";

        echo '<script>window.location = "registration.html"</script>';
       }
      
} 
?> 