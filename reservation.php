<?php 
session_start();

require_once("config.php");

if(!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {
    
  unset($_SESSION['email']);
  unset($_SESSION['password']);
  header('Location: login.html');
  
  
} 
  $logged = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="./styles/main.style.css">
    <link rel="stylesheet" href="./styles/users_table.style.css">
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">

     <!-- email and booking - local configuration  -->

     <style>

        main form {
          float: left;
        }

        main form label{
          color: white;
          margin-left: 16px;
        }

        main form #email, #subject, #message, #gym, #name, #time_from, #time_to, #price {
          color: #07777E;
          border: none;
          outline: none;
          border-radius: 30px;
          padding-left: 15px;
          padding-bottom: 10px;
          padding-top: 10px;
          margin-left: 10px;
          margin-bottom: 10px;
          width: 390px;

        }

        main form ::placeholder {
          color: #07777E;
          font-size: 16px;
          padding-left: 3px;
          
        }

        main form button {
          border-radius: 20px;
          color: #07777E;
          width: 80px;
          border: none;
          outline: none;
          margin-top: 20px;
          margin-bottom: 20px;
          
        }

        main form button:hover {
          background-color: #07777E;
          color:white;
        }

        h1 {
          color: white;
          font-size: 20px;
          margin-bottom: 10px;
          margin-left: 25px;
          text-decoration: underline;
          text-align: center;
        }

        main table tbody tr th{
          background-color: white;
          color: #07777E;
          
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
            <a href="user.php">Home</a>
            <a href="about.php">About</a>
            <a href="booking.php">Booking</a>
            <a href="reservation.php">My Reservation</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
      <h1>My booking</h1>
      <?php 
         $conn = mysqli_connect("localhost", "root", "");
         $db = mysqli_select_db($conn, 'academia');

         $query = "SELECT * FROM booking WHERE email = '$logged'";
         $query_run = mysqli_query($conn, $query);
        ?>
        <table class="show">
          <!-- <thead> -->
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Course</th>
                  <th>Gym</th>
                  <th>Name</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Price(€)</th>
                  <th>Email</th>
                  <th>Cancel Booking</th>
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

                              <form action="reservation-delete.php" method="post">
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
           
        </table>
        
    </main>
</body>
</html>