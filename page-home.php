<?php 
include('fore-config.php');
get_header();
?>
<!-- <section class="w-100 banner-head" style="height:400px">
<div style="background-image:url('https://static.foreshop.net/images/social_media/mygardenwaybanner.jpg'); background-size:cover; -webkit-background-size: 100% 100%;
            -moz-background-size:  100% 100%;
            -o-background-size:  100% 100%;
            background-size:  100% 100%;width:100%; height:100%;"></div>
</section> -->
<div class="container-fluid" id="home-header-banner-ads">
  <div class="row" style="margin: 0px auto 1rem; padding: 0.5em 0px 0.1em; width: fit-content;" id="home-header-ads">
    <div class="home-single-ads"><!--ads here -->
    </div>
  </div>
</div>
<main id="content" class="container-md mt-3 main-page px-md-0">
	<div class="d-flex justify-content-around feature-heading d-lg-none mb-2 font-weight-bold">
		<a class="btn btn-heading" id="featured-header" onclick="displayGrid(this)"><div class="flex-row font-weight-bold">Featured</div></a>
		<a class="btn btn-heading btn-heading-active" id="trending-header" onclick="displayGrid(this)"><div class="flex-row font-weight-bold">Trending</div></a>
		<a class="btn btn-heading" id="new-header" onclick="displayGrid(this)"><div class="flex-row font-weight-bold">Latest</div></a>
	</div>
<div class="row">
	<div class="col-md-12 col-lg-3 my-space d-lg-block" id="featuredPost">
	<h4 class="large-fonts d-lg-block d-none text-center">Featured</h4>
	<?php query_posts( array( 'posts_per_page' => 8, 'post_type'  => 'post', 'order' => 'ASC', 'post_status' => 'publish', 'category_name' => $first_category  ,'no_found_rows' => true) ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php
		$img_url[0] = '';
		if ( has_post_thumbnail() ) { 
			$img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
		} 
		echo
		'<a href="' . get_permalink() . '"><div class="post position-relative mb-4" style="background-image:url(' . $img_url[0] . '); background-size:cover;"></div></a>
		<p class="category">' . get_the_category_list( ', ' ) . '</p>
		<a href="' . get_permalink() . '" class="post-title"><span>' . get_the_title() . '</span></a>';
		endwhile; 
		echo '<script> var featured_last_post = 2; </script>';
		wp_reset_postdata(); 
	?>
	</div>


	<div class="col-md-12 col-lg-6 my-space d-lg-block" id="trendingPost">
		<h4 class="large-fonts d-lg-block d-none text-center">Trending</h4>
		<?php query_posts( array( 'posts_per_page' => 6, 'post_type'  => 'post', 'post_status' => 'publish', 'no_found_rows' => true ) ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php
			$img_url[0] = '';
			if ( has_post_thumbnail() ) { 
				$img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
			} 
			echo
			'<a href="' . get_permalink() . '"><div class="post position-relative mb-4" style="background-image:url(' . $img_url[0] . '); background-size:cover;"></div></a>
			<p class="category">' . get_the_category_list( ', ' ) . '</p>
			<a href="' . get_permalink() . '" class="post-title lg-font"><span>' . get_the_title() . '</span></a>';
			endwhile; 
			echo '<script> var trending_last_post = 2; </script>';
			wp_reset_postdata(); 
		?>
		
	</div>

	<div class="col-md-12 col-lg-3 my-space d-lg-block" id="newPost">

	<h4 class="large-fonts d-lg-block d-none text-center">Latest</h4>
	<?php query_posts( array( 'posts_per_page' => 8, 'post_type'  => 'post', 'order' => 'ASC', 'post_status' => 'publish', 'category_name' => $second_category ,'no_found_rows' => true) ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
		$img_url[0] = '';
		if ( has_post_thumbnail() ) { 
			$img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
		} 
		echo

		'
			<a href="' . get_permalink() . '"><div class="post position-relative mb-4" style="background-image:url(' . $img_url[0] . '); background-size:cover;"></div></a>
			<p class="category">' . get_the_category_list( ', ' ) . '</p>
			<a href="' . get_permalink() . '" class="post-title lg-font"><span>' . get_the_title() . '</span></a>
		';
		endwhile; 
		echo '<script> var new_last_post = 2; </script>';
		wp_reset_postdata(); 
	?>
	</div>

</div>

</main>
<?php get_footer(); ?>