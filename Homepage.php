<!DOCTYPE html>

<?php 
  session_start();

  if(!isset($_COOKIE)) {
    header('Location: '.'/login.php');
    return;
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
            <button class="logout" type="button">Logout</button>
          </ul> 
      </div>
    </nav>
  </div>
    

</body>
</html>