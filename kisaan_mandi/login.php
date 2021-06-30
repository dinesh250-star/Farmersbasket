<?php include "connection.php"; ?>
<?php include "login.html"; ?>
<?php 
ob_start();
error_reporting(0);
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
    $email=mysqli_real_escape_string($connection,$email);
    $password=mysqli_real_escape_string($connection,$password);
     
    
    $query="SELECT * FROM users WHERE email = '{$email}' and password = '{$password}' ";
    $login_query=mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($login_query)){
        
         $db_user_id = $row['id'];
         $db_username = $row['username'];
         $db_user_email = $row['email']; 
    $db_user_password = $row['password'];
    $db_user_contact = $row['contact'];
    $db_user_address = $row['address'];
    }
            if($db_user_email == $email && $db_user_password == $password){
            //    ob_start();
                session_start();
                 $_SESSION['id'] = $db_user_id;
                $_SESSION['username'] = $db_username;
             $_SESSION['email'] = $db_user_email;
            $_SESSION['contact'] = $db_user_contact;
               $_SESSION['password'] = $db_user_password;
               $_SESSION['address'] = $db_user_address;
                header("Location: index.php");
                
            }
    
    elseif($email == "admin@gmail.com" && $password == "admin123"){
        session_start();
        $_SESSION['admin'] = "dinesh";
        header("Location: admin.php
        ");
         

    }elseif($db_user_email !== $email || $db_user_password !== $password){
                echo"<script>alert('Invalid email or password')</script>";
            }else{
        die();
    }

    
}
?>
