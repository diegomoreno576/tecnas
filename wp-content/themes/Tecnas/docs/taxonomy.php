<?php get_header() ?>

  <div class="main-page">
    <div class="container">
      <div class="row">
        <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
        
        <div class="col-lg-6">
          <div class="section-title left">
            <h1>
             <?php the_title(); ?>
            </h1>
          </div>
          <div class="portfolio-detail-text">
            <p><?php the_content(); ?></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="portfolio-detail-img">
            <img alt="Curcumina" src="  <?php echo get_the_post_thumbnail_url(); ?>">
          </div>
        </div>
         <?php
            }
    } ?>
      </div>
    </div>
  </div>
<?php get_footer() ?> 

