<<?php get_header() ?>

  <section class="page-container">
    <div class="section-title">
      <h1>Nuestros Aliados</h1>
    </div>
    <div class="clients-slider">
       <?php $args = array( 'post_type' => 'clientes'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="client-item">
        <img src="   <?php echo get_the_post_thumbnail_url(); ?>">
        <h3><?php the_title(); ?></h3>
      </div>
    <?php  endwhile; ?>  
    </div>
  </section>
<?php get_footer() ?> 