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
    <link rel="stylesheet" href="/styles/Home.css">
</head>
<body>

<div class="main">
    <nav class="navbar">
      <div class="nav-div">
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



  <!--HOMEPAGE CONTENT-->

   <div class="main-page">
      <div class="left">
          <h1>Welcome to my Page</h1>
          <p class="typing-text"></p>
      </div>

      <div class="animation">
           <img src="" alt="">
      </div>

      <div class="road">
          <img src="./assets/image-removebg-preview (7).png" class="road-img" alt="road">
      </div>

      <div class="car">
          <img src="./assets/output-onlinegiftools (2).gif" class="car-img" alt="car">
      </div>

      <div class="tree">
          <img src="./assets/tree.gif" class="tree-img" alt="tree">
      </div>
      <div class="spaceship">
          <img src="./assets/output-onlinegiftools.gif" class="spaceship-img" alt="spaceship">
      </div>
     

   </div>

  <?php 
     
  ?>
    

    <script>
       const text = document.querySelector('.typing-text');
       const contentText = "Enjoy exploring my page";

       let index = 0

    function typeText() {
        if(index < contentText.length) { 
          text.textContent += contentText.charAt(index);
          index++;
          setTimeout(typeText, 100); // Adjust typing speed (in milliseconds)
         }
         else if(index === contentText.length) { 
            setTimeout(deleteText, 1000); // Adjust typing speed (in milliseconds)
         }
    }

    function deleteText() {
    if (index >= 0) {
        text.textContent = text.textContent.slice(0, -1);
        index--;
        setTimeout(deleteText, 50); // Adjust deleting speed (in milliseconds)
    }
    else if(index < 0) {
      index = 0;
      setTimeout(typeText, 1000);
    }
}

    typeText();
       

    </script>
</body>
</html>