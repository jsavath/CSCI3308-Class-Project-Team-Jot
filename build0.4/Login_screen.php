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
  <link href="jot_home.css" rel="stylesheet">
</head>

<header class="header_main">

  <div class="Jot">
    <h1><a href="jot_home.html" style="text-decoration:none">JOT!</a></h1>
  </div>

  <nav class="main_nav"> <! Navigation Bar >
    <ul>
      <li><a href="about_us.html" style="text-decoration:none">About Us</a></li>

      <li><a href="contact_us.html" style="text-decoration:none">Contact Us</a></li>

      <li><a href="Login_screen.php" style="text-decoration:none">Sign In</a></li>
    </ul>
  </nav>
</header>

<body>
  <section class="container">
    <div class="login">
      <h1>Login</h1>
      <form method="post" action="Login.php">
        <p><input type="text" name="student_id" value="" placeholder="Student ID"></p>
        <p><input type="password" name="PasswordHash" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </p>
      </form>
    </div>
    <section class="container">
    <div class="logout">
        <form method="post" action="Logout.php">
          <p>
            <p class="logout"><input type="submit" name="commit" value="Logout"></p>
          </p>
        </form>
    </div>

    <section class="container">
      <div class="create_user">
        <form method="post" action="create_user.php">
          <p>
            <p class="create_user"><input type="submit" name="commit" value="Sign Up"></p>
          </p>
        </form>
      </div>
</body>
</html>
