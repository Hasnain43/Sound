<?php
  // Start a session
  session_start();

  // Connect to the MySQL database
  $conn = mysqli_connect('localhost', 'root', '', 'sound');

  // Check if the connection was successful
  if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
  }

  // Get the user's email and password from the form submission
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Query the database to see if the email and password match a record
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify(trim($password), $row['password'])) {
      // Login successful
      $_SESSION['user_id'] = $row['id'];
      header('Location: dashboard.php');
    } else {
      // Password incorrect
      echo 'Incorrect password';
    }
  } else {
    // Email not found
    echo 'Email not found';
  }

  // Close the database connection
  mysqli_close($conn);
?>
