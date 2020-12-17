<?php get_header() ?>

  <section class="page-container">
    <div class="section-title">
      <h1>Alternativas Tecnas Plant Based</h1>
    </div>
    <div class="featured-slider">
        <?php $args = array( 'post_type' => 'destacados'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="featured-card">
        <div class="featured-card-img">
          <img src=" <?php echo get_the_post_thumbnail_url(); ?>">
        </div>
        <div class="featured-card-info">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
          <a class="btn btn-custom" href="/featured-detail.html">Leer más</a>
        </div>
      </div>
       <?php  endwhile; ?>  
    </div>
  </section>
  <?php get_footer() ?> 
