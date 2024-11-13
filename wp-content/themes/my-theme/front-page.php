<?php

get_header();
?>

	<main id="primary" class="site-main">

	

  <section class="container pb-5 pt-4">
  <style>
  .carousel-item img {
    height: 500px;
    object-fit: cover;
  }
</style>
  <div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>">
          <img src="<?php echo get_template_directory_uri();?>/img/slider/slider1.jpg" class="d-block w-100" alt="...">
          
        </a>
      </div>
      <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>">
      <div class="carousel-item" data-bs-interval="2000">
        <img src="<?php echo get_template_directory_uri();?>/img/slider/slider2.jpg" class="d-block w-100" alt="...">
        </a>
      </div>
      <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>">
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri();?>/img/slider/slider3.jpg" class="d-block w-100" alt="...">
        </a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>





  <section class="categories pt-5 pb-5">

    <div class="container">
    <h1 class="text-center pt-5">Kategooriad</h1>
    <p class="text-center">
    </p>

    <div class="row pt-5">
      <div class="categories_col col-md-3 col-sm-12">
        <a href="http://localhost/shop/product-category/playstation-4/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
          <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/ps4.png" alt="..." loading="lazy">

        </a>
      </div>

      <div class="categories_col col-md-3 col-sm-12">
        <a href="http://localhost/shop/product-category/playstation-5/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
          <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/ps5.png" alt="..." loading="lazy">

        </a>
      </div>

      <div class="categories_col col-md-3 col-sm-12">
        <a href="http://localhost/shop/product-category/nintendo-switch/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
          <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/nintendo.webp" alt="..." loading="lazy">

        </a>
      </div>

      <div class="categories_col col-md-3 col-sm-12">
        <a href="http://localhost/shop/product-category/xbox-one/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
          <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/xbox.png" alt="..." loading="lazy">

        </a>
      </div>
    </div>
    </div>

  </section>






  <section class="container pt-5" style="padding-top: 400px">




  </section>


	</main>

<?php
get_footer();
