<!DOCTYPE html>
<html style="overflow: visible" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
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

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
    />

    <link rel="stylesheet" type="text/css" href="resources/css/forum.css" />
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

    <title>Forum</title>
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

    <div class="faq-page">
      <section class="faq">
        <ul class="categories">
          <div class="verticalLine"></div>
          <li><a class="selected" href="#basics">Basics</a></li>
          <li><a href="#mobile">Mobile</a></li>
          <li><a href="#account">Account</a></li>
          <li><a href="#payments">Payments</a></li>
          <li><a href="#privacy">Privacy</a></li>
          <li><a href="#delivery">Delivery</a></li>
        </ul>
        <!-- categories -->

        <div class="faq-items">
          <ul id="basics" class="faq-group">
            <li class="faq-title">
              <div class="iconh2div">
                <div class="icondiv">
                  <img
                    src="resources/img/sell.jpg"
                    border="0"
                    alt="icon Basics"
                    height="70"
                    width="70"
                  />
                </div>

                <div class="h2div">
                  <h2>Basics</h2>
                </div>
              </div>
              <!--           ^^^ side by side -->
            </li>
            <li>
              <a class="trigger" href="#0">What is Supahands?</a>
              <div class="faq-content">
                <p>
                  Supahands is a business outsourcing platform powered by a team
                  of SupaAgents. Supahands was built to help entrepreneurs and
                  companies scale faster by taking care of their tedious and
                  repetitive business tasks and projects.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">How do I sign up?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Quasi cupiditate et laudantium esse adipisci consequatur modi
                  possimus accusantium vero atque excepturi nobis in doloremque
                  repudiandae soluta non minus dolore voluptatem enim reiciendis
                  officia voluptates, fuga ullam? Voluptas reiciendis cumque
                  molestiae unde numquam similique quas doloremque non,
                  perferendis doloribus necessitatibus itaque dolorem quam
                  officia atque perspiciatis dolore laudantium dolor voluptatem
                  eligendi? Aliquam nulla unde voluptatum molestiae, eos fugit
                  ullam, consequuntur, saepe voluptas quaerat deleniti.
                  Repellendus magni sint temporibus, accusantium rem commodi?
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">Can I remove a post?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">How do reviews work?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>
          </ul>
          <!-- faq-group -->

          <ul id="mobile" class="faq-group">
            <li class="faq-title">
              <h2>Mobile</h2>
            </li>
            <li>
              <a class="trigger" href="#0">How does syncing work?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Impedit quidem delectus rerum eligendi mollitia, repudiandae
                  quae beatae. Et repellat quam atque corrupti iusto architecto
                  impedit explicabo repudiandae qui similique aut iure ipsum
                  quis inventore nulla error aliquid alias quia dolorem dolore,
                  odio excepturi veniam odit veritatis. Quo iure magnam, et cum.
                  Laudantium, eaque non? Tempore nihil corporis cumque dolor
                  ipsum accusamus sapiente aliquid quis ea assumenda deserunt
                  praesentium voluptatibus, accusantium a mollitia
                  necessitatibus nostrum voluptatem numquam modi ab, sint rem.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >How do I upload files from my phone or tablet?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi
                  tempore, placeat quisquam rerum! Eligendi fugit dolorum
                  tenetur modi fuga nisi rerum, autem officiis quaerat quos.
                  Magni quia, quo quibusdam odio. Error magni aperiam amet
                  architecto adipisci aspernatur! Officia, quaerat magni
                  architecto nostrum magnam fuga nihil, ipsum laboriosam
                  similique voluptatibus facilis nobis? Eius non asperiores,
                  nesciunt suscipit veniam blanditiis veritatis provident
                  possimus iusto voluptas, eveniet architecto quidem quos
                  molestias, aperiam eum reprehenderit dolores ad deserunt eos
                  amet. Vero molestiae commodi unde dolor dicta maxime alias,
                  velit, nesciunt cum dolorem, ipsam soluta sint suscipit
                  maiores mollitia assumenda ducimus aperiam neque enim! Quas
                  culpa dolorum ipsam? Ipsum voluptatibus numquam natus?
                  Eligendi explicabo eos, perferendis voluptatibus hic sed ipsam
                  rerum maiores officia! Beatae, molestias!
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >How do I link to a file or folder?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>
          </ul>
          <!-- faq-group -->

          <ul id="account" class="faq-group">
            <li class="faq-title">
              <h2>Account</h2>
            </li>
            <li>
              <a class="trigger" href="#0">How do I change my password?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Perferendis earum autem consectetur labore eius tenetur esse,
                  in temporibus sequi cum voluptatem vitae repellat nostrum odio
                  perspiciatis dolores recusandae necessitatibus, unde, deserunt
                  voluptas possimus veniam magni soluta deleniti! Architecto,
                  quidem, totam. Fugit minus odit unde ea cupiditate ab aperiam
                  sed dolore facere nihil laboriosam dolorum repellat deleniti
                  aliquam fugiat laudantium delectus sint iure odio,
                  necessitatibus rem quisquam! Ipsum praesentium quam nisi sint,
                  impedit sapiente facilis laudantium mollitia quae fugiat
                  similique. Dolor maiores aliquid incidunt commodi doloremque
                  rem! Quaerat, debitis voluptatem vero qui enim, sunt
                  reiciendis tempore inventore maxime quasi fugiat accusamus
                  beatae modi voluptates iste officia esse soluta tempora labore
                  quisquam fuga, cum. Sint nemo iste nulla accusamus quam qui
                  quos, vero, minus id. Eius mollitia consequatur fugit nam
                  consequuntur nesciunt illo id quis reprehenderit obcaecati
                  voluptates corrupti, minus! Possimus, perspiciatis!
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">How do I delete my account?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo
                  tempore soluta, minus magnam non blanditiis dolore, in nam
                  voluptas nobis minima deserunt deleniti id animi amet,
                  suscipit consequuntur corporis nihil laborum facere
                  temporibus. Qui inventore, doloribus facilis, provident soluta
                  voluptas excepturi perspiciatis fugiat odit vero! Optio
                  assumenda animi at! Assumenda doloremque nemo est sequi eaque,
                  ipsum id, labore rem nisi, amet similique vel autem dolore
                  totam facilis deserunt. Mollitia non ut libero unde accusamus
                  praesentium sint maiores, illo, nemo aliquid?
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >How do I change my account settings?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >I forgot my password. How do I reset it?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Ipsum at aspernatur iure facere ab a corporis mollitia
                  molestiae quod omnis minima, est labore quidem nobis
                  accusantium ad totam sunt doloremque laudantium impedit
                  similique iste quasi cum! Libero fugit at praesentium vero.
                  Maiores non consequuntur rerum, nemo a qui repellat quibusdam
                  architecto voluptatem? Sequi, possimus, cupiditate autem
                  soluta ipsa rerum officiis cum libero delectus explicabo
                  facilis, odit ullam aperiam reprehenderit! Vero ad non harum
                  veritatis tempore beatae possimus, ex odio quo.
                </p>
              </div>
              <!-- faq-content -->
            </li>
          </ul>
          <!-- faq-group -->

          <ul id="payments" class="faq-group">
            <li class="faq-title">
              <h2>Payments</h2>
            </li>
            <li>
              <a class="trigger" href="#0"
                >Can I have an invoice for my subscription?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Impedit quidem delectus rerum eligendi mollitia, repudiandae
                  quae beatae. Et repellat quam atque corrupti iusto architecto
                  impedit explicabo repudiandae qui similique aut iure ipsum
                  quis inventore nulla error aliquid alias quia dolorem dolore,
                  odio excepturi veniam odit veritatis. Quo iure magnam, et cum.
                  Laudantium, eaque non? Tempore nihil corporis cumque dolor
                  ipsum accusamus sapiente aliquid quis ea assumenda deserunt
                  praesentium voluptatibus, accusantium a mollitia
                  necessitatibus nostrum voluptatem numquam modi ab, sint rem.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >Why did my credit card or PayPal payment fail?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Tenetur accusantium dolorem vel, ad, nostrum natus eos, nemo
                  placeat quos nisi architecto rem dolorum amet consectetur
                  molestiae reprehenderit cum harum commodi beatae
                  necessitatibus. Mollitia a nostrum enim earum minima doloribus
                  illum autem, provident vero et, aspernatur quae sunt illo
                  dolorem. Corporis blanditiis, unde, neque, adipisci debitis
                  quas ullam accusantium repudiandae eum nostrum quis! Velit
                  esse harum qui, modi ratione debitis alias laboriosam minus
                  eaque, quod, itaque labore illo totam aut quia fuga nemo.
                  Perferendis ipsa laborum atque assumenda tempore aspernatur a
                  eos harum non id commodi excepturi quaerat ullam, explicabo,
                  incidunt ipsam, accusantium quo magni ut! Ratione, magnam.
                  Delectus nesciunt impedit praesentium sed, aliquam architecto
                  dolores quae, distinctio consectetur obcaecati esse,
                  consequuntur vel sit quis blanditiis possimus dolorum. Eaque
                  architecto doloremque aliquid quae cumque, vitae perferendis
                  enim, iure fugiat, soluta aut!
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >Why does my bank statement show multiple charges for one
                upgrade?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>
          </ul>
          <!-- faq-group -->

          <ul id="privacy" class="faq-group">
            <li class="faq-title">
              <h2>Privacy</h2>
            </li>
            <li>
              <a class="trigger" href="#0">Can I specify my own private key?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Impedit quidem delectus rerum eligendi mollitia, repudiandae
                  quae beatae. Et repellat quam atque corrupti iusto architecto
                  impedit explicabo repudiandae qui similique aut iure ipsum
                  quis inventore nulla error aliquid alias quia dolorem dolore,
                  odio excepturi veniam odit veritatis. Quo iure magnam, et cum.
                  Laudantium, eaque non? Tempore nihil corporis cumque dolor
                  ipsum accusamus sapiente aliquid quis ea assumenda deserunt
                  praesentium voluptatibus, accusantium a mollitia
                  necessitatibus nostrum voluptatem numquam modi ab, sint rem.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >My files are missing! How do I get them back?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">How can I access my account data?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Possimus magni vero deserunt enim et quia in aliquam, rem
                  tempore voluptas illo nisi veritatis quas quod placeat ipsa!
                  Error qui harum accusamus incidunt at libero ipsum, suscipit
                  dolorum esse explicabo in eius voluptates quidem voluptatem
                  inventore amet eaque deserunt veniam dignissimos excepturi?
                  Dolore, quo amet nostrum autem nemo. Sit nam assumenda,
                  corporis ea sunt distinctio nostrum doloribus alias, beatae
                  nesciunt dolore saepe consequuntur minima eveniet porro dolor
                  officiis maiores ab obcaecati officia enim aliquam. Itaque
                  fuga molestiae hic accusantium atque corporis quia id sequi
                  enim vero? Hic aperiam sint facilis aliquam quia, accusamus
                  tenetur earum totam enim est, error. Iusto, reiciendis
                  necessitatibus molestias. Voluptatibus eos explicabo repellat
                  nesciunt nam vero minima.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >How can I control if other search engines can link to my
                profile?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>
          </ul>
          <!-- faq-group -->

          <ul id="delivery" class="faq-group">
            <li class="faq-title">
              <h2>Delivery</h2>
            </li>
            <li>
              <a class="trigger" href="#0"
                >What should I do if my order hasn't been delivered yet?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Impedit quidem delectus rerum eligendi mollitia, repudiandae
                  quae beatae. Et repellat quam atque corrupti iusto architecto
                  impedit explicabo repudiandae qui similique aut iure ipsum
                  quis inventore nulla error aliquid alias quia dolorem dolore,
                  odio excepturi veniam odit veritatis. Quo iure magnam, et cum.
                  Laudantium, eaque non? Tempore nihil corporis cumque dolor
                  ipsum accusamus sapiente aliquid quis ea assumenda deserunt
                  praesentium voluptatibus, accusantium a mollitia
                  necessitatibus nostrum voluptatem numquam modi ab, sint rem.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >How can I find your international delivery information?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">Who takes care of shipping?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">How do returns or refunds work?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Impedit quidem delectus rerum eligendi mollitia, repudiandae
                  quae beatae. Et repellat quam atque corrupti iusto architecto
                  impedit explicabo repudiandae qui similique aut iure ipsum
                  quis inventore nulla error aliquid alias quia dolorem dolore,
                  odio excepturi veniam odit veritatis. Quo iure magnam, et cum.
                  Laudantium, eaque non? Tempore nihil corporis cumque dolor
                  ipsum accusamus sapiente aliquid quis ea assumenda deserunt
                  praesentium voluptatibus, accusantium a mollitia
                  necessitatibus nostrum voluptatem numquam modi ab, sint rem.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">How do I use shipping profiles?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >How does your UK Next Day Delivery service work?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0"
                >How does your Next Day Delivery service work?</a
              >
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">When will my order arrive?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>

            <li>
              <a class="trigger" href="#0">When will my order ship?</a>
              <div class="faq-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Blanditiis provident officiis, reprehenderit numquam.
                  Praesentium veritatis eos tenetur magni debitis inventore
                  fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                  distinctio velit.
                </p>
              </div>
              <!-- faq-content -->
            </li>
          </ul>
          <!-- faq-group -->
        </div>
        <!-- faq-items -->
        <a href="#0" class="cd-close-panel">Close</a>
      </section>
      <!-- faq -->
    </div>

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

    <script src="resources/js/forum.js"></script>
  </body>
</html>
