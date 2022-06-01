<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/signup.css">
  <title>Medium</title>
</head>

<body>
  <h1 class="title">Medium</h1>
  <form action="signup.php" method="POST" enctype="multipart/form-data" class="form">

    <input required placeholder="Enter your name" class="input" name="name" id="name" type="text">

    <input required placeholder="Enter your email" class="input" name="email" id="email" type="text">

    <input required placeholder="Enter your password" class="input" name="password" id="password" type="password">

    <label for="image" class="image_container">
      Select Profile-pic:
      <input required type="file" name="image" id="image">
    </label>

    <input type="submit" id="submit" name="submit" value="Signup">
  </form>

  <p>
    Already have an account? <a href="index.php">Signin</a>
  </p>
</body>

</html>