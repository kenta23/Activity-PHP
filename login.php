<!DOCTYPE html>

<?php 
  session_start();

  if(isset($_COOKIE)) {
    header('Location: '.'/Homepage.php');
    return;
  }
?>
  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</head>
<body>
   
 <div class="main">
   <form method="POST" class="form">
      <h1 class="head">Login</h1>

      <div class="mb-3">
          <label for="email" class="label-email">Email</label>
          <input type="text" name="email" class="form-control" id="email" placeholder="Email">
    </div>
        <div class="mb-3">
          <label for="Password" class="label-password">Password</label>
          <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
        </div>   
        <button type="submit" name="login"  class="button">Login</button>           
  </form>

  <div class="right">
     
  </div>
</div>


<?php 
   if(isset($_POST["email"]) && $_POST["password"]) {
     $page1 = './page1.php';

     if($_POST["email"] == 'Rmramos@gmail.com' and $_POST["password"] == '12345')
     {    
        $_SESSION["email"] = $_POST["email"]; 
        setcookie("login_token", "1", time() + 3600, '/');
        header("Location: ".$page1 );
        exit;
     }
     
     else {
        echo "Invalid email and password";
     }
   }

?>
</body>
</html>