<?php
/*
 * Template Name: Affiliate
 * Template Post Type: post
 */
get_header();
 ?>
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
<?php 
 $protocols = array('https://', 'http:// ','http://www.', 'www.');
?>
<script>
 const _a = document.querySelector('main article .entry-content');
 let x = document.getElementsByTagName('a');
 let a = document.querySelectorAll('a');
 for (let i = 0; i < a.length; i++) {
    a[i].addEventListener("click", function(event) {

           if(event.target.parentElement.href){
            if(!event.target.parentElement.href.includes('/?utm_source=freeproducts&utm_medium=<?php echo str_replace($protocols, '', site_url()); ?>')){
              event.target.parentElement.href = event.target.parentElement.href + `/?utm_source=freeproducts&utm_medium=<?php echo str_replace($protocols, '', site_url()); ?>`;
            } 
           }
          if(event.target.href){
            if(!event.target.href.includes('/?utm_source=freeproducts&utm_medium=<?php echo str_replace($protocols, '', site_url()); ?>')){
              event.target.href = `${event.target.href}/?utm_source=freeproducts&utm_medium=<?php echo str_replace($protocols, '', site_url()); ?>`;
          } 
          }
           
  }
  );
 }
</script>
<?php get_footer(); ?>