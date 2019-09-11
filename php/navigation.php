<!-- <div class="container-fluid">
  <div class="row" id="top-nav">
    <div class="col-2" id="logo-div">
      <img src="<?php echo get_stylesheet_directory_uri().'/assets/scapes-logo.png' ?>" alt="Logo" id="scapes-logo">
    </div>
    <div class="col-6 ml-auto">
      <div class="row">
        <div class="col-2"><a href="#">Log Out</a></div>
        <div class="col">/</div>
        <div class="col-3"><a href="#">Your Account</a></div>
        <div class="col">/</div>
        <div class="col-3"><a href="#">Follow us</a></div>
        <div class="col"><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/assets/social-media.png' ?>" alt="Social Media" id="social-media"></a></div>
      </div>
    </div>
  </div>

  <div class="row" id="middle-nav">
    <div class="col-8" id="left-side">
      <div class="row">
        <div class="offset-4 col-4" id="contact-div">
          <div class="row">
            <div class="col-4"><img src="<?php echo get_stylesheet_directory_uri().'/assets/contact-us.png' ?>" alt="Logo" id="contact-us"></div>
            <div class="col-8">
              <h3>CONTACT US</h3>
              <p>(Custom Orders)</p>
            </div>
          </div>
        </div>

        <div class="col-3" id="checkout-div">
          <div class="row">
            <div class="col-4"><img src="<?php echo get_stylesheet_directory_uri().'/assets/check-out.png' ?>" alt="Logo" id="contact-us"></div>
            <div class="col-8">
              <h3>CHECK OUT</h3>
              <p>(Shopping Cart)</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div> -->
<!-- end container -->

<nav class="navbar navbar-expand-lg navbar-light" id="custom-nav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php /* Primary navigation */
      wp_nav_menu( array(
        'menu' => 'top_menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'nav mr-auto',
        //Process nav menu using our custom nav walker
        'walker' => new wp_bootstrap_navwalker())
      );
    ?>
    <form class="form-inline my-2 my-lg-0">
      <img src="<?php echo get_stylesheet_directory_uri().'/assets/search-symbol.png' ?>" alt="Search" id="search-symbol">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Store..." aria-label="Search" id="search-bar">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
  <div class="row" id="mobile-search">
    <div class="col-12">
    <form class="form-inline my-2 my-lg-0">
      <img src="<?php echo get_stylesheet_directory_uri().'/assets/search-symbol.png' ?>" alt="Search" id="search-symbol">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Store..." aria-label="Search" id="search-bar">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </div>
</div>