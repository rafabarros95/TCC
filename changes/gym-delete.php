<?php 

    $conn = mysqli_connect("Localhost", "root", "");
    $db = mysqli_select_db($conn, 'academia');

    if(isset($_POST["delete"])){
        $id = $_POST["id"];

        $query = "DELETE FROM gym WHERE id = '$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            echo "<script> alert('Data deleted successfully.'); </script>";
            echo '<script>window.location = "gym-index.php"</script>';
        } else {
            echo "<script> alert('Data not deleted.'); </script>";
        }
    }
?>