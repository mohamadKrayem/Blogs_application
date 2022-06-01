<?php
include("includes/database.php");
session_start();
if (!isset($_SESSION['id'])) {
  header('location:index.php');
}

$id = $_SESSION['id'];

$query = mysqli_query($con, "SELECT * FROM users WHERE user_id ='$id'");
$row = mysqli_fetch_array($query);
$photo = $row['photo'];
$username = $row['user_name'];
