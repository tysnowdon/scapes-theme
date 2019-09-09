<nav class="navbar navbar-expand-lg navbar-light" id="custom-nav">
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
      <img src="<?php echo get_stylesheet_directory_uri().'/assets/search-symbol.png' ?>" alt="" id="search-symbol">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Store..." aria-label="Search" id="search-bar">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

