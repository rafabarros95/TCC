<?php 
require_once ("config.php");


/* Checking connection and preparing stmt */

    if($conn->connect_error){
       die ("Unable to connect to db");
    } else {
    
       /* Data from form submitted */
       $name_course = $_POST['name'];
       $gym = $_POST['gym'];
       $description = $_POST['description'];
       $vacancies = $_POST['vacancies'];
       $price = $_POST['price'];
       $time_from = $_POST['time-from'];
       $time_to = $_POST['time-to'];

       $query = "INSERT INTO `course`( `name_course`,`gym`, `description`, `vacancies`,`price`, `time_from`, `time_to`) VALUES ('$name_course','$gym','$description','$vacancies','$price','$time_from','$time_to')";

       $result = mysqli_query($conn,$query);

    if($result){
        
        echo "<script> alert('Course saved successfully')</script>";

        echo '<script>window.location = "adm.php"</script>';
        //header("location:adm.php");
    
    } else {
        echo "New course not inserted";
    }

    
    mysqli_close($conn);
}
?>




