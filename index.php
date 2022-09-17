<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "contact";

   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
if(isset($_POST['send'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];



   $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`) VALUES ('$name','$email','$number')";
  mysqli_query($conn, $insert);
   
  if ($conn->query($insert) === TRUE) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $insert . "<br>" . $conn->error;
 }
   
   header('location:index.php');
    
}    ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Start your day with coffee</title>
 <!-- font awesome cdn link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <!-- custom css file link -->
 <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header section starts -->
<header class="header">
 <a href="#" class="logo"> 
   <img src="images/logo.png" alt="">
 </a>
 <nav class="navbar">
 <a href="#home">home</a>
 <a href="#about">about</a>
 <a href="#menu">menu</a>
 <a href="#products">products</a>
 <a href="#review">review</a>
 <a href="#contact">contact</a>
 <a href="#blogs">blogs</a>
 </nav>
 <div class="icons">
 <div class="fas fa-search" id="search-btn"></div>
 <div class="fas fa-shopping-cart" id="cart-btn"></div>
 <div class="fas fa-bars" id="menu-btn"></div>
 </div>
 <div class="search-form">
 <input type="search" id="search-box" placeholder="search here...">
 <label for="search-box" class="fas fa-search"></label>
 </div>
 <div class="cart-items-container">
 <div class="cart-item">
 <span class="fas fa-times"></span>
 <img src="images/cart-item-1.png" alt="">
 <div class="content">
 <h3>cart item 01</h3>
 <div class="price">159.99/-</div>
</div>
</div>
<div class="cart-item">
   <span class="fas fa-times"></span>
   <img src="images/cart-item-2.png" alt="">
   <div class="content">
   <h3>cart item 02</h3>
   <div class="price">189.99/-</div>
   </div>
   </div>
   <div class="cart-item">
   <span class="fas fa-times"></span>
   <img src="images/cart-item-3.png" alt="">
   <div class="content">
   <h3>cart item 03</h3>
   <div class="price">199.99-</div>
   </div>
   </div>
   <div class="cart-item">
   <span class="fas fa-times"></span>
   <img src="images/cart-item-4.png" alt="">
   <div class="content">
   <h3>cart item 04</h3>
   <div class="price">259.99/-</div>
   </div>
   </div>
   <a href="#" class="btn">checkout now</a>
   </div>
  </header>
  <!-- header section ends -->
  <!-- home section starts -->
  <section class="home" id="home">
   <div class="content">
   <h3>fresh coffee in the morning</h3>
   <p>There’s something magical in the way that coffee can brighten our morning mood and give us the spark to
  seize the day.</p>
   <a href="#" class="btn">get yours now</a>
   </div>
  </section>
  <!-- home section ends -->
  <!-- about section starts -->
  <section class="about" id="about">
   <h1 class="heading"> <span>about</span> us </h1>
   <div class="row">
   <div class="image">
   <img src="images/about-img.jpeg" alt="">
   </div>
   <div class="content">
   <h3>what makes our coffee special?</h3>
   <p>Coffee being a specialty blend isn't necessary for a cup of coffee to be special, but it's the emotions it
  evokes and the accompanying service that create the true package</p>
   <p>It takes special altitude and climate to produce truly high-quality coffee, and additional bravery on the
  farmer’s part to discard beans that bear even the slightest defects.</p>
   <a href="#" class="btn">learn more</a>
   </div> 
</div>
</section>
<!-- about section ends -->
<!-- menu section starts -->
<section class="menu" id="menu">
 <h1 class="heading"> our <span>menu</span> </h1>
 <div class="box-container">
 <div class="box">
 <img src="images/menu-1.png" alt="">
 <h3>ESPRESSO</h3>
 <div class="price">100 rs <span>20.99</span></div>
 <a href="#" class="btn">add to cart</a>
 </div>
 <div class="box">
 <img src="images/menu-2.png" alt="">
 <h3>TURKISH COFFEE</h3>
 <div class="price">150 rs <span>20.99</span></div>
 <a href="#" class="btn">add to cart</a>
 </div> 
 <div class="box">
   <img src="images/menu-3.png" alt="">
   <h3>IRISH COFFEE</h3>
   <div class="price">69.99 rs<span>100.99</span></div>
   <a href="#" class="btn">add to cart</a> 
</div>
<div class="box">
<img src="images/menu-4.png" alt="">
<h3>CAFE CUBANO</h3>
<div class="price">79.99 rs <span>90.99</span></div>
<a href="#" class="btn">add to cart</a>
</div>
<div class="box">
<img src="images/menu-5.png" alt="">
<h3>CARAMEL MACCHIATO</h3>
<div class="price">499.99 rs <span>799.99</span></div>
<a href="#" class="btn">add to cart</a>
</div>
<div class="box">
<img src="images/menu-6.png" alt="">
<h3>CAFE CUBANO.</h3>
<div class="price">90 rs <span>199.99</span></div>
<a href="#" class="btn">add to cart</a>
</div>
</div>
</section> 
<!-- menu section ends -->
<section class="products" id="products">
   <h1 class="heading"> our <span>products</span> </h1> 
   <div class="box-container">
      <div class="box">
      <div class="icons">
      <a href="#" class="fas fa-shopping-cart"></a>
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-eye"></a>
      </div>
      <div class="image">
      <img src="images/product-1.png" alt="">
      </div>
      <div class="content">
      <h3>green coffee beans</h3>
      <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      </div>
      <div class="price">300 rs <span>399.99</span></div>
      </div>
      </div>
     
      <div class="box">
      <div class="icons">
      <a href="#" class="fas fa-shopping-cart"></a>
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-eye"></a>
      </div>
      <div class="image">
      <img src="images/product-2.png" alt="">
      </div> 
      <div class="content">
         <h3>root coffee beans</h3>
         <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">159.99 rs<span>190.99</span></div>
         </div>
         </div>
         <div class="box">
         <div class="icons">
         <a href="#" class="fas fa-shopping-cart"></a>
         <a href="#" class="fas fa-heart"></a>
         <a href="#" class="fas fa-eye"></a>
         </div>
         <div class="image">
         <img src="images/product-3.png" alt="">
         </div>
         <div class="content">
         <h3>frowner's coffee</h3>
         <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">299.99 <span>300.99</span></div>
         </div> 
      </div>
   </div>
  </section>
  <!-- review section starts -->
  <section class="review" id="review">
   <h1 class="heading"> customer's <span>review</span> </h1>
   <div class="box-container">
   <div class="box">
   <img src="images/quote-img.png" alt="" class="quote">
   <p> I have always ordered this flavour from my previous coffee supplier, it's just as good now from the love
  of coffee</p>
   <img src="images/rana.jpeg" class="user" alt="">
   <h3>rana</h3>
   <div class="stars">
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star-half-alt"></i>
   </div>
   </div>
   <div class="box">
   <img src="images/quote-img.png" alt="" class="quote">
   <p>This coffee has a bit of sweetness without compromising the taste. good for afternoon when you want
  something sweeter.</p>
   <img src="images/thamanna.jpeg" class="user" alt=""> 
   <h3>thamanna</h3>
 <div class="stars">
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star-half-alt"></i>
 </div>
 </div>

 <div class="box">
 <img src="images/quote-img.png" alt="" class="quote">
 <p>This is one of our favourites and the love of coffee delivered it in time for my Saturday am coffee.</p>
 <img src="images/prabhas-1.jpg" class="user" alt="">
 <h3>prabhas</h3>
 <div class="stars">
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star-half-alt"></i>
 </div>
 </div>
 </div>
</section>
<!-- review section ends -->
<!-- contact section starts -->
<section class="contact" id="contact">
   <h1 class="heading"> <span>contact</span> us </h1>
   <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3885.521635323221!2d77.5854701148237!3d13.12946269075242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae170d10bb559b%3A0x2bb3892a626cf9ba!2sNitte%20Meenakshi%20Institute%20of%20Technology%2C%206429%2C%20NITTE%20Meenakshi%20College%20Rd%2C%20BSF%20Campus%2C%20Yelahanka%2C%20Bengaluru%2C%20Karnataka%20560064!3m2!1d13.1294627!2d77.5876588!5e0!3m2!1sen!2sin!4v1663431703823!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   <form action="">
   <h3>get in touch</h3>
   <div class="inputBox">
   <span class="fas fa-user"></span>
   <input type="text" placeholder="name">
   </div>
   <div class="inputBox">
   <span class="fas fa-envelope"></span>
   <input type="email" placeholder="email">
   </div>
   <div class="inputBox">
   <span class="fas fa-phone"></span>
   <input type="number" placeholder="number">
   </div>
   <input type="submit" value="contact now" class="btn">
   </form>
   </div>
  </section>
  <!-- contact section ends -->
  <!-- blogs section starts -->
  <section class="blogs" id="blogs">
   <h1 class="heading"> our <span>blogs</span> </h1>
   <div class="box-container">
   <div class="box">
   <div class="image">
   <img src="images/Fresh.jpeg" alt="">
   </div>
   <div class="content">
   <a href="#" class="title">tasty cappuccino</a>
  
   <p>Cappuccino was traditionally a taste largely appreciated in Europe, Australia</p>
   <a href="https://en.wikipedia.org/wiki/Cappuccino" target="_blank" class="btn">read more</a>
   </div>
   </div>
   <div class="box">
   <div class="image">
   <img src="images\blackcoffee.jpg" alt="">
   </div>
   <div class="content">
   <a href="#" class="title">Black coffee</a>
  
   <p>Black coffee rich in antioxidants helps you to fight with cell damage</p>
   <a href="https://www.healthifyme.com/blog/black-coffee/" target ="_blank" class="btn">read more</a>
   </div>
   </div>
   <div class="box">
   <div class="image">
      <img src="images/Creamy .jpeg" alt="">
 </div>
 <div class="content">
 <a href="#" class="title">creamy cahsew coffee</a>
 <p>cashew creamy increases the taste coffee.</p>
 <a href="https://itdoesnttastelikechicken.com/the-best-cashew-coffee-creamer/" target="_blank"
class="btn">read more</a>
 </div>
 </div>
 </div>
</section>
<!-- blogs section ends -->
<!-- footer section starts -->
<section class="footer">
 <div class="share">
 <a href="https://www.instagram.com/_tharunkamsala/" target="_blank" class="fab fa-instagram"></a>
 <a href="https://www.linkedin.com/in/tharun-k-b648571b9/" class="fab fa-linkedin" target="_blank"></a>
 </div>
 <div class="links">
 <a href="#">home</a>
 <a href="#">about</a>
 <a href="#">menu</a>
 <a href="#">products</a>
 <a href="#">review</a>
 <a href="#">contact</a>
 <a href="#">blogs</a>
</div>
</section>
<!-- footer section ends -->
<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html> 