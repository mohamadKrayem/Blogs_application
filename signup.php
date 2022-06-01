<?php include('session.php'); ?>

<?php
include('includes/database.php');

if (isset($_POST['submit'])) {
  $user_name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
  } else {

    $size = $_FILES["image"]["size"];
    $error = $_FILES["image"]["error"];

    if ($error > 0) {
      die("Error uploading file! Code $error.");
    } else {
      if ($size > 10000000) {
        die("Format is not allowed or file size is too big!");
      } else {

        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
        $location = "upload/" . $_FILES["image"]["name"];
        $user = $_SESSION['id'];

        $update = mysqli_query($con, " INSERT INTO users (email, password,	photo, user_name) VALUES ('$email', '$password', '$location', '$user_name') ");

        header('location:home.php');
      }
    }
  }
}
