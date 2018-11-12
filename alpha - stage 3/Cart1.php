<?php 
	$Header="E-Valley";
	require 'Base/header.php';
?>
<head>
	<link href="Cart.css" rel="stylesheet">
</head>
 
<div id='cart'>
  <h2>Your Shopping Cart</h2>
  <ul class='cart-items'></ul>
  <div class='total'>
    <div class='subtotalTotal'>
      Subtotal
      <span>$0.00</span>
    </div>
    <div class='taxes'>
      Tax
      <span>$0.00</span>
    </div>
    <div class='shipping'>
      Shipping
      <span>$0.00</span>
    </div>
    <div class='finalTotal'>
      Total
      <span>$0.00</span>
    </div>
    <a class='checkout'>
      Check Out
    </a>
    <p class='error'></p>
  </div>
</div>
<div class='wrap' id='wrap'>
  <header>
    <a class='logo' href='#'>
      Octocat <span class="brandico-github"></span> Outfitters
    </a>
    <a class='cart-link' href='#menu'>
      <span class='cart-text fontawesome-shopping-cart'>
        <span>Cart</span>
      </span>
      <span class='returnToShop'>&larr; Back</span>
      <span class='cart-quantity empty'>0</span>
    </a>
  </header>
  <section class='shop'></section>
  <footer>
    <p>Crafted for the Pattern Rodeo (rodeo-007). Images belong to Github.</p>
  </footer>
</div>
<!-- / Product Templates for Shop & Cart -->
<script id='productTemplate' type='text/template'>
  <div class="product">
  <h1></h1>
  <p></p>
  <div class="button">
  <div class="price"></div>
  <a class="addtocart">
  <div class="add">Add to Cart</div>
  <div class="added">Added!</div>
  </a>
  </div>
  </div>
</script>
<script id='cartItem' type='text/template'>
  <li><div class="cart-product">
  <input class="quantity" value="1">
  </div><div class="cart-description">
  <h3></h3>
  <span class="subtotal"></span>
  </div></li>
</script>

 <!-- Footer -->
	    <?php require ("Base/footer.php");?>