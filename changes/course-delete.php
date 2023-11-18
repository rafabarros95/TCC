<?php 

    $conn = mysqli_connect("Localhost", "root", "");
    $db = mysqli_select_db($conn, 'academia');

    if(isset($_POST["delete"])){
        $id = $_POST["id"];

        $query = "DELETE FROM course WHERE id = '$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            echo "<script> alert('Course deleted successfully.'); </script>";
            echo '<script>window.location = "course-index.php"</script>';
        } else {
            echo "<script> alert('Course not deleted.'); </script>";
        }
    }
?>