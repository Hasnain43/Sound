<?php
session_start(); // Start a new session

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If form is submitted
    $username = $_POST['admin_name'];
    $password = $_POST['admin_password'];
    
    // Connect to MySQL database
    $conn = mysqli_connect('localhost', 'root', '', 'sound');
    
    // Query the users table for a matching username and password
    $result = mysqli_query($conn, "SELECT * FROM admin_login WHERE admin_name='$username' AND admin_password='$password'");
    
    if (mysqli_num_rows($result) == 1) { // If match found
        $_SESSION['admin_name'] = $username; // Set session variable
        header('Location: admin_dashboard.php'); // Redirect to admin page
    } else {
        $error = "Invalid username or password"; // Set error message
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
  body{
      background-image:url(images/login1.jpg);
      background-size: cover;
     margin:0;
     padding:0;
    } 
  

.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background {
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}

form{
    height: 520px;
    width: 400px;
    background-color: rgba(0, 0, 0, 0.275);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 7px;
    font-size: 16px;
    font-weight: 500;
}

.adminlabel{
    
        display: block;
        margin-top: 20px;
        font-size: 16px;
        font-weight: 500;
    
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button {
    margin-top: 3px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    
}

.button:hover{
  background-color: #8c1a1a;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(139, 128, 74, 0.833);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(187, 14, 14, 0.773);
}
.social .rb{
  margin-left: 25px;
  width: 260px;
  padding: 20px;
  border-radius: 40px;
}
.social .lb{
  padding: 20px;
  border-radius: 40px;

}
a{
  text-decoration: none;
}

.back{
  padding: 20px;
  margin-left: 95px;
}





    </style>
</head>
<body>
      <!-- header section strats -->
      <?php require 'partials/nav.php' ?>
    <!-- end header section -->
<div class="background">
        
        </div>
        <form action="" method="post">
            <h3>admin login here</h3>
    
            <label class="adminlabel">Admin Name: </label>
            <input type="text" placeholder="Email or Phone" name="admin_name">
    
            <label class="adminlabel">Admin Password: </label>
            <input type="password" placeholder="Password"  name="admin_password">
    
            <br>
            <br>
            <input type="submit" name="login" value="login" class="button">
            <div class="social">
              <div class="lb"><a href="signup.php">Sign Up</div></a>
           <div class="rb"><a href="login.php">Log In as user </div></a>
            </div>
        </form>
          <br><br><br><br><br><br><br><br><br>  <br><br><br>  <br><br><br>    <br><br><br><br><br><br><br><br><br>  <br><br><br>  <br><br><br> 
       
          <!-- demo gmail section -->
  <?php require 'partials/demog.php' ?>
  <!-- demo gmail end contact section -->
     <!-- footer section -->
 <?php require 'partials/footer.php' ?>
   <!-- footer section -->
</body>
</html>