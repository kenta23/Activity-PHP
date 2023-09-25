<!DOCTYPE html>

<?php 
  session_start();

 if (isset($_COOKIE['login_token']) && isset($_SESSION['email'])) {
    header('Location: /Homepage.php');
    exit;
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
   
 <div class="main">
   <form method="POST" class="form">
      <h1 class="head">Login</h1>

      <div class="mb-3">
          <label for="email" class="label-email">Email</label>
          <input type="text" required name="email" class="form-control" id="email" placeholder="Email">
    </div>
        <div class="mb-3">
          <label for="Password" class="label-password">Password</label>
          <input type="password" required name="password" class="form-control" id="password" placeholder="Password">
        </div>   
        <button type="submit" name="login" class="button loginbtn">Login</button>           
  </form>

  <div class="right"><!-- IMAGE STYLED HERE--></div>

   <div  class="status invisible">
      <p>Wrong email or password</p>
   </div>
</div>


<?php 
   if(isset($_POST["email"]) && $_POST["password"]) {
     $page1 = './Homepage.php';

     if($_POST["email"] == 'admin' && $_POST["password"] == '12345')
     {    
        $_SESSION["email"] = $_POST["email"]; 
        setcookie("login_token", $_SESSION['email'], time() + 3600, '/');
        header("Location: ".$page1 );
        exit;
     }
     
     else {
      echo '';
     }
   }

?>

<script>
  const statusShowUp = document.querySelector('.status');
  const emailInput = document.querySelector('#email');
  const passwordInput = document.querySelector('#password');
  const form = document.querySelector('.form'); 

  function showStatus () {
        statusShowUp.textContent = 'Wrong email or password!';
        statusShowUp.classList.add('visible');
        statusShowUp.classList.remove('invisible');
  }

   form.addEventListener('submit', (e) => {

     if(emailInput.value !== 'admin' || passwordInput.value !== '12345') {   
      e.preventDefault(); 
      showStatus();  //call the function to show status 

      setTimeout(() => {
         statusShowUp.textContent = '';
         statusShowUp.classList.add('invisible');
         statusShowUp.classList.remove('visible');  //after 4s stop displaying the status
        }, 2000);

        return;
     }
   })
</script>
</body>
</html>