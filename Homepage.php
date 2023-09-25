<!DOCTYPE html>

<?php 
  session_start();

  if (!isset($_COOKIE['login_token'])) {
    header('Location: /login.php');
    exit; 
  }

  if (isset($_POST['logout'])) {
    // Clear session variables
    $_SESSION = array();

    // Expire the "login_token" cookie by setting it to the past
    setcookie('login_token', '', time() - 3600, '/');

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header('Location: /login.php');
    exit;
  }
 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/styles//navbar.css">
</head>
<body>

  <div class="main">
    <nav class="navbar fixed-top bg-body-tertiary">
      <div class="container-fluid nav-div">
          <h1 class="text-logo">MyPage</h1>
          <ul>
            <li><a href="/Homepage.php">Home</a></li>
            <li><a href="/Projects.php">Projects</a></li>
            <li><a href="/About.php">About</a></li>
            <li><a href="/Contact.php">Contact</a></li>

            <form method="post">
               <button class="logout" type="submit" name="logout">Logout</button>
            </form> 
          </ul> 
    </div>
    </nav>
  </div>


  <?php 
     
  ?>
    

</body>
</html>