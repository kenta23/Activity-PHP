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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="/styles//navbar.css">
    <link rel="stylesheet" href="/styles/contact.css">
    <title>Contact</title>
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

  <!--CONTACT CONTENT-->

  <div class="main-contact">
    <div class="contact-text">
      <h1>Get in touch</h1>
     <span>Get in touch and let me know how i can help</span>

    </div>
    
     <form>
      <div class="row g-3">
            <div class="col">
               <input required type="text" class="form-control" placeholder="Name" aria-label="Name">
           </div>
           <div class="col">
             <input required type="email" class="form-control" placeholder="Email" aria-label="Email">
          </div>
          <div class="form-floating">
               <textarea required class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
               <label for="floatingTextarea2">Message</label>
          </div>
          <button type="submit" class="submitBtn">Submit</button>
      </div>
    </form>

     <h3>Or hit me up on my socials</h3>
      <div class="socials">
         <a href="https://www.facebook.com/dreyy23"><img src="./assets/facebook.png" alt=""></a>
         <a href="https://github.com/kenta23"><img src="./assets/github.png" alt=""></a>
         <a href="https://instagram.com/dreeyy.r"><img src="./assets/instagramlogo.png" alt=""></a>
      </div>
       
  </div>
    
</body>
</html>