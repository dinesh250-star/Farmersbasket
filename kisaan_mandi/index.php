<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->

    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendors/css/ionicons.min.css"
    />
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css" />

    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400"
      rel="stylesheet"
    />

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://realfavicongenerator.net/blog/wp-content/uploads/2015/10/demo_favicon.png"
    />

    <title>Farmer's Basket</title>
  </head>

  <body>
    <!-- HEADER -->
    <header>
      <nav>
        <div class="row">
          <a href="index.html"
            ><img src="resources/img/logo.jpg" alt="logo" class="logo"
          /></a>
          <ul class="main-nav js--main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="forum.php">Forum</a></li>
         
            <li><a href="myaccount.php">My Account</a></li>
          </ul>
          <a class="mobile-nav-icon js--nav-icon"
            ><i class="icon ion-ios-menu"></i
          ></a>
        </div>
      </nav>
      <div class="hero-text-box">
        <h1>Welcome to <br />Farmers Basket</h1>
        <a class="btn btn-full js--scroll-to-plans" href="sell.php"
          >Join as Seller</a
        >
        <a class="btn btn-ghost js--scroll-to-features" href="products.php"
          >Start Shopping</a
        >
      </div>
    </header>

    <!------------------------- features------------------------------ -->

    <section class="section-features js--section-features" id="features">
      <div class="row">
        <h2>Get All Products &mdash; Directly form Farmers</h2>
        <p class="long-text">
          Farmers can Buy or Sell or Advertise fruits & vegetables, Agri
          products, directly to end-consumer
        </p>
      </div>
      <div class="row js--wp-1">
        <div class="col span-1-of-4 box">
          <i class="icon ion-ios-infinite icon-big"></i>
          <h2 class="boldy">
            Free for <br />
            All
          </h2>
          <p>
            This website is Free fo all users, especially to engage our farmers
            of to go digital India.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="icon ion-ios-timer icon-big"></i>
          <h2>Easy to Access</h2>
          <p>
            Farmers can directly sell their products to end-users; so no
            brokerage charges required.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="icon ion-ios-nutrition icon-big"></i>
          <h2>100% organic</h2>
          <p>
            All other vegetables are fresh, organic and local. Animals are
            raised without added hormones or antibiotics.
            <!-- Good for your health, the environment, and it also tastes better! -->
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="icon ion-ios-cart icon-big"></i>
          <h2>Order anything</h2>
          <p>
            You can choose from our Catalogue containing over 100s of products .
            It's up to you!
          </p>
        </div>
      </div>
    </section>

    <!----------- productshowcase------------>

    <h2>Product showcase</h2>
    <section class="section-products">
      <ul class="showcase clearfix">
        <li>
          <figure class="product-photo">
            <img src="resources/img/1.jpg" />
          </figure>
        </li>
        <li>
          <figure class="product-photo">
            <img src="resources/img/2.jpg" />
          </figure>
        </li>
        <li>
          <figure class="product-photo">
            <img src="resources/img/3.jpg" />
          </figure>
        </li>
        <li>
          <figure class="product-photo">
            <img src="resources/img/4.jpg" />
          </figure>
        </li>
      </ul>
      <ul class="showcase clearfix">
        <li>
          <figure class="product-photo">
            <img src="resources/img/5.jpg" />
          </figure>
        </li>
        <li>
          <figure class="product-photo">
            <img src="resources/img/6.jpg" />
          </figure>
        </li>
        <li>
          <figure class="product-photo">
            <img src="resources/img/7.jpg" />
          </figure>
        </li>
        <li>
          <figure class="product-photo">
            <img src="resources/img/8.jpg" />
          </figure>
        </li>
      </ul>
    </section>

    <!-- ------------------HOW TO USE ---------------------------------- -->

    <section class="section-steps" id="steps">
      <div class="row">
        <h2>How to use &mdash; Simple as 1, 2, 3</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-2 steps-box">
          <img
            src="resources/img/goodimage.jpg"
            alt="goodImage"
            class="app-screen js--wp-2"
          />
        </div>
        <div class="col span-1-of-2 steps-box">
          <div class="works-step">
            <div>1</div>
            <p>Login as a verified account</p>
          </div>
          <div class="works-step">
            <div>2</div>
            <p>Start adding in your Prodcut details</p>
          </div>
          <div class="works-step">
            <div>3</div>
            <p>Browse through products of other users as a Consumer</p>
          </div>

          <a href="products.php" class="button">Start Shopping</a>
          <a href="sell.php" class="button">Join as a Seller </a>
        </div>
      </div>
    </section>

    <!-- posts -->

    <section class="section-posts" id="posts">
      <div class="row">
        <h2>Our Featured Products</h2>
      </div>
      <div class="row js--wp-3">
        <div class="col span-1-of-4 box">
          <img src="resources/img/ppp1.jpg" />
          <h3>Hazlenuts</h3>
          <div class="post-feature">
            <i class="icon ion-ios-person icon-small"></i>
            Sponsor
          </div>
          <div class="post-feature">
            <i class="icon ion-ios-star icon-small"></i>
            500/kg
          </div>
          <div class="post-feature">
            <i class="icon ion-logo-twitter icon-small"></i>
            <a href="#">ADD TO CART</a>
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/ppp010.jpg" />
          <h3>Almonds</h3>
          <div class="post-feature">
            <i class="icon ion-ios-person icon-small"></i>
            Sponsor
          </div>
          <div class="post-feature">
            <i class="icon ion-ios-star icon-small"></i>
            100/kg
          </div>
          <div class="post-feature">
            <i class="icon ion-logo-twitter icon-small"></i>
            <a href="#">ADD TO CART</a>
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/ppp7.jpg" />
          <h3>Spices</h3>
          <div class="post-feature">
            <i class="icon ion-ios-person icon-small"></i>
            Sponsor
          </div>
          <div class="post-feature">
            <i class="icon ion-ios-star icon-small"></i>
            All at 300/kg
          </div>
          <div class="post-feature">
            <i class="icon ion-logo-twitter icon-small"></i>
            <a href="#">ADD TO CART</a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img src="resources/img/ppp6.jpg" />
          <h3>Pistachios</h3>
          <div class="post-feature">
            <i class="icon ion-ios-person icon-small"></i>
            Sponsor
          </div>
          <div class="post-feature">
            <i class="icon ion-ios-star icon-small"></i>
            400/kg
          </div>
          <div class="post-feature">
            <i class="icon ion-logo-twitter icon-small"></i>
            <a href="#">ADD TO CART</a>
          </div>
        </div>
      </div>
    </section>

    <!-- --------------------------TESTIMONIALS --------------------------->

    <section class="section-testimonials">
      <div class="row">
        <h2>Our users can't live without us</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <blockquote>
            Farmers Basket is just awesome! I just launched a product on this
            site very quickly, Faremers Basket is a life-saver.
            <cite
              ><img src="resources/img/sumukh.png" alt="Sumukh" />Sumukh
              Tiwarekar</cite
            >
          </blockquote>
        </div>

        <div class="col span-1-of-3">
          <blockquote>
            Inexpensive, healthy and products found within a click on computer.
            We have lots of Agro-products here in Bangalore, but no one comes
            even close to Farmers Basket. Me and my family are so in love!
            <cite
              ><img src="resources/img/ankit.png" alt="Ankit" />Ankit
              Nakhale</cite
            >
          </blockquote>
        </div>

        <div class="col span-1-of-3">
          <blockquote>
            I was looking for a quick and easy food delivery service in Mumbai.
            I tried a lot of them and ended up with Farmers Basket. Best food
            delivery service in the Mumbai. Keep up the great work!
            <cite
              ><img src="resources/img/kushar.png" alt="Kushar" />Kushar
              Manna</cite
            >
          </blockquote>
        </div>
      </div>
    </section>

    <footer>
      <div class="row">
        <div class="col span-1-of-2">
          <ul class="footer-nav">
            <li><a href="products.php">Products</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="myaccount.php">My Account</a></li>
          </ul>
        </div>

        <div class="col span-1-of-2">
          <ul class="social-links">
            <li>
              <a href="#"><i class="icon ion-logo-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="icon ion-logo-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="icon ion-logo-googleplus"></i></a>
            </li>
            <li>
              <a href="#"><i class="icon ion-logo-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <p>Copyright &copy; 2021 by Farmer's Basket. All rights reserved.</p>
      </div>
      <div id="google_translate_element"></div>
    </footer>
    <?php 

session_start();

$user_id = $_SESSION['id'] ;
    $username = $_SESSION['username'] ;
 $user_email = $_SESSION['email'] ;
$user_contact = $_SESSION['contact'] ;
   $user_password = $_SESSION['password'] ;
   $user_address = $_SESSION['address'] ;
   if(isset($_SESSION['id'])){
    
   }else {
    
     header("Location: login.html");
   }
   
?>

    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement(
          { pageLanguage: "en" },
          "google_translate_element"
        );
      }
    </script>
    <script
      type="text/javascript"
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
    ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
  </body>
</html>
