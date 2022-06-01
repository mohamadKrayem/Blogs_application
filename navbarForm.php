<?php include "session.php" ?>

<div class="profile_container">
  <a href="profileForm.php" target="_blank" rel="noopener noreferrer" class="profile">
    <img src=" <?php echo "$photo" ?>" alt="Profile picture" srcset="" class="profile_pic">
    <h2 class="user_name"><?php echo $username ?></h2>
  </a>
  <div class="part2">
    <a href="home.php" class="addBlog">Home</a>
    <a href="addBlogForm.php" class="addBlog">Add Blog</a>
    <a href="logout.php" class="addBlog">logout</a>
  </div>
</div>