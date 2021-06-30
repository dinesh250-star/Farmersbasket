<?php 
ob_start();
session_start();
include "connection.php";
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Admin.css" />
    <title>Admin</title>
  </head>

  <body>
    <section>
   
      <!--for demo wrap-->
      <h1>Admin Panel</h1>
      <h1><a href="logout.php">Logout</a></h1>
      <div class="tbl-header" style="padding-right: 6px">
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
              
              <th>User Name</th>
              <th>Category</th>
              <th>Product id</th>
              <th>Seller Id</th>
              <th>DELETE</th>
              <th>APPROVE</th>
              <th>Status</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content">
      <?php 
    if(isset($_SESSION['admin'])){
        $query = "SELECT * FROM users JOIN products ON users.id = products.seller_id WHERE product_status = 'unapproved' ";
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)){
          $seller_id = $row['seller_id'];
          $username = $row['username'];
          $category = $row['product_category'];
          $product_id = $row['product_id'];
        
          ?>
           <table cellpadding="0" cellspacing="0" border="0">
          <tbody>
            <tr>
            <?php
           
              echo"<td>$username</td>";
              echo"<td>$category</td>";
              echo"<td>$product_id</td>";
              echo"<td>$seller_id</td>";
              ?>
  
<?php
  echo"<td><button class='btn btn-danger'><a style ='text-decoration: none; color: white;'  href='admin.php?delete=$product_id'>Delete</a></button></td>";
              echo"<td><button class='btn btn-success'><a style ='text-decoration: none; color: white;'  href='admin.php?approve=$product_id'>Approve</a></button></td>";
     ?>         <td>unapproved</td>
            </tr>
          </tbody>
        </table>
        
          <?php

        }
        
        if(isset($_GET['approve'])){
          $approve_id = $_GET['approve'];
          $approve_id = mysqli_real_escape_string($connection,$approve_id);
          $query= "UPDATE products SET product_status = 'approved' WHERE product_id = $approve_id";
          $result = mysqli_query($connection,$query);
          header('Location: admin.php');
        }
        
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $query = "DELETE FROM products WHERE product_id = $delete_id";
    $result = mysqli_query($connection,$query);
    header('Location: admin.php');
}

        
    }else {
    
      header("Location: login.html");
    }
    
    ?>


       
      </div>
    </section>
  </body>
  <!-- follow me template -->

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
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        { pageLanguage: "en" },
        "google_translate_element"
      );
    }
  </script>
  <script>
    $("#year").text(new Date().getFullYear());
    // Configure Slider
  </script>
  <script
    type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
  ></script>
  <script src="js/index.js"></script>
</html>
