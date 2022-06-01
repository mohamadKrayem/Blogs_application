<?php
include("session.php");

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $body = $_POST['body'];
  $user_id = $_SESSION['id'];

  echo $title;
  echo $body;
  echo $user_id;

  $sql = " INSERT INTO blogs (title, body, user_id) VALUES('$title', '$body', '$user_id') ";
  $update = mysqli_query($con, $sql);
  header("location:home.php");
}
