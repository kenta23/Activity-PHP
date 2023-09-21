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
    <title>About</title>
</head>
<body>
    <div>

    </div>
</body>
</html>