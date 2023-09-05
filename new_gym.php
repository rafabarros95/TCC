<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Gym</title>
    <link rel="stylesheet" href="./styles/gym.style.css">
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
</head>
<body>
  <section>
    <div class="new_gym">
        <form action="#" method="post">
          
              <div class="logo">
                <img src="./images/FlexFit_Logo.png" alt="" style="width: 210px; height: 210px;">
              </div>
          
          <h1>Register New Gym</h1>
  
          <div class="input-box">
            <label for="gym"></label>
            <input type="text" name="gym" id="gym" placeholder="Name" required>
          </div>
  
          <div class="input-box">
            <label for="address"></label>
            <input type="text" name="address" id="address" placeholder="Address" required>
          </div>
          <fieldset>
                <h3>Membership Type</h3>
                    <div class="type">
                        <input type="radio" id="monthly" name="type" value="monthly" />
                        <label for="monthly">monthly - €25</label>
                    </div>

                    <div class="type">
                        <input type="radio" id="yearly" name="type" value="yearly" />
                        <label for="yearly">yearly - €250</label>
                    </div>
          </fieldset>
          
          <button><a href="index.php">Cancel</a></button>
          <button class="btn" type="submit" name="submit">Add Gym</button>
  
        </form>
      </div>
  </section> 
</body>
</html>