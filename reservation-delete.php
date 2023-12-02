<?php 

    $conn = mysqli_connect("Localhost", "root", "");
    $db = mysqli_select_db($conn, 'academia');

    if(isset($_POST["delete"])){
        $id = $_POST["id"];

        $query = "DELETE FROM booking WHERE id = '$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            echo "<script> alert('Booking deleted successfully.'); </script>";
            echo '<script>window.location = "reservation.php"</script>';
        } else {
            echo "<script> alert('Booking not deleted.'); </script>";
        }
    }
?>