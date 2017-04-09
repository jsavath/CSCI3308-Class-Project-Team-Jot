<?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
    } else {
        echo "Please log in first to see this page.";
    }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login</h1>
      <form method="post" action="Login.php">
        <p><input type="text" name="student_id" value="" placeholder="Username"></p>
        <p><input type="password" name="PasswordHash" value="" placeholder="Password"></p>

        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

</body>
</html>
