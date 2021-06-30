<?php include "connection.php"; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="registration.css">





</head>

<body>
    <nav class="navbar e" style="color: black;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="homepage.html" class="navbar-brand py-0">Farmer's Basket</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right py-0">
                    <li class="signup "><a href="login.html"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                  
                </ul>
            </div>
        </div>
    </nav>

    <div class="container fd">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Signup</h4>
            </div>
        <form action="" method="POST">
            <div class="panel-body">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name(min 2 characters)" name="namee">
                </div>

                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email(min 5 characters)" name="emaill">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" placeholder="Password(min 5 characters)" name="passwordd">
                </div>

                <div class="form-group">
                    <input class="form-control" type="number" placeholder="Contact(10 digits)" name="contactt">
                </div>


                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Address(min 10 characters)" name="addresss">
                </div>

                <center><input type="submit" value="Submit" name="submit" class="btn btn-primary"></center>


            </div>
        </form>            
        </div>
    </div>
<?php 
if(!$connection){
    echo"something went wrong";
}else {
if(isset($_POST['submit'])){
 $name = mysqli_real_escape_string($connection,$_POST['namee']);
 $email = mysqli_real_escape_string($connection,$_POST['emaill']);
 $password = mysqli_real_escape_string($connection,$_POST['passwordd']);
 $contact = $_POST['contactt'];
 $address  = mysqli_real_escape_string($connection,$_POST['addresss']);
 $contacttt = strlen((string)$contact);
 $nameee = strlen($name);
 $emailll = strlen($email);
 $passworddd = strlen($password);
 $addresss = strlen($address);
 if($contacttt ==10 && $nameee > 2 && $emailll > 5 && $passworddd > 5 && $addresss > 10){
 $query2="SELECT * FROM users WHERE contact='$contact' or email='$email'";
$result=mysqli_query($connection,$query2);
if(mysqli_num_rows($result)>=1){
    echo"<script>alert('Use unique fields')</script>";
   
}else{
 
 
    $query ="INSERT INTO users(username,email,password,contact,address)";
 $query.="VALUES('$name','$email','$password',$contact,'$address')";
 $insert_query = mysqli_query($connection,$query);
 
 echo"<script>alert('Registration Successful,Now go to the login page')</script>";
 
 }
}
 else{
     echo"<script>alert('Input field error')</script>";
 }
}

}


?>

  
        
        <div class="paragraph dl">
            <h3>“The farmer is the only man in our economy who buys <br>everything at retail, 
                sells everything at wholesale, and <br>pays the freight both ways.”</h3><cite><h3 class="df"> – John F. Kennedy</h3></cite>
                <div id="google_translate_element"></div>
            </div>
        
        </body>
    <footer >
    
        <div class="container">
        
            <center>Copyright © Farmer Cart. All Rights
                Reserved” and “Contact Us: +917378720777</center>
                
        </div>
       
    </div>
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


</html>