
<!--  Adm section -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexFit</title>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/main.style.css">
    <style>
      .welcome {
       
        
        border: 3px solid #07777E;
        float: right;
        margin-top: -160px;
      }
      main h1 {
        font-size: 25px;
        color: #fff;
      }
      main  a {
        font-size: 30px;
        font-weight: bold;
        color: #07777E;
        background-color: #fff;
        text-decoration: none;
        display: flex;
        width: 200px;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-600%);
        outline: none;
        margin-left: 6px;
        padding-left: 14px;
        
        
      }

      main  a:hover {
        background-color: #07777E;
        color: #fff;
      }
    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><span>Flex</span>Fit</a>

        <nav class="navbar">
            <a href="adm.php">Home</a>
            
            
        </nav>
    </header>
    <main>
        <thead>
            <th><a href="changes/changes-index.php">Edit user</a></th>
            <th><a href="./changes/gym-index.php">Edit gym</a></th>
            <th><a href="./changes/course-index.php">Edit course</a></th>
        </thead>
    </main>
    <aside>
        <div class="contact-container">
            <div>
              <h1 class="section-title">Contact us:</h1>
            </div>
            <div class="contact-items">
              <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
                <div class="contact-info">
                  <h2>Phone</h2>
                  <h3>+49 1534 4679914</h3>
                </div>
              </div>
              <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
                <div class="contact-info">
                  <h2>Email</h2>
                  <h3>flexfit@gmx.de</h3>
                </div>
              </div>
              <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
                <div class="contact-info">
                  <h2>Address</h2>
                  <h3>Bonn, Germany</h3>
                </div>
              </div>
            </div>
          </div>
    </aside>

    <footer>
        <p>Site developed by <a href="https://github.com/rafabarros95" target="_blank"><span>Rafa Barros</span></a></p>
    </footer>

</body>
</html>