<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Log in</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['status'])) {
      echo '<script>alert("' . $_SESSION['status'] . '");</script>';
      unset($_SESSION['status']);
    }
  ?>
      <div class="login-box">
            <p>Log in</p>
            <form action="logincode.php" method="post" >
              <div class="user-box">
                <input required="" name="email" type="email" id="email">
                <label>Email</label>
              </div>
              <div class="user-box">
                <input required="" name="password" type="password" id="password">
                <label>Password</label>
              </div>
              <button name="login">
                Submit
              </button>
            </form>
            <p>Create a new account ? <a href="register.php" class="a2">Sign in!</a></p>
          </div>
</body>
</html>