<?php 
require ("config.php");


/* Checking connection and preparing stmt */

    if($conn->connect_error){
       die ("Unable to connect to db");
    } else {
    
       /* Data from form submitted */
       $name = $_POST['name'];
       $description = $_POST['description'];
       $vacancies = $_POST['vacancies'];
       $time_from = $_POST['time-from'];
       $time_to = $_POST['time-to'];

       $query = "INSERT INTO `course`( `name`, `description`, `vacancies`, `time_from`, `time_to`) VALUES ('$name','$description','$vacancies','$time_from','$time_to')";

       $result = mysqli_query($conn,$query);

    if($result){
        
        echo "Course inserted successfully";
        //header("location:adm.php");
    
    } else {
        echo "New course not inserted";
    }

    
    mysqli_close($conn);
}
?>