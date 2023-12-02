<?php 

require_once("config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Data</title>
    <link rel="stylesheet" href="./styles/users_table.style.css">
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <style>
        main table tbody tr th{
          background-color: white;
          color: #07777E;
          font-weight: normal;
          font-size: 17px;
          
          
        }

       
        /* Delete button configuration */
        #delete {
             border-radius: 15%;
             width: 70px;
             outline: none;
             color: #fff; 
             font-size: 18px;
             padding: 4px 2px; 
             background-color: red;
             margin-right: 4px;
             margin-top: 4px;
             margin-bottom: 4px; 
        }

        #delete:hover {
             color: #fff;
             background-color: #ff6347;
        }

    </style>
</head>
<body>
    <header class="header">
            <a href="#" class="logo"><span>Flex</span>Fit</a>

            <nav class="navbar">
                <a href="adm.php">Home</a>
                <a href="booking-table.php">Booking</a>
                <a href="users_table.php">Users</a>
                <a href="courses_table.php">Courses</a>
                <a href="gyms.php">Gyms</a>
                <a href="about.adm.php">About us</a>
                <a href="new_course.html">Add course</a>
                <a href="new_gym.html">Add gym</a>
                <a href="changes.php">Changes</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>
    <main>
    <?php 
         $conn = mysqli_connect("localhost", "root", "");
         $db = mysqli_select_db($conn, 'academia');

         $query = "SELECT * FROM booking";
         $query_run = mysqli_query($conn, $query);
        ?>
        <table class="show">
          <!-- <thead> -->
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Course</th>
                  <th>Gym</th>
                  <th>User</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Price(€)</th>
                  <th>Email</th>
                  <th>Remove Booking</th>
                </tr>
            </thead>
          <!-- </thead> -->
          <!-- <tbody> -->
          <?php 
             if($query_run){
              while($row = mysqli_fetch_array($query_run)){
                  ?>
                      <tbody>
                          <tr>
                              <th><?php echo $row['id']; ?></th>
                              <th><?php echo $row['name_course']; ?></th>
                              <th><?php echo $row['gym']; ?></th>
                              <th><?php echo $row['name_user']; ?></th>
                              <th><?php echo $row['time_from']; ?></th>
                              <th><?php echo $row['time_to']; ?></th>
                              <th><?php echo $row['price']; ?></th>
                              <th><?php echo $row['email']; ?></th>

                              <form action="booking-delete.php" method="post">
                                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                  <th> <input type="submit" id="delete" name="delete" value="Delete"></th>
                              </form>
                          </tr>
                      </tbody>
                  <?php 
              
              }
          }
      else {
          echo  "No Record Found";
      }
      ?>
    </main>
    
    <footer>
        <p>Site developed by <a href="https://github.com/rafabarros95" target="_blank"><span>Rafa Barros</span></a></p>
    </footer>
</body>
</html>