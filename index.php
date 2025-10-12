<?php
include "connection.php";

$sql = "SELECT * FROM products ORDER BY id DESC";
$result =  mysqli_query($conn , $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>project</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="admin.css" />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Hand+Pre:wght@400..700&family=Kapakana:wght@300..400&family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    />
  </head>
  <body>
 <header class="margin" >
    <div class="logo_container">
    <a href="#"><img class="kk_home"src="assets/kk.png"></a>
      
    </div>
    <nav class="nav_bar">
      <a href="index.php">Home</a>
      <a href="signin.html">SignUp</a>
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
      <img src="assets/cart_icon.png" width="30px " height="35px" style="margin-right: 30px ; margin-bottom: -10px;">
     </div></a>
  </header>
  <div class="sidebar" >
       <a href="index.php">Home</a>
      <a href="signin.html ">SignUp</a>
       <a href="help.html">Help</a>
        <a href="Abbout.html">About</a>
         <a href="adminpanel.php">Admin-panel</a>
          <a href="today'sDeal.html">Today'Deal</a>
           <a href="groceries.html">groceries</a>
    </div>
    <div class="header-slider">
      <ul>
        <img src="assets/header2.jpg" class="header-img" />
      </ul>
    </div>
    <div class="box-row header-box">
      <div
        style="background-color: rgb(250, 249, 248); padding: 20px 20px"
        class="box-col col"
      >
        <h3>Most Branded Bikes</h3>
        <a href="bike.html"
          ><img id="front-img" style="height: 180px; width: 250px" src="assets/box4-11.jpg"
        /></a>
        <a href="bike.html">Shop More</a>
      </div>
      <div style="background-color: rgb(250, 249, 248)" class="box-col">
        <h3>Girls Dress</h3>
        <a href="girlsDress.html"
          ><img id="front-img" style="height: 180px; width: 250px" src="assets/girl23.webp"
        /></a>
        <a href="girlsDress.html">Shop More</a>
      </div>
      <div style="background-color: rgb(250, 249, 248)" class="box-col">
        <h3>Toys</h3>
        <a href="toy.html"
          ><img id="front-img" style="height: 180px; width: 250px" src="assets/box1-3.jpg"
        /></a>
        <a href="toy.html">Shop More</a>
      </div>
      <div style="background-color: rgb(250, 249, 248)" class="box-col">
        <h3>Women Dress</h3>
        <a href="woman.html"
          ><img id="front-img" style="height: 180px; width: 250px" src="assets/box2-4.jpg"
        /></a>
        <a href="woman.html">Shop More</a>
      </div>
    </div>
    <div class="box-row">
      <div class="box-col">
        <h3>Grooming Products</h3>
        <img id="front-img" style="height: 180px; width: 250px" src="assets/box2-1.jpg" />
        <button
          style="
            font-size: 15px;
            background-color: rgb(16, 30, 50);
            color: aliceblue;
          "
          onclick="alert(`purchased`)"
        >
          Buy Now - under ₹340/-</button
        ><button
          style="
            background-color: rgb(194, 194, 194);
            width: 200px;
            height: 30px;
            border-color: rgb(194, 194, 194);
            margin: 6px 3px;
            padding: 4px 6px;
          "
          class="add-to-cart"
          data-image="assets/box2-1.jpg"
          data-id="1"
          data-name="product"
          data-price="₹340/- "
        >
          Add to cart
        </button>
      </div>
      <div class="box-col device">
        <h3 class="h3">Devices</h3>
        <img id="front-img"
          style="height: 180px; width: 250px"
          src="assets/box2-2.jpg"
          id="img"
          alt="Latest-Devices"
        />
        <button
          style="
            font-size: 15px;
            background-color: rgb(16, 30, 50);
            color: aliceblue;
          "
          onclick="alert(`purchased`)"
        >
          Buy Now - under ₹85,899.90/-</button
        ><button
          style=" 
            background-color:rgb(194, 194, 194);
            width: 200px;
            height: 30px;
            border-color: rgb(194, 194, 194);
            margin: 6px 3px;
            padding: 4px 6px;
          "
          class="add-to-cart"
          data-image="assets/box2-2.jpg"
          data-id="2"
          data-name="product"
          data-price="₹85,899.90/- "
        >
          Add to cart
        </button>
      </div>

      <div class="box-col">
        <h3>Pets Food</h3>
        <img id="front-img" style="height: 180px; width: 250px" src="assets/box2-3.jpg" />
        <button
          style="
            font-size: 15px;
            background-color: rgb(16, 30, 50);
            color: aliceblue;
          "
          onclick="alert(`purchased`)"
        >
          Buy Now - under ₹1,278.90/-
        </button>
        <button
          style="
            background-color: rgb(194, 194, 194);
            width: 200px;
            height: 30px;
            border-color: rgb(194, 194, 194);
            margin: 6px 3px;
            padding: 4px 6px;
          "
          class="add-to-cart"
          data-image="assets/box2-3.jpg"
          data-id="3"
          data-name="product"
          data-price="₹1,278.90/- "
        >
          Add to cart
        </button>
      </div>
      <div class="box-col">
        <h3>Fashion Mart</h3>
        <img id="front-img" style="height: 180px; width: 250px" src="assets/girl11.webp" />
        <button
          style="
            font-size: 15px;
            background-color: rgb(16, 30, 50);
            color: aliceblue;
          "
          onclick="alert(`purchased`)"
        >
          Buy Now - under ₹740.90/-</button
        ><button
          style="
            background-color: rgb(194, 194, 194);
            width: 200px;
            height: 30px;
            border-color: rgb(194, 194, 194);
            margin: 6px 3px;
            padding: 4px 6px;
          "
          class="add-to-cart"
          data-image="assets/girl11.webp"
          data-id="4"
          data-name="product"
          data-price="₹740.90/- "
        >
          Add to cart
        </button>
      </div>
    </div>
    <div class="product-sliderbike">
      <h3>Up to 80% off | Treasures from artisans</h3>
      <div class="products">
        <a href="furniture.html"
          ><img style="height: 160px; width: 240px" src="assets/product3-1.jpg"
        /></a>
        <a href="furniture.html"
          ><img style="height: 160px; width: 240px" src="assets/product3-2.jpg"
        /></a>
        <a href="furniture.html"
          ><img style="height: 160px; width: 240px" src="assets/product3-3.jpg"
        /></a>
        <a href="furniture.html"
          ><img style="height: 160px; width: 240px" src="assets/product3-4.jpg"
        /></a>
        <a href="furniture.html"
          ><img style="height: 160px; width: 240px" src="assets/product3-5.jpg"
        /></a>
        <a href="furniture.html"
          ><img style="height: 160px; width: 240px" src="assets/product3-6.jpg"
        /></a>
        <a href="furniture.html"
          ><img style="height: 160px; width: 240px" src="assets/product3-7.jpg"
        /></a>
        <a href="furniture.html"
          ><img style="height: 160px; width: 240px" src="assets/product3-8.jpg"
        /></a>
        <a href="furniture.html"
          ><img style="height: 160px; width: 240px" src="assets/product3-9.jpg"
        /></a>
        <a href="furniture.html"
          ><img
            style="height: 160px; width: 240px"
            src="assets/product3-10.jpg"
        /></a>
      </div>
    </div>

    <div class="box-row">
      <div class="box-col">
        <h3>Stationery</h3>
        <img id="front-img" style="height: 180px; width: 250px" src="assets/box3-1.jpg" />
        <a href="#">Shop More</a>
      </div>
      <div class="box-col">
        <h3>Laptop for study</h3>
        <img  id="front-img"style="height: 180px; width: 250px" src="assets/box3-2.jpg" />
        <a href="#">Shop More</a>
      </div>
      <div class="box-col">
        <h3>Office chairs</h3>
        <img id="front-img" style="height: 180px; width: 250px" src="assets/box3-3.jpg" />
        <a href="#">Shop More</a>
      </div>
      <div class="box-col">
        <h3>Gaming monitor</h3>
        <img id="front-img" style="height: 180px; width: 250px" src="assets/box3-4.jpg" />
        <a href="#">Shop More</a>
      </div>
    </div>

    <div class="products-slider-with-price">
      <h3>Deal under $25</h3>
      <div class="products">
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-1.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-2.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-3.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-4.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-5.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-6.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-7.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-8.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-9.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-10.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
        <div class="product-card">
          <div class="product-img-container">
            <img src="assets/product2-11.jpg" />
          </div>
          <div class="product-offer">
            <p>27% off</p>
            <span>Deal</span>
          </div>
          <p class="product-price">$ <span>14.49</span>List price:$19.95</p>
        </div>
      </div>
    </div>

    <div class="product-sliderbike">
      <h3>Starting ₹70,348 | Set off on your next great ride</h3>
      <div class="products">
        <a href="bike.html"
          ><img style="height: 160px; width: 240px" src="assets/box4-1.jpg"
        /></a>
        <a href="bike.html"
          ><img style="height: 160px; width: 240px" src="assets/box4-2.jpg"
        /></a>
        <a href="bike.html"
          ><img style="height: 160px; width: 240px" src="assets/box4-3.jpg"
        /></a>
        <a href="bike.html"
          ><img style="height: 160px; width: 240px" src="assets/box4-4.jpg"
        /></a>
        <a href="bike.html"><img src="assets/box4-5.jpg" /></a>
        <a href="bike.html"
          ><img style="height: 160px; width: 240px" src="assets/box4-6.jpg"
        /></a>
        <a href="bike.html"
          ><img style="height: 160px; width: 240px" src="assets/box4-8.jpg"
        /></a>
        <a href="bike.html"
          ><img style="height: 160px; width: 240px" src="assets/box4-9.jpg"
        /></a>
        <a href="bike.html"
          ><img style="height: 160px; width: 240px" src="assets/box4-11.jpg"
        /></a>
      </div>
    </div>
    <div class="container">
        <?php
        if(mysqli_num_rows($result) > 0 ){
          while($row = mysqli_fetch_assoc($result)){
            echo "
            <div class='product'>
            <img src='uploads/{$row['image']}' alt = '{$row['name']}'>
             <h3>{$row['name']}</h3>
             <p class='price'>₹{$row['price']}</p>
             <p>Category: {$row['category']}</p>      
              <button style='width: 200px; height: 30px; background-color: #aeadadff;box-shadow: 0px 0px 3px 2px #838383ff; color: black; border: none;' class='add-to-cart'          data-image='uploads/{$row['image']}' alt = '{$row['name']}'
          data-id='1'
          data-name='product'
          data-price='₹{$row['price']}'
        >
          Add to cart
        </button>      
            </div>
            ";
          }
        }
        ?>
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
                  <a style="color: #eb4a0b" href="https://x.com/?lang=en"
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
    <script src="index.js"></script>
    <script src="toy.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js
"></script>

  </body>
</html>
