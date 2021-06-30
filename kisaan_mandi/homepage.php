<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Homepage design with Bootstrap 4 and Animate css</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
    />
    <link href="sample.css" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-sm color__nav k">
      <div class="container">
        <a href="login.html" class="navbar-brand">Farmer's Basket</a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="login.html" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="registration.php" class="nav-link">Registration</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- SHOWCASE SLIDER -->
    <section id="showcase">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item carousel-image-1 active">
            <div class="container">
              <div
                class="carousel-caption d-none d-sm-block text-right mb-5"
              ></div>
            </div>
          </div>

          <div class="carousel-item carousel-image-2">
            <div class="container">
              <div class="carousel-caption d-none d-sm-block mb-5"></div>
            </div>
          </div>

          <div class="carousel-item carousel-image-3">
            <div class="container">
              <div
                class="carousel-caption d-none d-sm-block text-right mb-5"
              ></div>
            </div>
          </div>
        </div>

        <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
          <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#myCarousel" data-slide="next" class="carousel-control-next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </section>
    <!--HOME ICON SECTION  -->
    <section id="home-icons" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4 text-center">
            <i class="fas fa-cart-plus fa-3x mb-2"></i>
            <h3>BUY</h3>
            <p>Buy at low prices.</p>
          </div>
          <div class="col-md-4 mb-4 text-center">
            <i class="fas fa-money-bill-wave fa-3x mb-2"></i>
            <h3>SELL</h3>
            <p>Sell at high prices.</p>
          </div>
          <div class="col-md-4 mb-4 text-center">
            <i class="fas fa-money-check-alt fa-3x mb-2"></i>
            <h3>MAKE MONEY</h3>
            <p>Buy and sell at commission free prices</p>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>What We Do</h1>
            <p class="lead">
              KisanMandi.com is part of KisanMandi Online Agri Market PRIVATE
              LIMITED.<br />
              Kisanmandi.com – An online AGRI-MART and it will truly fulfills
              our dreams of "Sabko Sahi Mol ".<br />
              KisanMandi.com is 100% free for Seller as well as Consumer .<br />
              Now farmers will be able to sell their products directly to end
              consumer i.e. Institutions , Big Companies any other groups.
              Buyers can save up a lot of money by purchasing directly from the
              website without sharing their profits
            </p>
          </div>
          <div class="col-md-6">
            <img
              src="kisansquarelogo.png"
              alt=""
              class="img-fluid rounded-circle d-none d-md-block about-img"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- FOOTER -->
    <footer id="main-footer" class="text-center p-4">
      <div class="container">
        <div class="row">
          <div class="col">
            <p>Copyright &copy; <span id="year"></span> Farmer's Basket</p>
          </div>
        </div>
      </div>
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

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script>
      $("#year").text(new Date().getFullYear());
      // Configure Slider
      $(".carousel").carousel({
        interval: 3000,
        pause: "hover",
      });
    </script>
  </body>
</html>
