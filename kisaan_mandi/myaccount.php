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

    <link rel="stylesheet" type="text/css" href="resources/css/myaccount.css" />
    <title>My Account</title>
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
      <!-- <div class="hero-text-box">
            <h1>Welcome to <br>Farmers Basket</h1>
            <a class="btn btn-full js--scroll-to-plans" href="sell.html">Join as Seller</a>
            <a class="btn btn-ghost js--scroll-to-features" href="products.html">Start Shopping</a>
        </div> -->
    </header>
    <?php 
ob_start();
session_start();

$user_id = $_SESSION['id'] ;
    $username = $_SESSION['username'] ;
 $user_email = $_SESSION['email'] ;
$user_contact = $_SESSION['contact'] ;
   $user_password = $_SESSION['password'] ;
   $user_address = $_SESSION['address'] ;
   if(isset($_SESSION['id'])){

   ?>
    <div class="main-content">
      <div class="container mt-7">
        <!-- Table -->
        <h2 class="mb-5">MY PROFILE</h2>
        <center>
          <div class="col-4" style="margin-bottom: 50px">
            <a
              href="logout.php"
              class="btn btn-sm btn-primary"
              style="color: black"
              >Log Out</a
            >
          </div>
        </center>
        <div class="row">
          <div class="col-xl-8 m-auto order-xl-1">
            <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">My account</h3>
                  </div>
                  <!-- <div class="col-4 text-right">
                    <a
                      href="#!"
                      class="btn btn-sm btn-primary"
                      style="color: black"
                      >SAVE</a
                    >
                  </div> -->
                </div>
              </div>
              <div class="card-body">
                <form>
                  <h6 class="heading-small text-muted mb-4">
                    User information
                  </h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username"
                            >Username</label
                          >
                          <input
                            type="text"
                            id="input-username"
                            class="form-control form-control-alternative"
                            placeholder="Username" value="<?php echo $username; ?>"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email"
                            >Email address</label
                          >
                          <input
                            type="email"
                            id="input-email"
                            class="form-control form-control-alternative"
                            placeholder="Farmer@example.com" value="<?php echo $user_email; ?>"
                          />
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">First
                                                    name</label>
                                                <input type="text" id="input-first-name"
                                                    class="form-control form-control-alternative"
                                                    placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-last-name">Last
                                                    name</label>
                                                <input type="text" id="input-last-name"
                                                    class="form-control form-control-alternative"
                                                    placeholder="Last name">
                                            </div>
                                        </div>
                                    </div> -->
                  </div>
                  <hr class="my-4" />
                  <!-- Address -->
                  <h6 class="heading-small text-muted mb-4">
                    Contact information
                  </h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-address"
                            >Address</label
                          >
                          <input
                            id="input-address"
                            class="form-control form-control-alternative"
                            placeholder="Home Address" value="<?php echo $user_address; ?>"
                            type="text"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-city"
                            >State</label
                          >
                          <input
                            type="text"
                            id="input-city"
                            class="form-control form-control-alternative"
                            placeholder="State" value="Maharashtra"
                          />
                        </div>
                      </div>
                      <!-- <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-country">Country</label>
                                                <input type="text" id="input-country"
                                                    class="form-control form-control-alternative" placeholder="Country"
                                                    value="INDIA">
                                            </div>
                                        </div> -->
                      <!-- <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-country"
                            >Postal code</label
                          >
                          <input
                            type="number"
                            id="input-postal-code"
                            class="form-control form-control-alternative"
                            placeholder="Postal code"
                          />
                        </div>
                      </div> -->
                    </div>
                  </div>
                  <hr class="my-4" />
                  <!-- Description -->
                  <!-- <h6 class="heading-small text-muted mb-4">About me</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group focused">
                                        <label>About Me</label>
                                        <textarea rows="4" class="form-control form-control-alternative"
                                            placeholder="A few words about you ..."></textarea>
                                    </div>
                                </div> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
}else {
    
  header("Location: login.html");
}

?>

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
      <p style="margin-right: -15px; margin-left: -15px; flex-wrap: wrap">
        <center>
          Copyright &copy; 2021 by Farmer's Basket. All rights reserved.
        </center>
      </p>
      <div id="google_translate_element"></div>
    </footer>

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
