<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexFit</title>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/main.style.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><span>Flex</span>Fit</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About us</a>
            <a href="registration.php">Sign up</a>
            <a href="login.html">Login</a>
        </nav>
    </header>
    <main>
        <section class="search-section">
            <form action="main.php" method="post">
                
                <input type="text" name="search" id="search" placeholder="Search a course you'd like to do" required>
                <label for="search"></label>
                <button type="submit"><i class='bx bx-search' ></i></button>
            </form>
            <div class="fotos">
                <img src="../TCC/images/Karate.jpg" alt="Karate">  
                <img src="../TCC/images/Zumba.jpg" alt="Zumba">           
                <img src="../TCC/images/Yoga.jpg" alt="Yoga">                    
                           
            </div>
            
            <div class="fotos">          
                <img src="images/Tango.jpg" alt="Tango">           
                <img src="images/Pilates.jpg" alt="Pilates">           
                <img src="images/CrossFit.jpg" alt="CrossFit">           
                           
            </div>
        </section>
        
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