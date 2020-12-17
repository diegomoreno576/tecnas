<?php get_header() ?>

  <section class="main-slider">
      <?php $args = array( 'post_type' => 'banner'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="main-slider-item">
      <img alt="Slider 1" src="<?php echo get_the_post_thumbnail_url(); ?>">
      <div class="main-slider-text">
        <h1><?php the_title(); ?></h1>
      </div>
      <a class="main-slider-btn" href="#">
        Etiquetado limpio
        <br>
        <span>VER MÁS</span>
      </a>
    </div>
    <?php  endwhile; ?>
  </section>
   <?php get_footer() ?> 