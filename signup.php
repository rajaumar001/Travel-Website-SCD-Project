<?php
require("php\signup.php")

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="login\global.css" />
    <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Krona One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Koulen:wght@400&display=swap"
    />

    
  </head>
  <body>
    
    <form action="" method="POST">
    <div class="signup">
      <img class="signup-child" alt="" src="login\public\rectangle-58@2x.png" />

      <div class="signup1">Registration</div>
      <div class="signup-item"></div>
      <div class="username">
          <input type="email" name="username" id="username" placeholder="Email" required>
      </div>
      <div class="signup-inner"></div>
      <div class="uname">
        <input type="text" name="name" id="uname" placeholder="Name" required>
    </div>
    <div class="uname-inner"></div>
    <!-- <div class="signup-inner"></div> -->
      
     
      <div class="line-div"></div>
      <div class="password">
        <input type="password" name="password" id="password" placeholder="Type Password" required>
    </div>
      <div class="rectangle-div"></div>
      <div class="confirm_password">
      <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
      <p class="sucess"><?php echo $success?> </p>
            <p class="fail"><?php echo $failure?></p>
            <p id="confirm"></p>
      
    </div>
      <div class="cpassword-div"></div>
    
    
      <button type="submit" name="submit" class="signupbtn">Signup</button>
      </div> 
      <div class="login">
        <a href="login.php">Already have an account? Login</a>
    </form>
      
    </div>
    <script src="js\signup.js"></script>
  </body>





























































































  
</html>
