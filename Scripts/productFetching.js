const container = document.querySelector(".product-lineup");
container.innerHTML = "";

async function getProductData() {
  try {
    const response = await fetch(`http://localhost/WaveAura/Backend/product.php`);
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    const data = await response.json();
    return data;
  } catch (err) {
    console.error("Something Went Wrong", err);
  }
}

async function renderProductData() {
  let data = await getProductData();

  data.forEach((product) => {
    const catDiv = document.createElement("div");
    catDiv.classList.add("product-card");
    catDiv.dataset.id = product.id;

    catDiv.innerHTML = `
      <figure class="product-figure">
        <img
          src="${product.imgSrc}"
          alt="${product.altTxt}"
          class="product-image"
        />
      </figure>
      <div class="product-data-section">
        <h3>${product.name}</h3>
        <div class="product-data-rating">
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <h5>(12 Reviews)</h5>
        </div>
        <div class="product-price-buynow">
          <span class="amount">₹${product.price}</span>
          <a href="#" class="buy-button" data-product-id="${product.id}">Add to Cart</a>
        </div>
      </div>
    `;

    container.appendChild(catDiv);
  });

  attachAddToCartListeners();
}

function attachAddToCartListeners() {
  const buttons = document.querySelectorAll(".buy-button");

  buttons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      const productId = this.dataset.id;

      fetch("http://localhost/WaveAura/Backend/add_to_cart.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `product_id=${productId}`
      })
      .then(res => res.json())
      .then(data => {
        if (data.status === "success") {
          alert("✅ Product added to cart!");
        } else {
          if (data.redirect) {
            window.location.href = data.redirect;
          } else {
            alert("❌ Error: " + data.message);
          }
        }
      })
      .catch(err => {
        console.error("Error adding to cart:", err);
      });
    });
  });
}

renderProductData();
