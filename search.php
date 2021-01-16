
<?php get_header(); ?>
<main id="content" class="container search-content">
  <div class="row">

    <div class="col-md-12 col-lg-8 padding-0">
    <?php if ( have_posts() ) : ?>
      <header class="header">
    <h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
    </header>
			<div class="row">
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();					
					$img_url[0] = '';
					if ( has_post_thumbnail() ) { 
						$img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
					} 
					echo
					'<div class="col-md-6 padding-3">
						<a href="' . get_permalink() . '"><div class="post position-relative mb-3" style="background-image:url(' . $img_url[0] . ');"> </div></a>
						<p class="category">' . get_the_category_list( ', ' ) . '</p>
						<a href="' . get_permalink() . '" class="post-title"><span>' . get_the_title() . '</span></a>
					</div>';
					endwhile; endif;
				?>
			</div>
    <?php get_template_part( 'nav', 'below' ); ?>
    <?php else : ?>
    <article id="post-0" class="post no-results not-found">
      <header class="header">
        <h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'blankslate' ); ?></h1>
      </header>
      <div class="entry-content">
        <p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
        <?php get_search_form(); ?>
      </div>
    </article>
    <?php endif; ?>
  </div>

   
		<div class="col-md-4 position-sticky">
			<?php get_sidebar(); ?>
		</div>
  </div>
</main>
<?php get_footer(); ?>