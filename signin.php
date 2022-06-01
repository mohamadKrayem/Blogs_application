<?php
include("includes/database.php");

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' and password='$password'");
  $row = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);
  if ($count == 0) {
    echo "please check your username and password!";
  } else if ($count > 0) {
    session_start();
    $_SESSION['id'] = $row['user_id'];
    header("location:home.php");
  }
}
