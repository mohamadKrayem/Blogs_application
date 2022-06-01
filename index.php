<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Medium</title>
</head>

<body>
  <h1 class="title">Welcome to Medium</h1>
  <form action="signin.php" method="POST" enctype="multipart/form-data" class="form">
    <input required placeholder="Enter your email" name="email" id="email" type="text" class="input">
    <input required placeholder="Enter your password" name="password" id="password" type="password" class="input">
    <input type="submit" id="submit" name="submit" value="Login">
  </form>

  <p>
    Don't have an account? <a href="signupform.php">signup</a>
  </p>
</body>

</html>