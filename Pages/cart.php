<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Suman Saha" />
  <meta
    name="keywords"
    content="Headphone Store, E-commerce, E-comm Store, Online Shopping" />
  <meta
    name="description"
    content="WaveAura is a Online store of Headsets and Headphone at best price." />

  <title>WaveAura</title>
  <link rel="stylesheet" href="../Stylesheets/cartStyle.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link
    rel="shortcut icon"
    href="../headphone_resources/Favicon/favicon.ico"
    type="image/x-icon" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=shopping_cart" />
</head>

<body>
    <?php
    session_start();
    ?>
    <header class="head-section">
    <div class="head-left">
      <h2>WaveAura</h2>
    </div>
    <nav class="head-right">
      <a href="#home" class="navlink">Home</a>
      <a href="#hero" class="navlink" id="store">Store</a>
      <a href="#" class="navlink">About</a>
      <a href="#" class="navlink">Contact</a>


      <?php
      session_start();
      $fullName = $_SESSION['user_name'] ?? 'Guest';
      $nameParts = explode(" ", $fullName);
      $firstName = $nameParts[0] ?? 'Guest';


      ?>

      <script>
        const jwt = "<?php echo $_SESSION['jwt'] ?? ''; ?>";
        console.log(jwt);
      </script>




      <a href="#" class="navlink" id="user-container">Welcome, <?= $firstName ?>!</a>


      <?php if (isset($_SESSION['jwt'])): ?>
        <a href="../Pages/logout.php" class="navlink">Logout</a>
      <?php else: ?>
        <a href="../Pages/Login.html" class="navlink">Login</a>
      <?php endif; ?>
      <a href="cart.php" class="navlink"><span class="material-symbols-outlined" style="cursor: pointer;">
          shopping_cart
        </span></a>

      <!-- <a href="" class="navlink" id="usericon"><i class="fa-solid fa-circle-user fa-2xl"></i></a> -->
      <div class="navmenu">
        <div class="navmenu-container">
          <div class="navmenu-column">
            <h5 class="heading-menu">Professional Headset</h5>
            <a href="">Sony Headset</a>
            <a href="">Samsung Headset</a>
            <a href="">Apple Headset</a>
            <a href="">Headset Under 40000/-</a>
            <a href="">Headset Under 30000/-</a>
            <a href="">Headset Under 20000/-</a>
            <a href="">Headset Under 10000/-</a>
          </div>
          <div class="navmenu-column">
            <h5 class="heading-menu">Gaming Headset</h5>
            <a href="">Sony Headset</a>
            <a href="">Samsung Headset</a>
            <a href="">Apple Headset</a>
            <a href="">Headset Under 40000/-</a>
            <a href="">Headset Under 30000/-</a>
            <a href="">Headset Under 20000/-</a>
            <a href="">Headset Under 10000/-</a>
          </div>
          <div class="navmenu-column">
            <h5 class="heading-menu">Production Headset</h5>
            <a href="">Sony Headset</a>
            <a href="">Samsung Headset</a>
            <a href="">Apple Headset</a>
            <a href="">Headset Under 40000/-</a>
            <a href="">Headset Under 30000/-</a>
            <a href="">Headset Under 20000/-</a>
            <a href="">Headset Under 10000/-</a>
          </div>
        </div>
      </div>
    </nav>
    <a class="navlink" id="menu-icon"><i class="fa-solid fa-bars fa-2xl"></i></a>

    <div class="responsive-menu">
      <a href="" class="responsive-menu-icon">Home</a>
      <a href="" class="responsive-menu-icon">Store</a>
      <a href="" class="responsive-menu-icon">About</a>
      <a href="" class="responsive-menu-icon">Contact</a>
      <a href="" class="responsive-menu-icon">Sign Up</a>


    </div>
    
  </header>

  <main>
    <div class="main-container">
        <div class="left-section-main">
            <div class="cart-items">
                <div class="cart-item">
                    <div class="image-quantity">
                        <figure>
                            <img src="../headphone_resources/headphone1.jpg" width="100" alt="">
                        </figure>
                        <div class="quantity-div">
                            <button class="quantity-change-button">+</button>
                            <input type="text" value="1" class="quantity-cart-field">
                            <button class="quantity-change-button">-</button>

                        </div>
                    </div>
                    <div class="cart-product-details">
                        <div class="product-details">
                            <h3 class="product-heading">Boult Audio Headset</h3>
                            <h5 class="waveaura-assured">WaveAura Assured</h5>
                            <h5>₹3000</h5>

                        </div>
                        <div class="cart-products-buttons">
                            <div>REMOVE</div>
                        </div>
                    </div>
                </div>
                <div class="cart-item">
                    <div class="image-quantity">
                        <figure>
                            <img src="../headphone_resources/headphone1.jpg" width="100" alt="">
                        </figure>
                        <div class="quantity-div">
                            <button class="quantity-change-button">+</button>
                            <input type="text" class="quantity-cart-field">
                            <button class="quantity-change-button">-</button>

                        </div>
                    </div>
                    <div class="cart-product-details">
                        <div class="product-details">
                            <h3 class="product-heading">Boult Audio Headset</h3>
                            <h5 class="waveaura-assured">WaveAura Assured</h5>
                            <h5>₹3000</h5>

                        </div>
                        <div class="cart-products-buttons">
                            <div>REMOVE</div>
                        </div>
                    </div>
                </div>
                <div class="cart-item">
                    <div class="image-quantity">
                        <figure>
                            <img src="../headphone_resources/headphone1.jpg" width="100" alt="">
                        </figure>
                        <div class="quantity-div">
                            <button class="quantity-change-button">+</button>
                            <input type="text" class="quantity-cart-field">
                            <button class="quantity-change-button">-</button>

                        </div>
                    </div>
                    <div class="cart-product-details">
                        <div class="product-details">
                            <h3 class="product-heading">Boult Audio Headset</h3>
                            <h5 class="waveaura-assured">WaveAura Assured</h5>
                            <h5>₹3000</h5>

                        </div>
                        <div class="cart-products-buttons">
                            <div>REMOVE</div>
                        </div>
                    </div>
                </div>
                <div class="cart-item">
                    <div class="image-quantity">
                        <figure>
                            <img src="../headphone_resources/headphone1.jpg" width="100" alt="">
                        </figure>
                        <div class="quantity-div">
                            <button class="quantity-change-button">+</button>
                            <input type="text" class="quantity-cart-field">
                            <button class="quantity-change-button">-</button>

                        </div>
                    </div>
                    <div class="cart-product-details">
                        <div class="product-details">
                            <h3 class="product-heading">Boult Audio Headset</h3>
                            <h5 class="waveaura-assured">WaveAura Assured</h5>
                            <h5>₹3000</h5>

                        </div>
                        <div class="cart-products-buttons">
                            <div>REMOVE</div>
                        </div>
                    </div>
                </div>
                <div class="cart-item">
                    <div class="image-quantity">
                        <figure>
                            <img src="../headphone_resources/headphone1.jpg" width="100" alt="">
                        </figure>
                        <div class="quantity-div">
                            <button class="quantity-change-button">+</button>
                            <input type="text" class="quantity-cart-field">
                            <button class="quantity-change-button">-</button>

                        </div>
                    </div>
                    <div class="cart-product-details">
                        <div class="product-details">
                            <h3 class="product-heading">Boult Audio Headset</h3>
                            <h5 class="waveaura-assured">WaveAura Assured</h5>
                            <h5>₹3000</h5>

                        </div>
                        <div class="cart-products-buttons">
                            <div>REMOVE</div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="place-order-div">
                <a href="#" class="place-order-button">Place Order</a>
            </div>

        </div>
        <div class="right-section-main">
          <h3>Price Details</h3>
          <div class="price-div">
            <h6>Price (2 items)</h6>
            <h6>₹6000</h6>
          </div>
          <p>------------------------------------------</p>
          <div class="total-price">
            <h5>Total Price</h5>
            <h5>₹8000</h5>
          </div>
            <p>------------------------------------------</p>

        </div>

    </div>


  </main>


  <footer class="footer">
    <div class="footer-container">
      <div class="footer-column">
        <h3>About Us</h3>
        <p>
          Your go-to store for premium headphones. Experience sound like never
          before.
        </p>
      </div>
      <div class="footer-column">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="/shop">Shop</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/faq">FAQ</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Contact</h3>
        <p>Email: support@yourstore.com</p>
        <p>Phone: +1 (234) 567-890</p>
      </div>
      <div class="footer-column social">
        <h3>Follow Us</h3>
        <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 WaveAura. All rights reserved.</p>
    </div>
  </footer>

<script src="../Scripts/menutoggler.js"></script>
</body>

</html>