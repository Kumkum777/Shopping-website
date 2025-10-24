<?php
include('conn.php');

SESSION_start();
if(isset($_POST['submit'])){

  $email = $_POST['email'];

  $query = "SELECT * FROM user WHERE email = '$email'";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);
  
  if($total == 1){
    $_SESSION['email'] = $email;
  ?>
  <script>
    alert("signin successfully");
    window.location.href='project.php';
  </script>
  <?php
  }
  else{
    ?>
    <script>
       alert("Invalid user");
       window.location.href = 'index.php';
    </script>
    <?php
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <style>
      #submit {
    width: 100%;
    height: 40px;
    margin: 20px 0 15px 0;
    border: none;
    border-radius: 18px;
    cursor: pointer;
    color: #ffffff;
    background: linear-gradient(rgb(1, 16, 12)  , rgb(33, 8, 57) );
    font-size: 12px;
    font-weight: 500;
    transition: 0.3s ease;
}
    </style>
    <link rel="stylesheet" href="signin.css" />
  </head>
  <body>
    <a href="#"><img src="assets/kk.png" class="logo" width="100px" /></a>
    <div class="sign-container">
      <h1 class="signIn-title">Sign In</h1>
      <h5 class="input-label">Email or mobile phone number</h5>
      <form action="#" method="POST">
      <input type="email" name="email" placeholder="Email or phone number....." id="emailPhone"required >
      <input class = "submit"id="submit" type="submit" name="submit" value="insert"></form>
      <p class="signin-condition">
        
        By continue, you agree to <span>kk condition </span> of use and privacy
        Notice .
      </p>
      <p class="signin-help">&#9656Need help</p>
      <hr>
      <h5 class="buy">Buying for work?</h5>
      <p class="business"><span> Shop on kk business </span></p>
    </div>
    <div class="signin-bottom">
      <hr>
      <p>new to kk  &#0</p>
      <hr>
    </div>
    <a href="signup.php">
    <button class="sign-signup-btn"> Create account on kk</button>
    </a>
    <footer>
      <div class="footer-links">
        <a href="#">Condition of use</a>
        <a href="#">Privacy Notice</a>
        <a href="#">Help</a>
      </div>
      <p class="footer-copyrigth">© 2025 , kk.com, Inc. or its affilites</p>
    </footer>
  </body>
</html>
