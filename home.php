<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <title>Medium</title>
</head>

<body>
  <?php include "navbarForm.php" ?>


  <div class="blogs_container">
    <h1 class="header">Blogs</h1>
    <?php
    $query = mysqli_query($con, "SELECT * from blogs");
    while ($row = $query->fetch_assoc()) { ?>

      <form action="viewBlog.php" method="GET" enctype="multipart/form-data" class="blog">
        <h3><?php echo $row['title'] ?></h3>
        <input type="number" name="blog_id" value="<?php echo $row['blog_id'] ?>" hidden>
        <input type="submit" value="view" name="submit">
      </form>

    <?php }
    ?>
  </div>
</body>

</html>