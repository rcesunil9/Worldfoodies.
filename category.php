<?php get_header(); ?>
<div class="container-fluid" style="background-color: rgb(238, 238, 238);" id="single-header-banner-ads">
  <div class="row" style="margin: 0px auto 1rem; padding: 0.5em 0px 0.1em; width: fit-content;" id="header-ads">
    <div class="single-ads"><!--ads here -->
    </div>
  </div>
</div>
<main id="content" class="container mt-3">
	<div class="row">
		<div class="col-md-12 col-lg-8">
			<div class="d-flex">
				<h1 class="entry-title mr-4"><?php single_term_title(); ?></h1>
				<div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
			</div>
			<div class="row">
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();					
					$img_url[0] = '';
					if ( has_post_thumbnail() ) { 
						$img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
					} 
					echo
					'<div class="col-md-6 padding-3">
					
						
						<a href="' . get_permalink() . '"><div class="post position-relative mb-3" style="background-image:url(' . $img_url[0] . '); background-size: 100% 100%;"> </div></a>
						
						<p class="category">' . get_the_category_list( ', ' ) . '</p>
						<a href="' . get_permalink() . '" class="post-title"><span>' . get_the_title() . '</span></a>
					</div>';
					endwhile; endif;
				?>
			</div>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>
		<div class="mobile-side col-md-12 col-lg-12"> 
      <div id="sidebar" >
        <div class="row">
		      <div class="col-md-6 col-lg-12"><!-- ads --></div>
          <div class="col-md-6 col-lg-12">
            <hr/>
            <h4 class=" text-left" style="color:rgb(141, 141, 141);">RECENT POSTS</h4>
            <div class="mb-3" style="border-top: 3px solid rgb(221, 221, 221);"></div>
            <?php
              query_posts( array( 'posts_per_page' => 4, 'post_type'  => 'post', 'post_status' => 'publish', 'no_found_rows' => true) );
              while ( have_posts() ) : the_post();
                $img_url[0] = '';
                if ( has_post_thumbnail() ) { 
                  $img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array('80', '80') );
                } 
                echo '<div class="recent-post d-flex text-left align-items-start mb-2"><img width="80px" height="80px" alt="' . get_the_title() . '" src="' . $img_url[0] . '" class="w-25"/><div><a href="' . get_permalink() . '" ><span>' . get_the_title() . '</span></a><p class="category">' . get_the_category_list( ', ' ) . '</p></div></div><hr>';
              endwhile; 
              wp_reset_query();

            ?>
          </div>
        </div>
      </div>
      <div class="sidebar">
        <div class="row">
        <div class="col-md-12 col-lg-12"><!-- ads --></div>
	        <div class="col-md-12 col-lg-12 ">
            
            <h4 class=" text-left" style="color:rgb(141, 141, 141);">RECOMMENDED POSTS</h4>
            <div class="mb-3" style="border-top: 3px solid rgb(221, 221, 221);"></div>
            <?php 
              query_posts( array( 'posts_per_page' => 2, 'post_type'  => 'post', 'post_status' => 'publish', 'no_found_rows' => true, 'order' => 'ASC') );
              while ( have_posts() ) : the_post();
                $img_url[0] = '';
                if ( has_post_thumbnail() ) { 
                  $img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array('80', '80') );
                } 
                echo '<div class="recent-post d-flex text-left align-items-start mb-2"><img width="80px" height="80px" alt="' . get_the_title() . '" src="' . $img_url[0] . '" class="w-25"/><div><a href="' . get_permalink() . '" ><span>' . get_the_title() . '</span></a><p class="category">' . get_the_category_list( ', ' ) . '</p></div></div><hr>';
              endwhile; 
              wp_reset_query();
            ?>
	          </div>
	        </div>
	      </div>
      </div>
		<div class="col-md-12 col-lg-4 position-sticky">
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>

