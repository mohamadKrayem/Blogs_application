<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/profile.css">
  <title>Medium</title>
</head>

<body>

  <?php include "navbarForm.php" ?>

  <div class="container">
    <img class="image" src="<?php echo $photo ?>" alt="" srcset="">
    <h2 class="name"><?php echo $username ?></h2>
  </div>
  <hr>
  <div class="blogs">
    <h2>Blogs</h2>

    <?php
    $query = mysqli_query($con, "select * from blogs where user_id ='$id'");
    while ($row = $query->fetch_assoc()) {
    ?>
      <form action="viewBlog.php" method="GET" enctype="multipart/form-data" class="blog">
        <h3><?php echo $row['title'] ?></h3>
        <input type="number" name="blog_id" value="<?php echo $row['blog_id'] ?>" hidden>
        <input type="submit" value="view" name="submit">
      </form>
    <?php } ?>
  </div>

</body>

</html>