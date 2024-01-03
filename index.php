<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/profile.css' rel='stylesheet'>
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css?v=<?php echo time(); ?>" />
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
      href="https://fonts.googleapis.com/css2?family=League Gothic:wght@400&display=swap"
    />
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/user.css' rel='stylesheet'>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Marcellus SC:wght@400&display=swap"
    />

    !-- Essential JS 2 DatePicker's dependent material theme -->
    <link href="https://cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.syncfusion.com/ej2/ej2-buttons/styles/material.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.syncfusion.com/ej2/ej2-inputs/styles/material.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.syncfusion.com/ej2/ej2-popups/styles/material.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.syncfusion.com/ej2/ej2-calendars/styles/material.css" rel="stylesheet" type="text/css" />
    <!-- Essential JS 2 all script -->
    <!-- <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script> -->
    <!-- Essential JS 2 DatePicker's dependent scripts -->
    <script src="https://cdn.syncfusion.com/ej2/ej2-base/dist/global/ej2-base.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-inputs/dist/global/ej2-inputs.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-buttons/dist/global/ej2-buttons.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-lists/dist/global/ej2-lists.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-popups/dist/global/ej2-popups.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-calendars/dist/global/ej2-calendars.min.js" type="text/javascript"></script>
  </head>
  <!-- Body -->
  <body>
    <div class="main-page">
      <img class="main-page-child" alt="" src="./public/rectangle-1@2x.png" />

      <div class="main-page-item"></div>
      <b class="happy-holiday">Happy Holiday</b>
      <div class="all-hotels">All Hotels</div>
      <div class="what-we-are">What we are</div>
      <div class="about-us">ABOUT US</div>
      <div class="contact-us">CONTACT US</div>
      <div class="travel-amsterdam-like-container">
        <p class="travel-amsterdam">Travel Amsterdam</p>
        <p class="travel-amsterdam">Like Never Before</p>
      </div>
      <div class="main-page-inner"></div>
      <div class="explore">EXPLORE</div>
      <img class="arrow-icon" alt="" src="./public/arrow-1.svg" />

      <div class="rectangle-div"></div>
      <div class="hey-book-your-container">
        <p class="travel-amsterdam">Hey, Book Your</p>
        <p class="travel-amsterdam">Next Holiday Destination</p>
      </div>
      <div class="line-div"></div>
      <div class="destination">DESTINATION</div>
      <div class="cities">
        <select name="city-names" class="cities">
          <option value="Amstterdam">Amsterdam</option>
          <option value="Islamabad">Islamabad</option>
          <option value="Lahore">Lahore</option>
          <option value="Gilgit">Gilgit</option>
          <option value="Murree">Murree</option>
          <option value="Nathia Gali">Nathia Gali</option>
          <option value="Bhurban">Bhurban</option>
        </select>
      </div>
      

      <div class="date">DATE</div>
      <div class="persons">PERSON(S)</div>
      <div class="main-page-child1"></div>
      <div class="main-page-child2"></div>
      <div class="november2023">
        <input id="element" style="font-family: var(--font-size-xl);"/>
    <script>
        // initialize the DatePicker component
        var datepicker = new ej.calendars.DatePicker();
        // Render the initialized DatePicker.
        datepicker.appendTo('#element')
    </script>
      </div>
      <div class="person">
        <select name="person" class="person">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10+">10+</option>
        </select>
      </div>
      

      <div class="main-page-child4"></div>
      <div class="book-now"><a href="search.php">BOOK NOW</a></div>
      <img class="main-page-child5" alt="" src="./public/arrow-2.svg" />

      <div class="explore-pakistan">Explore Pakistan</div>
      <img class="main-page-child6" alt="" src="./public/rectangle-8.svg" />

      <div class="main-page-child7"></div>
      <div class="main-page-child8"></div>
      <img class="main-page-child9" alt="" src="./public/rectangle-11@2x.png" />

      <div class="main-page-child10"></div>
      <div class="islamabad">ISLAMABAD</div>
      <div class="main-page-child11"></div>
      <div class="starting-from-rs">Starting from rs 5500</div>
      <div class="islamabad-has-attracted-container">
        <p class="travel-amsterdam">
          ISLAMABAD HAS ATTRACTED PEOPLE FROM ALL OVER
        </p>
        <p class="travel-amsterdam">THE WORLD. 2ND BEST CAPITAL IN</p>
        <p class="travel-amsterdam">THE WORLD.</p>
      </div>
      <div class="main-page-child12"></div>
      <div class="explore1">EXPLORE</div>
      <img class="main-page-child13" alt="" src="./public/arrow-3.svg" />

      <img
        class="main-page-child14"
        alt=""
        src="./public/rectangle-15@2x.png"
      />

      <div class="main-page-child15"></div>
      <div class="lahore">LAHORE</div>
      <div class="main-page-child16"></div>
      <div class="starting-from-rs1">Starting From RS 3500</div>
      <div class="stay-with-us-container">
        <p class="travel-amsterdam">Stay with us and have wonderful</p>
        <p class="travel-amsterdam">Experience of City Lahore.</p>
      </div>
      <div class="main-page-child17"></div>
      <div class="explore2">EXPLORE</div>
      <img class="main-page-child18" alt="" src="./public/arrow-2.svg" />

      <img
        class="main-page-child19"
        alt=""
        src="./public/rectangle-19@2x.png"
      />

      <div class="main-page-child20"></div>
      <div class="gilgit">GILGIT</div>
      <div class="main-page-child21"></div>
      <div class="starting-from-rs2">Starting From RS 15000</div>
      <div class="gilgit-baltistan-in-container">
        <p class="travel-amsterdam">Gilgit Baltistan In Pakistan Is Very</p>
        <p class="travel-amsterdam">Attractive and Sensational For Tourists.</p>
      </div>
      <div class="main-page-child22"></div>
      <div class="explore3">EXPLORE</div>
      <img class="main-page-child23" alt="" src="./public/arrow-2.svg" />

      <div class="quick-and-easy">Quick and Easy Trip Planner</div>
      <div class="main-page-child24"></div>
      <div class="main-page-child25"></div>
      <div class="main-page-child26"></div>
      <img
        class="main-page-child27"
        alt=""
        src="./public/rectangle-26@2x.png"
      />

      <div class="main-page-child28"></div>
      <div class="murree">Murree</div>
      <div class="kms-away-from-container">
        <p class="travel-amsterdam">65 KMs Away From Twin</p>
        <p class="travel-amsterdam">Cities.</p>
      </div>
      <div class="main-page-child29"></div>
      <div class="explore4">explore</div>
      <img class="main-page-child30" alt="" src="./public/arrow-2.svg" />

      <img
        class="main-page-child31"
        alt=""
        src="./public/rectangle-29@2x.png"
      />

      <div class="main-page-child32"></div>
      <div class="nathia-gali">Nathia Gali</div>
      <div class="kms-away-from-container1">
        <p class="travel-amsterdam">87 KMs Away From Twin</p>
        <p class="travel-amsterdam">Cities.</p>
      </div>
      <div class="kms-away-from-container2">
        <p class="travel-amsterdam">70 KMs Away From Twin</p>
        <p class="travel-amsterdam">Cities.</p>
      </div>
      <div class="main-page-child33"></div>
      <div class="explore5">EXPLORE</div>
      <img class="main-page-child34" alt="" src="./public/arrow-2.svg" />

      <img
        class="main-page-child35"
        alt=""
        src="./public/rectangle-32@2x.png"
      />

      <div class="main-page-child36"></div>
      <div class="bhurban">Bhurban</div>
      <div class="main-page-child37"></div>
      <div class="explore6">EXPLORE</div>
      <img class="main-page-child38" alt="" src="./public/arrow-2.svg" />

      <div class="trending-destinations">Trending Destinations</div>
      <img
        class="main-page-child39"
        alt=""
        src="./public/rectangle-35@2x.png"
      />

      <img
        class="main-page-child40"
        alt=""
        src="./public/rectangle-36@2x.png"
      />

      <img
        class="main-page-child41"
        alt=""
        src="./public/rectangle-37@2x.png"
      />

      <img
        class="main-page-child42"
        alt=""
        src="./public/rectangle-38@2x.png"
      />

      <div class="thailand">THAILAND</div>
      <div class="paris">PARIS</div>
      <div class="bali">BALI</div>
      <div class="dubai">DUBAI</div>
      <div class="catagories-of-residence">Catagories Of Residence</div>
      <div class="main-page-child43"></div>
      <div class="main-page-child44"></div>
      <div class="main-page-child45"></div>
      <div class="main-page-child46"></div>
      <div class="main-page-child47"></div>
      <img
        class="main-page-child48"
        alt=""
        src="./public/rectangle-44@2x.png"
      />

      <div class="main-page-child49"></div>
      <div class="tiny-homes">Tiny Homes</div>
      <img
        class="main-page-child50"
        alt=""
        src="./public/rectangle-45@2x.png"
      />

      <div class="main-page-child51"></div>
      <div class="villa-homes">Villa Homes</div>
      <img
        class="main-page-child52"
        alt=""
        src="./public/rectangle-46@2x.png"
      />

      <div class="main-page-child53"></div>
      <div class="beach-side">Beach Side</div>
      <img
        class="main-page-child54"
        alt=""
        src="./public/rectangle-47@2x.png"
      />

      <div class="main-page-child55"></div>
      <div class="apartments">Apartments</div>
      <img
        class="main-page-child56"
        alt=""
        src="./public/rectangle-48@2x.png"
      />

      <div class="main-page-child57"></div>
      <div class="shared-rooms">Shared Rooms</div>
      <img
        class="main-page-child58"
        alt=""
        src="./public/rectangle-49@2x.png"
      />

      <div class="keep-in-touch">KEEP IN TOUCH</div>
      <div class="main-page-child59"></div>
      <div class="its-time-for">It’s Time For Adventures & Experience</div>
      <div class="main-page-child60"></div>
      <div class="main-page-child61"></div>
      <div class="subscribe">SUBSCRIBE</div>
      <div class="enter-your-email">ENTER YOUR EMAIL ADDRESS</div>
      <div class="main-page-child62"></div>
      <img
        class="main-page-child63"
        alt=""
        src="./public/rectangle-53@2x.png"
      />

      <div class="div1">
        <p class="travel-amsterdam">+92 300 23328</p>
        <p class="travel-amsterdam">+92 0307 89990</p>
      </div>
      <img
        class="main-page-child64"
        alt=""
        src="./public/rectangle-54@2x.png"
      />

      <div class="happyholidaysgmailcom">Happyholidays@gmail.com</div>
      <img
        class="main-page-child65"
        alt=""
        src="./public/rectangle-55@2x.png"
      />

      <div class="happyholidays">HappyHolidays</div>
      <img
        class="main-page-child66"
        alt=""
        src="./public/rectangle-56@2x.png"
      />

      <img
        class="main-page-child67"
        alt=""
        src="./public/rectangle-57@2x.png"
      />
    <div id="navbar">
      <b class="happy-holiday1">Happy Holiday</b>
      <div class="contact-us1">CONTACT US</div>
      <div class="about-us1">ABOUT US</div>
      <div class="faqs">FAQ’s</div>
      <div class="main-page-child68"></div>
      <div class="log-in">
     <a href='user.php' id="move"> <i class="gg-user"></i> </a>
        
        <?php
        if (isset($_SESSION['username'])) {
            $loggedIn = true;
            $username = $_SESSION['username'];
            
            echo "<p>Welcome, $username </p>  ";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            $loggedIn = false;
            echo "<a href='login.php'>LOGIN / SIGNUP</a>";
        }

        ?>
    </div>
    </div>
    </div>
  </body>
</html>
