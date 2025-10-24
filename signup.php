<?php
include 'conn.php';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO user (name , email , password) VALUES ('$name' , '$email' , '$password')";

  if($conn->query($sql) === TRUE){
   echo "ok"; 
   ?>
   <script>
    alert("You have successfully registered")
    window.location.href = 'index.php';
   </script>
   <?php
  }
  else{
    echo "failed:" . $sql . "<br>" . $conn->error  ;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
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
  <link rel="stylesheet" href="signin.css">
</head>
<body>
    <a href="#"><img src="assets/kk.png" class="logo" width="100px" /></a>
    <div class="sign-container">
      <h1 class="signIn-title">Sign Up</h1>
      <form method="post" action="signup.php">
      <h5 class="input-label">Your name</h5>
      <input type="text" placeholder="First and last name"class="U" name="name" id="name" required/>
      <h5 class="input-label">Mobile number or email</h5>
      <input type="email" placeholder=" phone number or email"class="U" name="email" id="email" required>
       <h5 class="input-label">Password</h5>
       <input type="password" placeholder="enter Password , atleast 8 character" name="password" class="U" id="password"required>
       <input id="submit" type="submit" name="submit" value="Insert">
    </form>
      <p class="signin-condition">
        By continue, you agree to <span>kk condition </span> of use and privacy
        Notice .
      </p>
      <p class="signin-help">&#9656Need help</p>
      <hr>
      <h5 style="font-size: 9px;">Buying for work?</h5>
      <p class="business"><span> Shop on kk business </span></p>
    </div>
    <div class="signin-bottom">
      <hr>
      <p>Have an account  &#0</p>
      <hr>
    </div>
    <a href="signin.php">
    <button type="submit" class="sign-signup-btn"> Login with kk account </button>
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