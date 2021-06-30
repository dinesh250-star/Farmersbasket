<?php 
ob_start();
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">


    <link rel="stylesheet" type="text/css" href="resources/css/products.css">

    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://realfavicongenerator.net/blog/wp-content/uploads/2015/10/demo_favicon.png">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    <title>Products</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

    <!-- HEADER -->
    <header>

        <nav>
            <div class="row">
                <a href="index.html"><img src="resources/img/logo.jpg" alt="logo" class="logo"></a>
                <ul class="main-nav js--main-nav">
                <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="forum.php">Forum</a></li>
         
            <li><a href="myaccount.php">My Account</a></li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="icon ion-ios-menu"></i></a>
            </div>
        </nav>

    </header>

    <!-- -----------------Catalogue--------------------- -->
    <div class="row">
        <div class="col-6 form-group catalogue">
            <label for="selectCategory">Product Category</label>
            <form action="" method="post">
                <select name="category" id="selectCategory" class="dropselect" required>
                    <option value="">--Please choose an option--</option>
                    <option value="grains">Grains</option>
                    <option value="fruits">Fruits</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="dairyproducts">Dairy Products</option>
                    <option value="nutsalmonds">Nuts & Almonds</option>
                </select>
                <label for="submit"></label>
                    <input class="btn btn-primary" type="submit" name="submit1" value="Search">


            </form>
        </div>

        <div class="col-6 form-group catalogue">
            <label for="selectCategory">Show</label>
            <form action="" method="post">
                <select name="contenttoshow" id="contenttoshow" class="dropselect1" required>
                    <option value="">--Please choose an option--</option>
                    <option value="myproducts">My Products</option>
                    <option value="allproducts">All Products</option>

                </select>
                <label for="submit"></label>
                    <input class="btn btn-primary" type="submit" name="submit2" value="Search">

            </form>
        </div>
    </div>

<div class="shell">
        <div class="container">
        <div class="row">
    <?php 



$user_id = $_SESSION['id'] ;
    $username = $_SESSION['username'] ;
 $user_email = $_SESSION['email'] ;
$user_contact = $_SESSION['contact'] ;
   $user_password = $_SESSION['password'] ;
   $user_address = $_SESSION['address'] ;
   if(isset($_SESSION['id'])){
   


 
    if(isset($_POST['submit1'])){
        $search = $_POST['category'];
        $query = "SELECT * FROM products WHERE product_status = 'approved' AND seller_id != $user_id AND product_category LIKE '%$search%' ";
        $search_query = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($search_query)){
            $product_category = $row['product_category']; 
            $product_name = $row['product_name']; 
            $product_units = $row['product_units'];
            $product_price = $row['product_price'];
            $product_location = $row['product_location'];
            $product_image = $row['product_image'];
            $seller_id = $row['seller_id']; 
            ?>
              
           

            <div class="col-md-3">
            <div class="wsk-cp-product">
                <div class="wsk-cp-img">
                    <img src="ima/<?php echo $product_category;?>.jpg" alt="Product" class="img-responsive" />
                </div>
                <div class="wsk-cp-text">
                    <div class="category">
                        <span><?php echo $product_category;?></span>
                    </div>
                    <div class="title-product">
                        <h1><?php echo $product_name;?></h1>
                    </div>
                    <!-- <div class="price-product">
                        <h3>Price</h3>
                    </div> -->
                    <div class="quantity-product">
                        <h3><span>Quantity:</span><?php echo $product_units;?></h3>
                    </div>
                    <div class="location-product">
                        <h3><span>Location:</span><?php echo $product_location;?></h3>
                    </div>

                    <div class="card-footer">
                        <!-- modal button starts-->
                       
                        <!--modal button ends  -->


                        <div class="dinya"><span class="price"><?php echo $product_price;?> &#x20B9</span>
                        </div>
                        <!-- <div class="wrap" style="display: inline-block;margin-left: 50px;margin-top: 25px;">
                            <button type="button" class="btn btn-primary text-right" data-toggle="modal"
                                data-target=".bs-example-modal-new">
                                Buy Now
                            </button>
                        </div> -->
                        <?php
                        echo"<div class='wrap' style='display: inline-block;margin-left: 50px;margin-top: 25px';>
                        <a class= '' href='sellerinfo.php?seller_id=$seller_id'>
                        <button class='btn btn-success'>Buy Now</button>
                        </a></div>";
     ?>   
                    </div>
                </div>
            </div>
        </div>

            
 <?php       }
    }



   }else {
    
     header("Location: login.html");
   }
   
?>
        </div>
        </div>
        </div>
    <!-- -----------------------showcase--------------------------------- -->
    <div class="shell">
        <div class="container">
            <div class="row">


                <!-- market product -->
          <?php     
          
          
          
          if(isset($_POST['submit2'])){
        $contenttoshow = $_POST['contenttoshow'];
       if($contenttoshow == "allproducts"){
        $query = "SELECT * FROM products WHERE product_status = 'approved' AND seller_id != $user_id";
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)){
            $product_category = $row['product_category']; 
            $product_name = $row['product_name']; 
            $product_units = $row['product_units'];
            $product_price = $row['product_price'];
            $product_location = $row['product_location'];
            $product_image = $row['product_image'];
            $seller_id = $row['seller_id'];
            ?>
            <div class="col-md-3">
            <div class="wsk-cp-product">
                <div class="wsk-cp-img">
                    <img src="ima/<?php echo $product_category;?>.jpg" alt="Product" class="img-responsive" />
                </div>
                <div class="wsk-cp-text">
                    <div class="category">
                        <span><?php echo $product_category;?></span>
                    </div>
                    <div class="title-product">
                        <h1><?php echo $product_name;?></h1>
                    </div>
                    <!-- <div class="price-product">
                        <h3>Price</h3>
                    </div> -->
                    <div class="quantity-product">
                        <h3><span>Quantity:</span><?php echo $product_units;?></h3>
                    </div>
                    <div class="location-product">
                        <h3><span>Location:</span><?php echo $product_location;?></h3>
                    </div>

                    <div class="card-footer">
                        <!-- modal button starts-->
                       
                        <!--modal button ends  -->


                        <div class="dinya"><span class="price"><?php echo $product_price;?> &#x20B9</span>
                        </div>
                        <!-- <div class="wrap" style="display: inline-block;margin-left: 50px;margin-top: 25px;">
                            <button type="button" class="btn btn-primary text-right" data-toggle="modal"
                                data-target=".bs-example-modal-new">
                                Buy Now
                            </button>
                        </div> -->
                        <?php
                        echo"<div class='wrap' style='display: inline-block;margin-left: 50px;margin-top: 25px';>
                        <a class= '' href='sellerinfo.php?seller_id=$seller_id'>
                        <button class='btn btn-success'>Buy Now</button>
                        </a></div>";
     ?>   
                    </div>
                </div>
            </div>
        </div>
            
    <?php    }
       }else if($contenttoshow == "myproducts"){ 
        $query = "SELECT * FROM products WHERE seller_id = $user_id ";
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)){
            $product_category = $row['product_category']; 
            $product_name = $row['product_name']; 
            $product_units = $row['product_units'];
            $product_price = $row['product_price'];
            $product_location = $row['product_location'];
            $product_image = $row['product_image'];
            $product_status = $row['product_status'];
            $product_id = $row['product_id'];
        ?>
        <!-- my product -->
        <div class="col-md-3">
            <div class="wsk-cp-product">
                <div class="wsk-cp-img">
                    <img src="ima/<?php echo $product_category;?>.jpg" alt="Product" class="img-responsive" />
                </div>
                <div class="wsk-cp-text">
                    <div class="category">
                        <span><?php echo $product_category;?></span>
                    </div>
                    <div class="title-product">
                        <h1><?php echo $product_name;?></h1>
                    </div>
                    <!-- <div class="price-product">
                        <h3>Price</h3>
                    </div> -->
                    <div class="quantity-product">
                        <h3><span>Quantity:</span><?php echo $product_units;?></h3>
                    </div>
                    <div class="location-product">
                        <h3><span>Location:</span><?php echo $product_location;?></h3>
                    </div>

                    <div class="card-footer">
                        
                        <div class="dinya"><span class="price"><?php echo $product_price;?>    &#x20B9</span>
                        </div>
                    <br>
                        <div>Status : <?php echo $product_status;?></div>
                        <div class="wcf-right">
<?php
                        echo"<a class= 'buy-btn' href='products.php?delete=$product_id'>
                        <i class='fa fa-window-close' aria-hidden='true'></i>
                        </a>";
     ?>                           
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    <?php }   }else {
           echo"<h1>No Products !</h1>";
       }
    }?>
               
<?php
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $query = "DELETE FROM products WHERE product_id = $delete_id";
    $result4 = mysqli_query($connection,$query); 
    header('Location: index.php');
}

?>





            </div>
            <!--row div ends -->





        </div> <!-- container end div -->
    </div> <!-- shell end div -->




    <!-- -----------------------MODAL CONTENT------------------------------- -->


    <div class="modal fade bs-example-modal-new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">

        <div class="modal-dialog">

            <!-- Modal Content: begins -->
            <div class="modal-content">
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="body-message">
                        <h4>Product Info</h4>
                       
                        <p>show  or etcetc</p>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
            <!-- Modal Content: ends -->

        </div>

    </div>

<!-- seller info -->

    <!-- footer -->
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
                    <li><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                    <li><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-logo-googleplus"></i></a></li>
                    <li><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <p style="margin-right: -15px;
                  margin-left: -15px;
                  flex-wrap: wrap;">
            <center>Copyright &copy; 2021 by Farmer's Basket. All rights reserved.</center>
        </p>
        <div id="google_translate_element"></div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="resources/js/product.js"></script>


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: "en" },
                "google_translate_element"
            );
        }
    </script>
    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>

</html>