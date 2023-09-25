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
    <link rel="stylesheet" href="/styles//navbar.css">
    <link rel="stylesheet" href="/styles/about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <title>About</title>
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


  <!--ABOUT CONTENT-->

  <main>
     <div class="content">
       <div class="info">
          <img src='./IMG_8617.jpeg' alt="">
          <h1>I'm <span>Rusty Miguel Ramos</span> </h1>
          <h3>BSCS-3A</h3>
          <p>"Don't Stop when you're tired. Stop when you're done!"</p>
       </div>

       <article class="content-post">
       "I am currently a third-year college student, major in Computer Science due to my passion for technology. I have experience in building projects using Java, React JS, and C#. While I enjoy working on front-end website development and design, my preference stems from my self-awareness that my logical skills aren't my strongest suit. I sometimes find it challenging to tackle complex problems, particularly when faced with coding challenges that aim to enhance my skills. However, I am committed to continuous learning and pushing myself to overcome these weaknesses.

Presently, I am concentrating on front-end development, which includes learning React with TypeScript and honing my design skills. Occasionally, I also delve into studying Node.js and PHP to gain familiarity with backend development. Beyond my tech interests, I indulge in various hobbies, including playing the guitar, reading motivational literature, hitting the gym 5 times a day, and listening to music.

As I approach graduation, I envision a career path as a web developer or UI designer, aligning with my skill set. My aspirations are clear: I aim to successfully complete my course, continually improve myself, and establish a strong financial foundation through either employment or entrepreneurship. This will allow me to attain the things I desire and provide financial security for my family."
       </article>

     </div>
  </main>


    <script>
       
    </script>
</body>
</html>