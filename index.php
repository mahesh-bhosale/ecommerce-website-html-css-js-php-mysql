<?php
session_start();
include("config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doormart | Ecommerce Website Design</title>
    <link rel="icon" href="images/favcon.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    
    <!-- linl for nav -->
      <!-- Font Awesome Icons -->
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="cart.css" />
    <link rel="stylesheet" href="footer.css">
  </head>
  <body>
    <section >
        <div class="header">
            <div class="container">
            <nav>
              <div class="navbar">
                <div class="logo">𝓓𝓞𝓞𝓡𝓜𝓐𝓡𝓣</div>
                <div class="highlight">
                  <!-- <div class="menu-icon" id="menu-icon"><i class="bx bx-menu"></i></div> -->
                  <ul id="navbar">
                  <li><a class="active" href="index.php"></a>Home</li>
                  <li><a href="shop.php">Shop</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="account.php">account</a></li>
                  <li id="shopcart" ><a href="cart.html"><i class="fa-solid fa-bag-shopping "><div id="badge"> 0 </div></i></a></li>                  </ul>
                  
                  <!-- <button id="logbtn">login</button>  -->
                </div>
              </div>
            </nav>
              <div class="banner">
                <div class="column">
                  <h1>Lorem ipsum dolor <br />Lorem ipsum dolor sit.</h1>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur <br />
                    atque eveniet eum nemo quod voluptatem amet distinctio asperiores?
                  </p>
                  <a href="shop.html" class="bannerbtn">Shope Now &#8594;</a>
                </div>
                <div class="column">
                  <img src="images/banner/banner.png" alt="" />
                </div>
              </div>
            </div>
          </div>
    </section>

    <!-- NEW SLIDER -->

    <div class="slider">
      <h2>advertisements</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
    </div>

    <div class="slideshow-container">
      <div class="mySlides fade">
        <!-- <div class="numbertext">1 / 3</div> -->
        <img src="images/advertise/ad-1.jpg" style="width: 100%" />           
        <!-- <div class="text">Caption Text</div> -->
      </div>

      <div class="mySlides fade">
        <!-- <div class="numbertext">2 / 3</div> -->
        <img src="images/advertise/ad-2.jpg" style="width: 100%" />
        <!-- <div class="text">Caption Two</div> -->
      </div>

      <div class="mySlides fade">
        <!-- <div class="numbertext">3 / 3</div> -->
        <img src="images/advertise/ad-3.jpg" style="width: 100%" />
        <!-- <div class="text">Caption Three</div> -->
      </div>
    </div>
    <br />

    <div style="text-align: center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <!-- cart  -->
    
    <section id="Product1" class="section-p1">
      <h2>Trending Froduct</h2>
      <p>Summer Collection New Morden Design</p>
      <div class="pro-container">
        <div class="pro">
          <img src="images/products/f1.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>xyz t shirt</h5>
            <div class="star">
              <i class="fas fa-star "></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#x20b9;999</h4>
          </div>
          <a href=""><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/products/f2.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>xyz t shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#x20b9;1799</h4>
          </div>
          <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/products/f3.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>xyz t shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#x20b9;999</h4>
          </div>
          <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/products/f4.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>xyz t shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#x20b9;999</h4>
          </div>
          <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/products/f5.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>xyz t shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#x20b9;1999</h4>
          </div>
          <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/products/f6.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>xyz t shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#x20b9;2999</h4>
          </div>
          <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/products/f7.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>xyz t shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#x20b9;7899</h4>
          </div>
          <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/products/f8.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>xyz t shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#x20b9;999</h4>
          </div>
          <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
      </div>
    </section>
                            <!-- footeer -->
    <!-- <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers.</span>
       </p>
    </div>
    <div class="form">
    <input type="text" placeholder="Your email address">
    <button class="normal">Sign Up</button>
    </div>
    </section> -->
   
    <footer class="section-p1">
      <div  class="col">
         <!-- <img class="logo" src="img/logo.png" alt=""> -->
         <div class="logo">𝓓𝓞𝓞𝓡𝓜𝓐𝓡𝓣</div>
         <h4>Contract</h4>
         <address style="font-style: normal;">
         <p>ADDRESS: <br> Terna College,Mumbai</p><br>
         PHONE NO:<a href="tel:+91-9594725359">9594725359</a><br>
         E-mail:<a href="mailto:msb1212004@gmail.com">msb1212004@gmail.com</a>
         </address>
         <p>TIME </BR> 10:00 - 18:00, Mon - Sat</p>
         <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
               <a href="https://www.facebook.com/profile.php?id=100059935246751" target="_blank"><i class="fab  fa-facebook-f"></i></a>
               <a href="https://twitter.com/MaheshB47410026" target="_blank"><i class="fab  fa-twitter"></i></a>
               <a href="https://www.instagram.com/maheshbhosale45/?next=%2F" target="_blank"><i class="fab  fa-instagram"></i></a>
               <i class="fab  fa-pinterest"></i>
               <i class="fab  fa-youtube"></i>
               <a href="https://www.linkedin.com/in/mahesh-bhosale-ba7752257/" target="_blank"><i class="fab fa-linkedin"></i></a>

            </div>
         </div>
      </div>
   
      <div class="col">
         <h4>About</h4>
         <a href="about.html">About us</a>
         <a href="#">Delivery Information</a>
         <a href="#">Privacy Policy</a>
         <a href="#">Terms & Conditions</a>
         <a href="contact.html">Contact Us</a>
      </div>
   
      <div class="col">
         <h4>My Account</h4>
         <a href="login.php">Sign In</a>
         <a href="cart.html">View Cart</a>
         <a href="#">My Wishlist</a>
         <a href="#">Track My Order</a>
         <a href="contact.html">Help</a>
      </div>
   
      
   
      
    </footer>
   
   
   

    <script src="script.js"></script>
  </body>
</html>
