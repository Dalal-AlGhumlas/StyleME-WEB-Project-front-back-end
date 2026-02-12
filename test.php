<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Your Cart — StyleMe</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body data-page="cart">
  <header class="site-header">
  <div class="container nav">
    <a class="brand" href="index.html">Style<span class="dot">Me</span></a>

    <form class="search" id="navSearch" action="products.html" method="get">
      <input type="search" name="q" id="q" placeholder="Search for items…" />
      <button class="btn" type="submit">Search</button>
    </form>
<nav class="nav-links" id="navLinks">
  <a href="index.html" data-nav="home">Home</a>
  <a href="products.html" data-nav="products">Products</a>
  <a href="cart.html" data-nav="cart">Cart <span class="badge" id="cartBadge">0</span></a>
  <a href="contact.html" data-nav="contact">Contact</a>
  <span id="userSlot"><a href="login.html">Login</a> / <a href="register.html">Register</a></span>
</nav>

  </div>
</header>


  <main class="container layout-2col">
    <section>
      <h2>Your Cart</h2>
      <div id="cartList" class="cart-list"></div>
      <button id="clearCart" class="btn danger mt">Clear Cart</button>
    </section>
    <aside class="summary">
      <h3>Total</h3>
      <p id="cartTotal">0 SAR</p>
      <a href="checkout.html" class="btn">Proceed to Checkout</a>
    </aside>
  </main>

  <footer class="site-footer">
    <div class="container">© 2025 StyleMe — All rights reserved</div>
  </footer>
  <div class="toast" id="toast"></div>
  <script src="assets/js/main.js?v=6"></script>

</body>
</html>
