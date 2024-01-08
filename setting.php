<?php
require("php\userDetails.php")

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="s_global.css" />
    <link rel="stylesheet" href="setting.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Kufam:wght@700&display=swap"
    />
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/log-off.css' rel='stylesheet'>
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Koulen:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Marcellus SC:wght@400&display=swap"
    />
    <style>
      .about-us a, .what-we-are a, .all-hotels a,.contact-us a
    {
        text-decoration: none;
        color: white;
      }
      .payment a, .profile a, .review a, .setting1 a{
        color: black;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="setting">
      <img class="setting-child" alt="" src="./public/rectangle-179@2x.png" />

      <b class="happy-holiday">Happy Holiday</b>
      <div class="hashir"><?php echo $user['Name']; ?><a href="index.php"> <i class="gg-log-off"></i></a></div>
      <div class="hi-hashir">Hi, <?php echo $user['Name']; ?></div>
      <img class="setting-item" alt="" src="./public/rectangle-168@2x.png" />

      <div class="contact-us"><a href="contact.php">CONTACT US</a></div>
      <div class="what-we-are"><a href="wwr.php">WHAT WE ARE</a></div>
      <div class="all-hotels"><a href="hotels.php">ALL HOTELS</a></div>
      <div class="about-us"><a href="AboutUs.php">ABOUT US</a></div>
      <div class="setting-inner"></div>
      <div class="rectangle-div"></div>
      <div class="setting-child1"></div>
      <div class="setting-child2"></div>
      <div class="setting-child3"></div>
      <div class="setting-child4"></div>
      <div class="hashirkiyani12gmailcom"><?php echo $user['Username']; ?></div>
      <div class="profile"><a href="user.php">PROFILE</a></div>
      <div class="payment"><a href="payments.php">PAYMENT</a></div>
      <div class="review"><a href="review.php">REVIEW</a></div>
      <div class="setting1"><a href="setting.php">SETTING</a></div>
      <img class="arrow-icon" alt="" src="./public/arrow-14@2x.png" />

      <img class="setting-child5" alt="" src="./public/arrow-14@2x.png" />

      <img class="setting-child6" alt="" src="./public/arrow-14@2x.png" />

      <img class="setting-child7" alt="" src="./public/arrow-14@2x.png" />

      <div class="settings">SETTINGS</div>
      <div class="setting-child8"></div>
      <div class="setting-child9"></div>
      <div class="setting-child10"></div>
      <div class="name">NAME</div>
      <div class="password">PASSWORD</div>
      <div class="email">EMAIL</div>
      <div class="div">.................</div>
      <div class="hashir-kayani"><?php echo $user['Name']; ?></div>
      <div class="hashirscdcom"><?php echo $user['Username']; ?></div>
      <div class="ellipse-div"></div>
      <div class="setting-child11"></div>
      <div class="setting-child12"></div>
      <div class="setting-child13"></div>
    </div>
    <script src="js\setting.js"></script>
  </body>
</html>
