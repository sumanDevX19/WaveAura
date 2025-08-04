function showToast(message, type = "success") {
      const toast = document.getElementById("toast");
      const msg = document.getElementById("toast-message");

      msg.textContent = message;

      toast.className = `toast show ${type}`;

      setTimeout(() => {
        toast.className = "toast"; // hide after 3 sec
      }, 3000);
    }

async function fetchCartData() {
  try {
    const res = await fetch("http://localhost/WaveAura/Backend/get_from_cart.php");
    const data = await res.json();

    if (data.status === "success") {
      renderCart(data.cart);
    } else {
      if (data.redirect) {
        window.location.href = data.redirect;
      } else {
        showToast(`❌ Error: ${data.message}`,"error");
      }
    }
  } catch (err) {
    console.error("Failed to fetch cart:", err);
  }
}

function renderCart(cartItems) {
  const container = document.querySelector(".cart-items");
  container.innerHTML = "";

  if(cartItems.length === 0){
    const emptycartdiv = document.createElement("div");
    emptycartdiv.classList.add("no-item-class");
    emptycartdiv.innerHTML = `<h1>Empty Cart </h1>`;
    container.appendChild(emptycartdiv);
    updateCartSummary()
  }else{
    container.innerHTML = "";
    cartItems.forEach(item => {
      const cartItemHTML = `
        <div class="cart-item" data-id="${item.id}">
          <div class="image-quantity">
            <figure>
              <img src="${item.imgSrc}" width="100" alt="${item.altText}">
            </figure>
            <div class="quantity-div">
              <button class="quantity-change-button increase">+</button>
              <input type="text" value="${item.quantity}" class="quantity-cart-field" readonly>
              <button class="quantity-change-button decrease">-</button>
            </div>
          </div>
          <div class="cart-product-details">
            <div class="product-details">
              <h3 class="product-heading">${item.name}</h3>
              <h5 class="waveaura-assured">WaveAura Assured</h5>
              <h5>₹${item.price}</h5>
            </div>
            <div class="cart-products-buttons">
              <div class="remove-cart-button" style="cursor: pointer;">REMOVE</div>
            </div>
          </div>
        </div>
      `;
      container.insertAdjacentHTML("beforeend", cartItemHTML);
    });

    attachCartActions();
    updateCartSummary()
  }
  

}

function updateCartSummary() {
  let totalItems = 0;
  let subtotal = 0;

  document.querySelectorAll(".cart-item").forEach(item => {
    const qty = parseInt(item.querySelector(".quantity-cart-field").value);
    const price = parseFloat(item.querySelector(".product-details h5:last-child").textContent.replace("₹", ""));
    subtotal += qty * price;
    totalItems += qty;
  });

  const totalItemsEl = document.getElementById("total-items");
  const subtotalEl = document.getElementById("price-subtotal");
  const totalPriceEl = document.getElementById("price-total");

  if (totalItemsEl) totalItemsEl.textContent = totalItems;
  if (subtotalEl) subtotalEl.textContent = subtotal.toFixed(2);
  if (totalPriceEl) totalPriceEl.textContent = subtotal.toFixed(2);
}





function attachCartActions() {
  document.querySelectorAll(".increase").forEach(btn => {
    btn.addEventListener("click", () => {
      updateQuantity(btn, 1)
      updateCartSummary()
      fetchCartData()
    
    });
  });

  document.querySelectorAll(".decrease").forEach(btn => {
    btn.addEventListener("click", () => {
      updateQuantity(btn, -1)
      updateCartSummary()
      fetchCartData()
    
    });
  });

  document.querySelectorAll(".remove-cart-button").forEach(btn => {
    btn.addEventListener("click", () => {
      removeFromCart(btn)
      updateCartSummary()
      fetchCartData()
    });
  });
}

function updateQuantity(button, delta) {
  const cartItem = button.closest(".cart-item");
  const productId = cartItem.dataset.id;
  const input = cartItem.querySelector(".quantity-cart-field");
  let newQty = parseInt(input.value) + delta;

  if (newQty < 1) return;

  fetch("http://localhost/WaveAura/Backend/update_cart_quantity.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `product_id=${productId}&quantity=${newQty}`
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === "success") {
      input.value = newQty;
    } else {
      showToast(`❌ Error: ${data.message}`,"error");
    }
  })
  .catch(err => console.error("Update quantity failed", err));
}

function removeFromCart(button) {
  const cartItem = button.closest(".cart-item");
  const productId = cartItem.dataset.id;

  fetch("http://localhost/WaveAura/Backend/remove_from_cart.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `product_id=${productId}`
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === "success") {
      cartItem.remove();
    } else {
      showToast(`❌ Error: ${data.message}`,"error");
    }
  })
  .catch(err => console.error("Remove failed", err));
}


fetchCartData()