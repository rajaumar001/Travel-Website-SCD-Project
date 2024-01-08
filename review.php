<?php
require("php\userDetails.php")

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="r_globals.css" />
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/log-off.css' rel='stylesheet'>
    <link rel="stylesheet" href="review.css" />
    <style>
       .text-wrapper-6 a, .text-wrapper-5 a, .text-wrapper-4 a,.text-wrapper-3 a
    {
        text-decoration: none;
        color: white;
      }
     .text-wrapper-9 a, .text-wrapper-9 a, .text-wrapper-10 a{
        color: black;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="REVIEW">
      <div class="div">
        <div class="overlap">
          <div class="text-wrapper">Happy Holiday</div>
          <div class="text-wrapper-2"><?php echo $user['Name']; ?><a href="index.php"> <i class="gg-log-off"></i></a></div>
          <img class="rectangle" src="public/rectangle-168.png" />
          <div class="text-wrapper-3"><a href="contact.php">CONTACT US</a></div>
          <div class="text-wrapper-4"><a href="hotels.php">ALL HOTELS</a></div>
          <div class="text-wrapper-5"><a href="wwr.php">WHAT WE ARE</a></div>
          <div class="text-wrapper-6"><a href="AboutUs.php">ABOUT US</a></div>
        </div>
        <div class="overlap-group">
          <div class="text-wrapper-7">Hi, <?php echo $user['Name']; ?></div>
          <div class="text-wrapper-8"><?php echo $user['Username']; ?></div>
        </div>
        <div class="overlap-2">
          <div class="text-wrapper-9"><a href="user.php">PROFILE</a></div>
          <img class="arrow" src="public/arrow-17.svg" />
        </div>
        <div class="overlap-3">
          <div class="text-wrapper-9"><a href="payments.php">PAYMENT</a></div>
          <img class="arrow" src="public/arrow-17.svg" />
        </div>
        <div class="overlap-4">
          <div class="text-wrapper-9"><a href="review.php">REVIEW</a></div>
          <img class="arrow" src="public/arrow-17.svg" />
        </div>
        <div class="overlap-5">
          <div class="text-wrapper-10"><a href="setting.php">SETTING</a></div>
          <img class="arrow" src="public/arrow-17.svg" />
        </div>
        <div class="overlap-group-2">
          <div class="overlap-6">
            <img class="img" src="public/rectangle-175.png" />
            <div class="text-wrapper-11">REALLY LOVED THE MANAGMENT!!</div>
            <img class="line" src="public/line-29.svg" />
          </div>
          <div class="overlap-7">
            <img class="img" src="public/rectangle-176.png" /> 
            <div class="text-wrapper-11">ENJOYED MY BUSSINESS TRIP.</div>
            <img class="line" src="public/line-29.svg" />
          </div>
          <div class="overlap-8">
            <img class="rectangle-2" src="public/rectangle-178.png" />
            <img class="line-2" src="public/line-29.svg" />
            <div class="text-wrapper-12">Amazing!</div>
          </div>
          <div class="overlap-9">
            <img class="img" src="public/rectangle-177.png" />
            <div class="text-wrapper-13">Will Consult Again.</div>
            <img class="line" src="public/line-29.svg" />
          </div>
          <div class="text-wrapper-14">OUR REVIEWS</div>
        </div>
      </div>
    </div>
    <script src="js\review.js"></script>
  </body>
</html>
