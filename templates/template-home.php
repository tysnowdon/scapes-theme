<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container-fluid" id="homepage-content">

			<!-- For Desktop -->
			<div class="row mt-4 mb-4" id="home-top-half">
				<div class="col-6 img-container">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri().'/assets/homepage/capes.jpg' ?>" class="home-thumb-img rounded mx-auto d-block" alt="Shop Hero Capes" id="capes-thumb">
						<p class="home-img-text text-center" id="home-capes-text">SHOP 
							HERO CAPES</p>
					</a>
				</div>
				<div class="col-6 img-container">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri().'/assets/homepage/masks.jpg' ?>" class="home-thumb-img rounded mx-auto d-block" alt="Shop Accessories" id="capes-masks">
						<p class="home-img-text text-center" id="home-accessories-text">SHOP 
							ACCESSORIES</p>
					</a>
				</div>
			</div>
			<!-- end home-top-half desktop view -->

			<!-- Mobile top half -->
			<div class="row mb-4" id="mobile-home-top-half">
				<div class="col-12 slider">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri().'/assets/homepage/mobile-slider-1.png' ?>" alt="Plain Capes">
								<div class="carousel-caption">
									<a href="#" class="btn btn-sm BTN-SUCCESS">SHOP NOW</a>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri().'/assets/homepage/mobile-slider-2.png' ?>" alt="Superhero Capes">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri().'/assets/homepage/mobile-slider-3.png' ?>" alt="Printed Hero Capes">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri().'/assets/homepage/mobile-slider-4.png' ?>" alt="Superhero Accessories">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<!-- end mobile top half -->

			<div class="row">
				<div class="col-12">
					<?php 
						if (have_posts()):
							while (have_posts()) : the_post();
							the_content();
							endwhile;
						endif;
					?>
				</div>
			</div>
		</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// do_action( 'storefront_sidebar' );
get_footer();
