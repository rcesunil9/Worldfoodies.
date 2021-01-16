<?php include('fore-config.php'); ?>
	<div id="sidebar" class="desktop-side">
        <div class="row">
		      <div class="col-md-12 col-lg-12"><!-- ads --></div>
	<div class="col-md-12 col-lg-12">
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
			wp_reset_postdata(); 
		?>
	</div>
</div>
		</div>
<div class="sidebar sticky-top desktop-side" style="top:90px">
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
			wp_reset_postdata(); 
		?>
	</div>
		
	</div>
		</div>