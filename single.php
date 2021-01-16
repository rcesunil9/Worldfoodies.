<?php get_header(); ?>
<div class="container-fluid" style="background-color: rgb(238, 238, 238);" id="single-header-banner-ads">
  <div class="row" style="margin: 0px auto 1rem; padding: 0.5em 0px 0.1em; width: fit-content;" id="header-ads">
    <div class="single-ads"><!--ads here -->
    </div>
  </div>
</div>
<main id="content" class="container my-1">
  <div class="row">
    <div class="col-md-12 col-lg-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'entry' ); ?>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-md-12 col-lg-4 position-relative">
      <?php get_sidebar(); ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>