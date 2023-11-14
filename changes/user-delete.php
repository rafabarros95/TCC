<?php 

    $conn = mysqli_connect("Localhost", "root", "");
    $db = mysqli_select_db($conn, 'sistema_academia');

    if(isset($_POST["delete"])){
        $id = $_POST["id"];

        $query = "DELETE FROM registration WHERE id = '$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            echo "<script> alert('User deleted successfully.'); </script>";
            echo '<script>window.location = "changes-index.php"</script>';
        } else {
            echo "<script> alert('User not deleted.'); </script>";
        }
    }
?>