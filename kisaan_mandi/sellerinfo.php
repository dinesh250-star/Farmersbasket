<?php 
ob_start();
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
 
   

        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    
    <link rel="shortcut icon" type="image/x-icon"
    href="https://realfavicongenerator.net/blog/wp-content/uploads/2015/10/demo_favicon.png">


    <style>
        .main-nav{ 
    float:right;
    list-style: none;
    margin-top: 45px;
    /* margin-bottom: 70px;*/
} 

.main-nav li{
    display: inline-block;
    margin-left: 40px;
    float: left;
}

.main-nav li a:link,
.main-nav li a:visited{
    text-decoration: none;
    color: rgb(5, 3, 3);
    text-transform: uppercase;
    font-size: 90%;
    border-bottom: 2px solid transparent;
    padding: 8px 0px;
    transition: margin-bottom 0.2s;
}

.main-nav li a:hover,
.main-nav li a:active{
    border-bottom: 2px solid #e67e22;
}





/----------------------------------- Footer -----------------------------------/

footer{
  background-color:#c79a7e;
  padding: 50px;
  font-size: 80%;
}

.footer-nav{
  list-style: none;
  float: left;
}

.social-links{
  list-style: none;
  float: right;
}

.footer-nav li,
.social-links li{
  display: inline-block;
  margin-right: 20px;
}

.footer-nav li:last-child,
.social-links li:last-child{
  margin-right: 0;
}

.footer-nav li a:link,
.footer-nav li a:visited,
.social-links li a:link,
.social-links li a:visited{
  text-decoration: none;
  border: 0;
  color: rgb(51, 51, 51);
  transition: color 0.2s;
}

.footer-nav li a:hover,
.footer-nav li a:active{
  color: rgb(255, 255, 255);
  
}

.social-links li a:link,
.social-links li a:visited{
  font-size: 160%;
}

.ion-logo-facebook,
.ion-logo-twitter,
.ion-logo-googleplus,
.ion-logo-instagram{
  transition: color 0.2s;
}


.ion-logo-facebook:hover{
  color: #ff0000;
}

.ion-logo-twitter:hover{
  color: #ff0000;
}

.ion-logo-googleplus:hover{
  color: #ff0000;
}

.ion-logo-instagram:hover{
  color: #ff0000;
}

footer p{
  color: rgb(0, 0, 0);
  text-align: center;
  margin-top: 20px;
}
/* -------------------------------------Gtranslate-------------------------------- */
#google_translate_element{
text-align: center;

}

 .catalogue{
  margin: auto;
  width: 50%;
 
  padding: 10px;
} 

.dropselect{
  display: inline-block;

}
.dfe { width: 500px; height: 100px; border: 1px solid #999999; padding: 5px; }

  </style>
</head>

<body>

    <nav class="header">
        <div class="row">
            <a href=""><img src="resources/img/logo.jpg" alt="logo" class="logo"></a>
            <ul class="main-nav js--main-nav">
                <li><a href="index.php">Home</a></li> 
                <li><a href="products.php">Products</a></li>
                <li><a href="sell.php">Sell</a></li>
                <li><a href="forum.php">Forum</a></li>
                <li><a href="myaccount.php">My Account</a></li>
            </ul>
           
        </div>
    </nav>

    <?php 



$user_id = $_SESSION['id'] ;
    $username = $_SESSION['username'] ;
 $user_email = $_SESSION['email'] ;
$user_contact = $_SESSION['contact'] ;
   $user_password = $_SESSION['password'] ;
   $user_address = $_SESSION['address'] ;
   if(isset($_SESSION['id'])){
    if(isset($_GET['seller_id'])){
        $seller_id = $_GET['seller_id'];
    $query = "SELECT * FROM users WHERE id = $seller_id";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        $username = $row['username'];
        $email = $row['email'];
        $contact = $row['contact'];
        $address = $row['address'];
    }
    
}




   }else {
    
     header("Location: login.html");
   }
   
?>


<hr>
<div class="container bootstrap snippet">
    
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://Google.com"></a>Farmersbasket.com</a></div>
          </div>
          
      
          
        </div><!--/col-3-->
    

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-6">
                              <label for="first_name"><h4>User</h4></label>
                              <input type="text"  name="first_name" id="first_name" placeholder="first name" value="<?php echo $username; ?>" title="enter your first name if any.">
                          </div>
                      </div>
                                                    
                      <div class="form-group">
                          <div class="col-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text"  name="mobile" id="mobile" placeholder="enter mobile number" value="<?php echo $contact; ?>" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email"  name="email" id="email" placeholder="you@email.com" value="<?php echo $email; ?>" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-6">
                              <label for="email"><h4>Address</h4></label>
                              <textarea rows="5" cols="80" id="TITLE" placeholder="<?php echo $address;?>">
</textarea>
                          </div>
                         

                      </div>
                      
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
            		
               	
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      </div>
                      </div>
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->



    <!-- FOOTER -->


  <!-- footer -->
  <footer>
    <div class="row">
       

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
</body>
</html>





                        
