<?php 
ob_start();
session_start();
include "connection.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->

    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">


    <link rel="stylesheet" type="text/css" href="resources/css/sell.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://realfavicongenerator.net/blog/wp-content/uploads/2015/10/demo_favicon.png">


    <title>Sell Here!</title>


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
        <!-- <div class="hero-text-box">
            <h1>Welcome to <br>Farmers Basket</h1>
            <a class="btn btn-full js--scroll-to-plans" href="sell.html">Join as Seller</a>
            <a class="btn btn-ghost js--scroll-to-features" href="products.html">Start Shopping</a>
        </div> -->
    </header>
    
    <div class="formcover">
        <h2 class="mb-5">Add a Sell Post</h2>
        <div class="card mx-auto" style="width: 40rem;">
        
                <img class="card-img-top card-ka-img" src="resources/img/sellpage.jpg" alt="Card image cap">
                <!-- <h5 style="color: black;display: inline;">Sample size of product image</h5> -->
                <form action="" method="post" enctype="multipart/form-data">   
                <div class="card-body">
                    <!-- <div class="form-group">
                        <label for="imgFileNumber">Product Image</label>
                        <input type="file" name="image" class="form-control-file" id="file" required>
                    </div> -->
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" name="p_name" class="form-control" id="productName" placeholder="Eg. Apple" required>
                    </div>

                    <div class="form-group">
                        <label for="selectCategory">Product Category</label>

                        <select name="category" id="selectCategory" class="dropselect" required>
                            <option value="">--Please choose an option--</option>
                            <option value="grains">Grains</option>
                            <option value="fruits">Fruits</option>
                            <option value="vegetables">Vegetables</option>
                            <option value="dairyproducts">Dairy Products</option>
                            <option value="nutsalmonds">Nuts & Almonds</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="selectLocation">Location</label>

                        <select name="location" id="selectLocation" class="dropselect" required>
                            <option value="">--Please choose an option--</option>
                            <option value="mumbai">Mumbai</option>
                            <option value="nagpur">Nagpur</option>
                            <option value="pune">Pune</option>
                            <option value="thane">Thane</option>
                            <option value="kolhapur">Kolhapur</option>
                            <option value="nashik">Nashik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="priceOfProduct">Price</label>
                        <input type="number" name="p_price" class="form-control" id="price" placeholder="Eg.300" required>
                    </div>

                    <div class="form-group">
                        <label for="amountOfProduct">Units</label>
                        <input type="text" name="p_amount" class="form-control" id="quantity"
                            placeholder="Amount of Product available to sell" required>
                    </div>




                    <div class="form-group">
                        <label for="message">Product Description</label>
                        <textarea class="form-control" name="p_description" id="message" rows="3"
                            placeholder="write something more about your product" required></textarea>
                    </div>
                    <label for="submit"></label>
                    <input class="btn btn-primary" type="submit" name="sell" value="Request to Sell">
                </div>
        </div>
    </div>
</form>
<?php 



$user_id = $_SESSION['id'] ;
    $username = $_SESSION['username'] ;
 $user_email = $_SESSION['email'] ;
$user_contact = $_SESSION['contact'] ;
   $user_password = $_SESSION['password'] ;
   $user_address = $_SESSION['address'] ;
   if(isset($_SESSION['id'])){
    if(isset($_POST['sell'])) {
        $user_id = $_SESSION['id'] ;
        $p_name      = $_POST['p_name'];
        $category         = $_POST['category'];
        $location     = $_POST['location'];
        $p_price       = $_POST['p_price'];

        // $product_image        = $_FILES['image']['name'];
        // $product_image_temp   = $_FILES['image']['tmp_name'];

        $p_amount       = $_POST['p_amount'];
        $p_description      = $_POST['p_description'];
        
        $p_name    = mysqli_real_escape_string($connection,$p_name);
        $category = mysqli_real_escape_string($connection,$category);
        $location = mysqli_real_escape_string($connection,$location);
        $p_price = mysqli_real_escape_string($connection,$p_price);
        // $product_image  = mysqli_real_escape_string($connection,$product_image);
        // $product_image_temp = mysqli_real_escape_string($connection,$product_image_temp);
        $p_amount = mysqli_real_escape_string($connection,$p_amount);
        $p_description = mysqli_real_escape_string($connection,$p_description);
        // $path = 'C:\xampp\htdocs\kisaan_mandi\ima\s';
        // $locationx = $path . $product_image;

    // move_uploaded_file($product_image_temp,$locationx);
    if($category == "grains"){
        $product_image = "grains.jpg";
    }else if($category == "fruits"){
$product_image = "fruits.jpg";
    }else if($category == "vegetables"){
        $product_image = "vegetables.jpg";
    }else if($category == "dairyproducts"){
        $product_image = "dairyproducts.jpg";
    }else{
        $product_image = "nutsalmonds.jpg";
    }
  $query ="INSERT INTO products(product_image,product_name,product_category,product_location,product_price,product_units,product_description,product_status,seller_id)";
         
  $query .="VALUES('$product_image','$p_name','$category','$location',$p_price,'$p_amount','$p_description','unapproved',$user_id)"; 
  
  $insert_products = mysqli_query($connection,$query);  
    if($insert_products){
        
        echo"<script>alert('Request made successfully!')</script>";
    }else{
        
        echo"<script>alert('Try again, something went wrong!')</script>";
    }
 


}
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
                    <li><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                    <li><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-logo-googleplus"></i></a></li>
                    <li><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>
                Copyright &copy; 2021 by Farmer's Basket. All rights reserved.
            </p>
        </div>
        <div id="google_translate_element"></div>
    </footer>


    <div id="google_translate_element"></div>
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>

</body>

</html>