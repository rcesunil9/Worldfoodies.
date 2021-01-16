<?php get_header(); ?>

  <div class="row">
    <div class="col-md-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
          endwhile;
          echo paginate_links();
          // next_post_link();
        ?>
    </div>
   <!--  <div class="col-md-6">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
          endwhile;
          previous_post_link();
        ?>
    </div> -->
  </div>
<?php get_footer(); ?>