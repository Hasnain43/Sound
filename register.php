<?php
  // Connect to the MySQL database
  $conn = mysqli_connect('localhost', 'root', '', 'sound');

  // Check if the connection was successful
  if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
  }

  // Get the user's name, email, and password from the form submission
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $adress = mysqli_real_escape_string($conn, $_POST['adress']); 
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Hash the password using PHP's password_hash() function
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Insert the user's information into the database
  $sql = "INSERT INTO users (name, email, phone, adress, password) VALUES ('$name', '$email','$phone', '$adress', '$hashed_password')";
  if (mysqli_query($conn, $sql)) {
    header('Location: welcome.php');
  } else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
?>
