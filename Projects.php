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
    <title>Projects</title>
    <link rel="stylesheet" href="/styles/project.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="/styles/navbar.css">
</head>
<body>

<div class="img-bg"></div>

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

  <!--SECOND PART-->
  <div class="project-container">
      <h1 class="myprojects-h1">My Projects</h1>

      <div class="main-proj">
          <div class="proj-children">
             <div class="content">
             <div class="proj-img">
                 <img src='./1.png' alt=""> <!--PROJECT IMAGE-->
              </div>

              <div class="info">
                   <h1 class="title">Membership System</h1>
                   <span class="desc">Gym Membership system using C#</span>
                   <a href="https://github.com/kenta23/G-Fit-Membership-System-">Link</a>
              </div>
             </div> 
          </div>
          
          <div class="proj-children">
            <div class="content">
             <div class="proj-img">
                 <img src="./2.png" alt=""> <!--PROJECT IMAGE-->
              </div>

              <div class="info">
                   <h1 class="title">Basic Calculator</h1>
                   <span class="desc">Self project calculator app using Java</span>
                   <a href="https://github.com/kenta23/Java-Calculator-">Link</a>
              </div>
            </div>  
          </div>

          <div class="proj-children">
            <div class="content">
            <div class="proj-img">
                 <img src="./logo_weconnect 1.png" alt=""> <!--PROJECT IMAGE-->
              </div>

              <div class="info">
                   <h1 class="title">WeConnect</h1>
                   <span class="desc">A Chat app application</span>
                   <a href="https://github.com/kenta23/WeConnect-Android-App">Link</a>
              </div>
            </div>  
          </div>

          <div class="proj-children">
             <div class="content">
             <div class="proj-img">
                 <img src="./4.png" alt=""> <!--PROJECT IMAGE-->
              </div>

              <div class="info">
                   <h1 class="title">MyDiariz</h1>
                   <span class="desc">Diary app using React <br> Typescript/NodeJs</span>
                   <a target="_blank" href="https://github.com/kenta23/My-diary-app">Link</a>
              </div>
             </div> 
          </div>
      </div>
  </div>

    
</body>
</html>