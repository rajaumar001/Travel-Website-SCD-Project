<?php
require("./php/login.php")

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="login\global.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="login\login.css?v=<?php echo time(); ?>" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Krona One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Koulen:wght@400&display=swap"
    />
    <?php
   
   if($notFound!=null){
    ?><style>.usernotfound{display:block} </style><?php
} 
else if($failure!=null){
    ?><style>.fail{display:block} </style><?php
}   
   
   
   ?>
    
  </head>
  <body>
    <form action="" method="POST">
    <div class="login">
      <img class="login-child" alt="" src="login\public\rectangle-58@2x.png" />

      <div class="login1">login</div>
      <div class="login-item"></div>
      <div class="username">
          <input type="text" name="username" id="username" placeholder="Email" required>
      </div>
      <div class="login-inner"></div>
      <div class="line-div"></div>
      <div class="password">
        <input type="password" name="password" id="password" placeholder="Password" required autocomplete="off">
        <p class="fail"><?php echo $failure?></p>
            <p class="usernotfound"><?php echo $notFound?></p>
    </div>
    
      <div class="rectangle-div"></div>
      
          
      <button type="submit" name="submit" class="login2">Login</button>
      <button type="submit" class="signup"><a href="signup.php" style="text-decoration:none;">Signup</a></button>
      </form>
    </div>
    <script src="js/signin.js"></script>
  </body>
</html>
