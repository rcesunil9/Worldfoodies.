<?php get_header(); ?>

<main id="content" class="container my-4">
  <div class="row">
    <div class="col-md-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
      <?php the_content(); ?>
      <div class="entry-links"><?php wp_link_pages(); ?></div>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-md-4 position-relative">
      <?php get_sidebar(); ?>
    </div>
  </div>

</main>
<?php get_footer(); ?>