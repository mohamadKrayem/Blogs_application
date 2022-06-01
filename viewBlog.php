<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/blog.css">
  <title>Medium</title>
</head>

<body>
  <?php include "navbarForm.php" ?>

  <?php
  $row = $query = $blogID = null;

  if (isset($_GET['submit'])) {
    $blogID = $_GET['blog_id'];
    $query = mysqli_query($con, "SELECT * from blogs WHERE blog_id='$blogID'");
    $row = $query->fetch_assoc();
  }
  ?>

  <div class="blog_container">

    <div class="info">
      <div class="profile">
        <?php
        $auth_id = $row['user_id'];
        $auth_query = mysqli_query($con, "SELECT * from users WHERE user_id='$auth_id'");
        $auth_row = $auth_query->fetch_assoc();
        ?>
        <img src="<?php echo $auth_row['photo'] ?>" alt="" class="profile_pic">
        <h4>
          <?php echo $auth_row['user_name']; ?>
        </h4>
      </div>
      <h4>
        <?php echo $row['created']; ?>
      </h4>
    </div>

    <h1 class="blog_title"><?php echo $row['title'] ?></h1>

    <p class="blog_body"><?php echo $row['body'] ?></p>


  </div>

</body>

</html>