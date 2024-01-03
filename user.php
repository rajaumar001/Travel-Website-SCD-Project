<?php
require("php\userDetails.php")

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="user\global.css" />
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/log-off.css' rel='stylesheet'>
    <link rel="stylesheet" href="user\userpanel.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Kufam:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Koulen:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Marcellus SC:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="user-manual-profile">
      <button class="user-manual-profile-child"></button>
      <img
        class="user-manual-profile-item"
        alt=""
        src="user\public\rectangle-97@2x.png"
      />

      <b class="happy-holiday">Happy Holiday</b>
      <a class="about-us">ABOUT US</a>
      <div class="what-we-are">WHAT WE ARE</div>
      <div class="all-hotels">ALL HOTELS</div>
      <div class="contact-us">CONTACT US</div>
      <div class="user-manual-profile-inner"></div>
      <div class="rectangle-div"></div>
      <div class="user-manual-profile-child1"></div>
      <div class="user-manual-profile-child2"></div>
      <div class="user-manual-profile-child3"></div>
      <div class="user-manual-profile-child4"></div>
      <div class="hashir"><?php echo $user['Name']; ?><a href="index.php"> <i class="gg-log-off"></i></a></div>
      <div class="hi-hashir">Hi, <?php echo $user['Name']; ?></div>
      <div class="profile">Profile</div>
      <img class="arrow-icon" alt="" src="user\public\arrow-10.svg" />

      <div class="payment">Payment</div>
      <img
        class="user-manual-profile-child5"
        alt=""
        src="user\public\arrow-10.svg"
      />

      <div class="review">Review</div>
      <img
        class="user-manual-profile-child6"
        alt=""
        src="user\public\arrow-12.svg"
      />

      <div class="setting">Setting</div>
      <img
        class="user-manual-profile-child7"
        alt=""
        src="user\public\arrow-10.svg"
      />

      <div class="hashir-kiyani"><?php echo $user['Name']; ?></div>
      <div class="basic-information">Basic Information</div>
      <div class="make-sure-this">
        Make sure this information matches your travel ID
      </div>
      <div class="name">NAME</div>
      <div class="email">EMAIL</div>
      <div class="mobile-number">MOBILE NUMBER</div>
      <div class="address">ADDRESS</div>
      <div class="bio">BIO</div>
      <div class="date-of-birth">DATE OF BIRTH</div>
      <div class="gender">GENDER</div>
      <div class="contact">CONTACT</div>
      <div class="receive-account-alerts">
        Receive account alerts and Trip updates
      </div>
      <div class="hashir-kiyani1"><?php echo $user['Name']; ?></div>
      <div class="st-dec-2000">N/A</div>
      <div class="male">N/A</div>
      <div class="div">N/A</div>
      <div class="hashirkiyani12gmailcom1"><?php echo $user['Username']; ?></div>
      <div class="h-no-775">
      N/A
      </div>
      <div class="travel-enthusiast">Travel Enthusiast</div>
    </div>
    <script src="js\userpanel.js"></script>
  </body>
</html>
