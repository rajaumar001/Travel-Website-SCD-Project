<?php
require("php\userDetails.php")

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="payment_global.css" />
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/log-off.css' rel='stylesheet'>
    <link rel="stylesheet" href="payments.css" />
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
    <style>.what-we-are a, .about-us a, .all-hotels a,.contact-us a{
  color: white;
  text-decoration: none;
}
.payment a, .profile a, .review a, .setting a{
  color: black;
  text-decoration: none;
}</style>
  </head>
  <body>
    <div class="user-manual-payment">
      <img
        class="user-manual-payment-child"
        alt=""
        src="./public/rectangle-105@2x.png"
      />

      <b class="happy-holiday">Happy Holiday</b>
      <div class="about-us"><a href="AboutUs.php">ABOUT US</a></div>
      <div class="what-we-are"><a href="wwr.php">WHAT WE ARE</a></div>
      <div class="all-hotels"><a href="hotels.php">ALL HOTELS</a></div>
      <div class="contact-us"><a href="contact.php">CONTACT US</a></div>
      <div class="hashir"><?php echo $user['Name']; ?><a href="index.php"> <i class="gg-log-off"></i></a></div>
      <div class="user-manual-payment-item"></div>
      <div class="hashirkiyani12gmailcom"><?php echo $user['Username']; ?></div>
      <div class="user-manual-payment-inner"></div>
      <div class="rectangle-div"></div>
      <div class="user-manual-payment-child1"></div>
      <div class="user-manual-payment-child2"></div>
      <div class="user-manual-payment-child3"></div>
      <div class="hi-hashir">Hi, <?php echo $user['Name']; ?></div>
      <div class="payment"><a href="payments.php">PAYMENT</a></div>
      <div class="profile"><a href="user.php">PROFILE</a></div>
      <div class="recent-payments">Recent Payments</div>
      <div class="setting"><a href="setting.php">SETTING</a></div>
      <div class="review"><a href="review.php">REVIEW</a></div>
      <img class="arrow-icon" alt="" src="./public/arrow-14@2x.png" />

      <img
        class="user-manual-payment-child4"
        alt=""
        src="./public/arrow-14@2x.png"
      />

      <img
        class="user-manual-payment-child5"
        alt=""
        src="./public/arrow-14@2x.png"
      />

      <img
        class="user-manual-payment-child6"
        alt=""
        src="./public/arrow-14@2x.png"
      />

      <div class="user-manual-payment-child7"></div>
      <div class="user-manual-payment-child8"></div>
      <div class="user-manual-payment-child9"></div>
      <div class="user-manual-payment-child10"></div>
      <div class="wittenberg">Wittenberg</div>
      <div class="bilderberg">Bilderberg</div>
      <div class="user-manual-payment-child11"></div>
      <div class="user-manual-payment-child12"></div>
      <div class="rs-1237999">RS 1,237,999</div>
      <div class="van-der-valk">Van Der Valk</div>
      <div class="user-manual-payment-child13"></div>
      <div class="rs-55000">RS 55,000</div>
      <div class="rs-1034888">RS 1,034,888</div>
      <div class="park-inn">Park Inn</div>
      <div class="user-manual-payment-child14"></div>
      <div class="rs-99888">RS 99,888</div>
    </div>
    <script src="js\payment.js"></script>
  </body>
</html>
