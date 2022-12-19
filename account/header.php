  <?php require 'links.php';?>
  <header id="header">
    <div class="d-flex flex-column">
  

      <div class="profile">
        <img src="assets/img/123.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php echo $username;?></a></h1>
      </div>

      <nav class="nav-menu">
        <ul> 
          <li><a href="account.php"><i class="bx bx-home"></i> <span>Account</span></a></li>
          <li><a href="products.php"><i class="bx bxs-purchase-tag-alt"></i> <span>Products</span></a></li>
          <li><a href="shopping_cart.php"><i class="bx bx-cart"></i> <span>Shopping Cart
</span></a> </li>
          <li><a href="settings.php"><i class="bx bxs-cog"></i> Settings</a></li>
          <li><a href="trackorders.php"><i class="bx bx-store"></i> Track Orders</a></li>
          <li><a href="log out.php?logout"><i class="bx bx-log-out"></i> Log Out</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header>

