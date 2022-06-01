<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/addBlog.css">
  <title>Medium</title>
</head>

<body>

  <?php include "navbarForm.php" ?>

  <h1 class="header">New Blog</h1>
  <form action="addBlog.php" class="form" method="POST">
    <input type="text" id="title" name="title" class="text" placeholder="Title">
    <textarea id="body" name="body" placeholder="Write your blog ..."></textarea>
    <input type="submit" id="submit" name="submit" value="Post blog">
  </form>
</body>

</html>