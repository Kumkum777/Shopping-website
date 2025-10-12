<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connection.php";

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $image = $_FILES['image']['name'];
  $target = "uploads/" . basename($image);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $sql = "INSERT INTO products (name, price, image, category) VALUES ('$name', '$price', '$image', '$category')";

    if (mysqli_query($conn, $sql)) {
      
    } else {
      echo "❌ Database Error: " . mysqli_error($conn);
    }
  } else {
    echo "❌ Failed to upload image!";
  }
  if(isset($_POST['submit'])){
    echo '
    <script>alert("product added! ") ;
   window.location = "index.php";</script> 
    ';
  }
}
?>
<form method="POST" enctype="multipart/form-data">
  <input type="text" name="name" placeholder="Product Name" required><br>
  <input type="text" name="price" placeholder="Price" required><br>
  <input type="text" name="category" placeholder="Category"><br>
  <input type="file" name="image" required><br>
  <button type="submit" name="submit"> Add Product</button>
</form>
