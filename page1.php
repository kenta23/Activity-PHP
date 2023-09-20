<!DOCTYPE html>

<?php 
  session_start();
  if(!isset($_SESSION) && !isset($_COOKIE['login_token'])) {
    header('Location: '.'/login.php');
    return;
  }

  echo $_COOKIE['login_token'] . $_SESSION['email'];
 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>