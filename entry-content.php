<div class="entry-content">
	
	<?php 
	$cat = get_the_category( $id )[0]->name;
	if(empty($cat)){ 
		if ( has_post_thumbnail() ) {	the_post_thumbnail();} 
			the_content(); 
	} 
	elseif($cat == 'Trending') { 
		the_content(); 
	} else { 
		if ( has_post_thumbnail() ) {	the_post_thumbnail();} 
			the_content(); 
	}
	 ?>
	<!-- <div class="entry-links"><?php wp_link_pages(); ?></div> -->
	
	<div class="entry-links">
		<?php
			$page;
			$args = array (
		    'before'            => '<div style="text-align: center;"><h3>' . __( '', 'textdomain' ) . '',
		    'after'             => '</h3></div>',
		    'link_before'       => '<span >',
		    'link_after'        => '',
		    'next_or_number'    => 'next',
		    'separator'         => '  ',
		    'nextpagelink'      => '<span  class="classlinks">'. __( 'Next &raquo', 'textdomain' ). '</span>',
				'previouspagelink'  => '<span class="previouslink">'. __( '&laquo Previous', 'textdomain' ). '</span>',
			);
		

			wp_link_pages( $args );
	 	?>	
	 </div>
	
</div>