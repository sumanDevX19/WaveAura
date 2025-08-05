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
  <link rel="stylesheet" href="../Stylesheets/style.css" />
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
  <header class="head-section">
    <div class="head-left">
      <h2>WaveAura</h2>
    </div>
    <nav class="head-right">
      <a href="#home" class="navlink">Home</a>
      <a href="plp.php" class="navlink" id="store">Store</a>
      <a href="#" class="navlink">About</a>
      <a href="#contact" class="navlink">Contact</a>


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
            <a href="plp.php">Sony Headset</a>
            <a href="plp.php">Samsung Headset</a>
            <a href="plp.php">Apple Headset</a>
            <a href="plp.php">Headset Under 40000/-</a>
            <a href="plp.php">Headset Under 30000/-</a>
            <a href="plp.php">Headset Under 20000/-</a>
            <a href="plp.php">Headset Under 10000/-</a>
          </div>
          <div class="navmenu-column">
            <h5 class="heading-menu">Gaming Headset</h5>
            <a href="plp.php">Sony Headset</a>
            <a href="plp.php">Samsung Headset</a>
            <a href="plp.php">Apple Headset</a>
            <a href="plp.php">Headset Under 40000/-</a>
            <a href="plp.php">Headset Under 30000/-</a>
            <a href="plp.php">Headset Under 20000/-</a>
            <a href="plp.php">Headset Under 10000/-</a>
          </div>
          <div class="navmenu-column">
            <h5 class="heading-menu">Production Headset</h5>
            <a href="plp.php">Sony Headset</a>
            <a href="plp.php">Samsung Headset</a>
            <a href="plp.php">Apple Headset</a>
            <a href="plp.php">Headset Under 40000/-</a>
            <a href="plp.php">Headset Under 30000/-</a>
            <a href="plp.php">Headset Under 20000/-</a>
            <a href="plp.php">Headset Under 10000/-</a>
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

    <!-- First Section  -->
    <section class="hero-section" id="home">
      <div class="left-hero">
        <h2>Experience the Ultimate Range of Hearing.</h2>
        <p>
          Welcome to WaveAura. Get Exiting Deals on All range of Products!
          Hurry Limited period Offer.
        </p>

        <a href="plp.php">Order Now</a>
      </div>
      <div class="right-hero">
        <figure>
          <img
            src="../headphone_resources/image.png"
            id="hero-image"
            alt="Best Selling Headset Product" />
        </figure>
      </div>
    </section>

    <!-- Second Section  -->
    <section class="product-category-section" id="hero">
      <h2 class="product-catagory-heading">Headphone Categories</h2>
      <div class="product-categories" id="category-area">
        <!-- <div class="product">
            <figure class="menu-back">
              <img
                src="../headphone_resources/menu1.jpg"
                class="menu-image"
                alt="realme buds image"
              />
            </figure>
            <h3>Realme Buds</h3>
          </div>
          <div class="product">
            <figure class="menu-back">
              <img
                src="../headphone_resources//menu2.jpg"
                class="menu-image"
                alt="realme coller headphone"
              />
            </figure>
            <h3>Realme Buds</h3>
          </div>
          <div class="product">
            <figure class="menu-back">
              <img
                src="../headphone_resources//menu3.jpg"
                class="menu-image"
                alt="realme air buds"
              />
            </figure>
            <h3>Realme Buds</h3>
          </div>
          <div class="product">
            <figure class="menu-back">
              <img
                src="../headphone_resources//menu4.jpg"
                class="menu-image"
                alt="realme pods"
              />
            </figure>
            <h3>Realme Buds</h3>
          </div>
          <div class="product">
            <figure class="menu-back">
              <img
                src="../headphone_resources//menu5.jpg"
                class="menu-image"
                alt="Noise buds"
              />
            </figure>
            <h3>Realme Buds</h3>
          </div>
          <div class="product">
            <figure class="menu-back">
              <img
                src="../headphone_resources//headphone2.jpg"
                class="menu-image"
                alt="Zebronics Headset"
              />
            </figure>
            <h3>Realme Buds</h3>
          </div>
          <div class="product">
            <figure class="menu-back">
              <img
                src="../headphone_resources//headphone4.jpg"
                class="menu-image"
                alt="Amazon Basic Headset"
              />
            </figure>
            <h3>Realme Buds</h3>
          </div> -->
      </div>
    </section>

    <!-- Third Section  -->

    <section class="product-gallery" id="product-gallery">
      <h2 class="product-gallary-heading">Ultimate range of Products</h2>
      <div class="product-lineup">
        <!-- Data is Coming from js -->
      </div>
    </section>

    <!-- Fourth Section  -->
    <section class="contact-section" id="contact">
      <h2 class="contact-heading">Contact Us</h2>
      <div id="toast" class="toast">
        <span id="toast-message"></span>
      </div>
      <div class="contact-container">
        <div class="contact-left">
          <figure class="image-container">
            <img
              src="../headphone_resources//frontimage.png"
              alt="Apple Headphone image"
              id="contact-image" />
          </figure>
        </div>
        <div class="contact-right">
          <h2>Contact Us</h2>
          <form action="#" method="get" id="contact-from">
            <input
              class="contact-field"
              type="text"
              placeholder="Name"
              required
              name="name"
              pattern="^[A-Za-z\s]+$" />
            <br>
            <span class="error" id="nameError"></span><br />

            <input
              class="contact-field"
              type="email"
              placeholder="Email"
              required
              name="email"
              pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" />
            <br>
            <span class="error" id="emailError"></span><br />

            <textarea
              class="contact-textarea"
              name="message"
              placeholder="Your Message"
              rows="5"
              required></textarea>
            <br>
            <span class="error" id="messageError"></span><br />

            <input class="contact-submit" type="submit" value="Submit" />
          </form>
        </div>
      </div>
    </section>

    <!-- Fifth Section  -->
    <section class="embaded-video-section">
      <h2 class="video-heading">Exclusive Limited Edition</h2>
      <div class="video-section">
        <iframe
          class="frames"
          src="https://www.youtube.com/embed/WKdotkKJQYQ?si=FWkCxc-ji3oe0IFR"
          title="YouTube video player"
          frameborder="0"

          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"></iframe>

        <iframe
          class="frames"
          src="https://www.youtube.com/embed/Cw6NXfP9BDg?si=xrJxxtvxJ8mdBjBN"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"></iframe>
        <iframe
          class="frames"
          src="https://www.youtube.com/embed/qPx4_GuHI4w?si=HTqEYwc4dFWp1lMd"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"></iframe>
      </div>
    </section>

    <!-- Sixth Section  -->
    <section class="newletter-section">
      <div class="newletter-section-container">
        <h2 class="newletter-section-text">
          Want New Product News and Updates? <br />
          Sign up for our Newsletter
        </h2>
        <form action="" id="newsletter-form">
          <input
            type="email"
            class="newletter-input"
            placeholder="Email"
            required
            id="email-news"
            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" />
          <span id="emailError" style="color: red;"></span>
          <input type="submit" value="Subscribe" class="newletter-submit" />
        </form>
      </div>
    </section>
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
  <!-- External JS  -->
  <script src="../Scripts/menutoggler.js"></script>
  <script src="../Scripts//productFetching.js"></script>
  <!-- Internal JS  -->
  <script>
    function showToast(message, type = "success") {
      const toast = document.getElementById("toast");
      const msg = document.getElementById("toast-message");

      msg.textContent = message;

      toast.className = `toast show ${type}`;

      setTimeout(() => {
        toast.className = "toast"; // hide after 3 sec
      }, 3000);
    }
    document.getElementById("contact-from").addEventListener("submit", async function(e) {
      e.preventDefault();

      // Clear previous errors
      document.getElementById("nameError").textContent = "";
      document.getElementById("emailError").textContent = "";
      document.getElementById("messageError").textContent = "";

      let isValid = true;

      const formData = new FormData(this);

      for (let [field, value] of formData.entries()) {
        switch (field) {
          case "name":
            if (value.trim() === "") {
              document.getElementById("nameError").textContent = "Name is required.";
              isValid = false;
            }
            break;

          case "email":
            const emailRegex = /^\S+@\S+\.\S+$/;
            if (!emailRegex.test(value.trim())) {
              document.getElementById("emailError").textContent = "Invalid email address.";
              isValid = false;
            }
            break;

          case "message":
            if (value.trim().length < 10) {
              document.getElementById("messageError").textContent = "Message must be at least 10 characters.";
              isValid = false;
            }
            break;

          default:
            console.warn(`Unexpected field: ${field}`);
        }
      }




      if (isValid) {
        try {
          const response = await fetch(`http://localhost/WaveAura/Backend/contact.php`, {
            method: "POST",
            body: formData
          });

          if (!response.ok) {
            throw new Error(`Formdata Sending Error ${response.status}`)
          }

          const result = await response.text();
          if (result.includes("✅ User registered successfully")) {
            // ✅ Signup successful → redirect to login page
            showToast("✅ Message Sent Sucessfully...", "success");

          } else {
            // ❌ Show message on screen instead
            console.log("Signup failed: " + result);

            showToast("❌ Email already exists!", "error");
          }


        } catch (err) {
          console.error("Something Went Wrong", err);
        }



        this.reset();
      }
    });
  </script>

  <!-- Category Data  -->
  <script>
    const category = document.querySelector("#category-area");
    console.log(category);
    category.innerHTML = "";

    async function getCategoryData() {

      try {
        const response = await fetch(`http://localhost/WaveAura/Backend/category.php`);

        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`)
        }

        const data = await response.json();
        return data;
      } catch (err) {
        console.error("Something Went Wrong", err);
      }
    }

    async function renderCategory() {
      let data = await getCategoryData();

      console.log(data);


      data.forEach((cate) => {
        const catDiv = document.createElement("div");
        catDiv.classList.add("product");

        catDiv.innerHTML = `
            <a href="#">
            <figure class="menu-back">
            
              <img
                src="${cate.imgsrc}"
                class="menu-image"
                alt="${cate.name} image"
          />
          
        </figure>
        </a>
        <h3>${cate.name}</h3>
        `;

        category.appendChild(catDiv);


      })
    }

    renderCategory()
  </script>

  <!-- Newsletter -->
  <script>
    document.getElementById("newsletter-form").addEventListener("submit", async function(e) {
      e.preventDefault(); // Prevent form from reloading

      const emailInput = document.getElementById("email-news");
      const emailError = document.getElementById("emailError");
      const email = emailInput.value.trim();

      // Clear previous error
      emailError.textContent = "";

      // Email validation regex
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!emailRegex.test(email)) {
        emailError.textContent = "Please enter a valid email address.";
        return;
      }

      // Create FormData and send to PHP
      const formData = new FormData();
      formData.append("email", email);

      try {
        const res = await fetch(
          "http://localhost/WaveAura/Backend/newsletter.php", {
            method: "POST",
            body: formData,
          }
        );

        const result = await res.text();

        if (result.includes("Email Saved Successfully")) {
          // ✅ Signup successful → redirect to login page
          showToast("✅ Email Saved Successfully", "success");

        } else {
          // ❌ Show message on screen instead
          console.log("Email Not Saved " + result);

          showToast("❌ Email Not Saved", "error");
        }
      } catch (err) {
        console.log(err.message);
      }
      this.reset();

    });
  </script>






</body>


</html>