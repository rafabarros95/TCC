<?php 

    $conn = mysqli_connect("Localhost", "root", "");
    $db = mysqli_select_db($conn, 'sistema_academia');

    if(isset($_POST["delete"])){
        $id = $_POST["id"];

        $query = "DELETE FROM registration WHERE id = '$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            echo '<script> alert("Data deleted successfully."); </script>';
            header("Location: changes-index.php"); 
        } else {
            echo '<script> alert("Data not deleted."); </script>';
        }
    }
?>