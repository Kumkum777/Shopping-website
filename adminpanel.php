<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connection.php";

if (!isset($_SESSION['email'])) {
    header("Location: project.php");
    exit();
}

if ($_SESSION['email'] !== 'kumkum@gmail.com') {
    echo "<h2 style='text-align:center; color:red;'>Access Denied </h2>";
    exit();
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $category = $_POST['category'];

  if(isset($_FILES['image']) && $_FILES['image']['error'] ===0){
  $image = $_FILES['image']['name'];
  $target = "uploads/" . basename($image);
  }
  

   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO products (name, price, image, category) VALUES ('$name', '$price', '$image', '$category')";
        
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Product added successfully!"); window.location="project.php";</script>';
        } else {
            echo "Database error: " . $conn->error;
        }
    } else {
        echo "Image upload failed!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> 
  <style>
    *{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
    .grid-container{
      display: grid;
      grid-template-columns: 200px 1fr;
      grid-template-areas: 
      "header header"
      "sidebar main"
      "footer footer";
      grid-template-rows: 100px 450px 40px;
      height: 100vh;
    }
    header{
      grid-area: header;
      background-color: #4CAF50;
      color: white;
      justify-content: space-between;
      font-size: 24px;
    }
     .bodyy i{
    font-size:32px;
    gap: 45px;
  }
    .hmm{
  display: flex;
  flex-direction: row;
  margin: auto;
  text-align: center;
  gap: 10px;
  color: #0534b3;
}
    .sidebarr{
      grid-area: sidebar;
      padding: 20px;
      background:linear-gradient(rgba(4, 164, 208, 0.92)  , rgba(38, 0, 72, 1) );
      display: flex;
      flex-direction: column;
      line-height: 30.2px;
      font-weight: 530;
      font-size: 14px;
      color: #fff;
    }
    .sidebar a{
      color: #000;
    }
    .main{
      grid-area: main;
      padding: 20px;
      background-color: #fff;
      display: flex;
      text-align: center;
      justify-content: center;
    }
    footer{
      grid-area: footer;
      background-color: #333;
      color: #fff;
      text-align: center;
      margin-top: 0;
    }
    .main input{
      width: 70%;
      height: 26px;
      margin-bottom: 10px;
      border: 1.5px solid gray;
      padding-left: 10px;
      margin-top: 4px;
    } 
    #file{
    border: none;
    padding: 0;
    }
    #submit{
      width:200px ;
      margin-top: 20px;
      height: 30px;
      background-color: #7bc8ff;
      border: none;
      box-shadow: 0px 3px 3px rgb(74, 74, 74);
      font-weight: 650;
      cursor: pointer;
      font-size:13px;
    }
    .main hr{
      width: 400px;
      margin: 15px 0px ;
    }
    .sizee i{
      height: 200px;
      cursor: pointer;
      color: #fff;
      margin-right: 20px;
    }
    .first-div{
    background-color: #03376cff;
    color: #ffffffff;
    border-radius: 15px;
    text-align: center;
    padding:3px 0px ;
    margin-bottom: 10px;
   }
   body button{
    border: none;
    cursor: pointer;
    height: 30px;
   }
   body button:hover{
    background-color: #0080ffff;
   }
  .sec-div{
    background-color: #3f9bf7ff;
    color: #ffffffff;
    border-radius: 15px;
    padding:3px 0px ;
    text-align: center;
    margin-bottom: 10px;
   }
    
       .third-div{
    background-color: #0080ffff;
    color: #ffffffff;
    border-radius: 15px;
    padding:3px 0px ;
    text-align: center;
    margin-bottom: 10px;
   }

       .fourth-div{
    background-color: #236eb9ff;
    color: #ffffffff;
    padding:3px 0px ;
    border-radius: 15px;
    text-align: center;
    margin-bottom: 10px;
   }
  #details{
    background-color: #fff;
  }
  
  </style>
</head>
<body>
<div class="grid-container">
  <header class="margin" >
    <div class="logo_container">
    <a href="#"><img class="kk_home"src="assets/kk.png"></a>
    </div>
    <nav class="nav_bar">
      <a href="project.php">Home</a>
      <a href="index.php">SignUp</a>
       <a href="help.html">Help</a>
        <a href="Abbout.html">About</a>
         <a href="adminpanel.php">Admin- panel</a>
          <a href="today'sDeal.html">Today'Deal</a>
           <a href="groceries.html">groceries</a>
    </nav>
     <div class="user">
      <img src="assets/user.png" width="30px " height="35px" style="margin-right: 30px ; ">
     </div>
     <div class="cart">
      <button onclick={sideButton()} class="sidebarButton"> ☰ </button>
        <a href="cart.html">
      <img src="assets/cart_icon.png" width="30px " height="35px" style="margin-right: 30px ; margin-bottom: -10px;"></a>
     </div>
  <div class="sidebar" >
       <a href="project.php">Home</a>
      <a href="index.php ">SignUp</a>
       <a href="help.html">Help</a>
        <a href="Abbout.html">About</a>
         <a href="adminpanel.php">Admin-panel</a>
          <a href="today'sDeal.html">Today'Deal</a>
           <a href="groceries.html">groceries</a>
    </div>
 </header>
  <div class="sidebarr">
    <button class="first-div"onclick="showsection('admin')">Admin</button>
     <button class="first-div"onclick="showsection('addProduct')">ADD-Products</button>
    <button class="sec-div" onclick="showsection('details')">Details</button>
     <div style="margin-top: auto; font-size: 13px; opacity: 0.8">
          © KK Shopping-website
        </div>
  </div>
  <div id="admin" class="main">
    <div class ="bodyy">
 
  <h3><b>Thank You for Visiting Our Website " kk"</b></h3><br><br>
  <h2>Founder & Designer</h2><br><br>

 <div id=" designer" ><img id="founder"src="assets/kumkum.jpg" style="width:180px; box-shadow: 0px 0px 12px 3px black;"></div><br><br>

    <div class="upper"> 
      <h4>KUMKUM MAURYA</h4><br>
    
     </div>
 <din class="upper"> <h5>Students of diploma information technology </h5><br>
    <h5>From HEWETT Polytechnic</h5><br>
    <h5>Uttar Pradesh , Lucknow</h5>
    <h4>..........</h4>
  </din>
 </div>
  </div>
  <div id="addProduct" class="main" style="display:none;">
  <form method="POST" enctype="multipart/form-data">
  <h3>Add Products</h3>
  <input type="text" name="name" placeholder="Product Name" required><br>
  <input type="text" name="price" placeholder="Price" required><br>
  <input type="text" name="category" placeholder="Category"><br>
  <input id="file" type="file" name="image" required><br>
  <button id="submit" type="submit" name="submit"> Add new Product</button>
</form>
</div>
<div id="details" >

<img src="assets/graph.jpeg" width= 40%>
<img src="assets/frequency.jpg" width= 40%>
</div>
  <footer>
      <div class="footer">
        <div class="footer_container">
          <div class="footer_content">
            <div class="kk-shoping-website">
              <h5>KK WORLD</h5>
              <p style="font-size: 12.5px">
                Email:-kumkum.maurya.7.7.7@gmail.com
              </p>
              <p>Phone no.- 949653845</p>
            </div>
            <div class="service">
              <h5>service</h5>
              <a href="#">Today's Deal</a>
              <a href="#"> Costomer Service</a>
              <a href="#">Resistry</a>
              <a href="#">Gift cards</a>
              <a href="#">Sell</a>
            </div>
            <div class="useful_links">
              <h5>useful links</h5>
              <a href="">home</a>
              <a href="">About us</a>
              <a href="">Contect us</a>
              <a href="">Privacy policy</a>
            </div>
            <div class="Social_Network">
              <h5>Social Network</h5>
              <div>
                <p style="font-size: 16px">follow us on</p>
                <div class="sizee">
                  <a style="color: #eb4a0b" href="https://github.com/Kumkum777"
                    ><i class="fa-brands fa-square-github"></i
                  ></a>
                  <div>
                    <a
                      style="color: #eb4a0b"
                      href="https://www.linkedin.com/feed/?doFeedRefresh=true&nis=true&lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BzpHdJRJtR4SEWSGH9KBrig%3D%3D"
                      ><i class="fa-brands fa-linkedin"></i
                    ></a>
                  </div>
                  <a style="color: #eb4a0b" href="https://www.whatsapp.com/"
                    ><i class="fa-brands fa-square-whatsapp"></i
                  ></a>
                  <a style="color: #eb4a0b" href="https://www.youtube.com/"
                    ><i class="fa-brands fa-square-youtube"></i
                  ></a>
                  <a style="color: #ffffffff" href="https://x.com/?lang=en"
                    ><i class="fa-brands fa-square-twitter"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="foot">© 2025 kk-shoping-website</div>
      </div>
    </footer>
  </div>



  <script>
    function showsection(sectionId)
    {
      document.getElementById('addProduct').style.display = 'none';
      document.getElementById('details').style.display = 'none';
      document.getElementById('admin').style.display = 'none';

      document.getElementById(sectionId).style.display = 'block';
    }
  </script>
</body>
</html>