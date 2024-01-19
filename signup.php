
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
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
  background-repeat: no-repeat;
  background-position-y: center;   

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
    height: 720px;
    width: 450px;
    background-color: rgba(0, 0, 0, 0.275);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 55%;
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
 background-color:rgb(51, 102, 255);
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
 color:black;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: white;
  
  text-align: center;
}
.social div:hover{

  background-color:rgb(51, 102, 255);
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
<?php require 'partials/nav.php' ?>
<form action="register.php" method="POST" >
<center>
  <h1>signup here</h1>
</center> 
<label>Name:</label>
  <input type="text" name="name" required>

  <label>Email:</label>
  <input type="email" name="email" required>
  <label>phone:</label>
  <input type="phone" name="phone" required>
  <label>adress:</label>
  <input type="adress" name="adress" required>

  <label>Password:</label>
  <input type="password" name="password" required>
<br>
  <button type="submit" class="button">Sign up</button>

  <div class="social">
          
	<div class="back"><a href="login.php">back</a></div>
       
    </div>

</form>
<br><br><br><br><br><br><br><br<br><br><br> <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br>  <br><br><br>
   <!-- demo gmail section -->
   <?php require 'partials/demog.php' ?>
  <!-- demo gmail end contact section -->
  
<!-- footer section -->
 <?php require 'partials/footer.php' ?>
   <!-- footer section -->

</body>
</html>
