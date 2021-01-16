<?php include('fore-config.php'); ?>
<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
add_image_size( 'thumb_size', 80, 80, true );
add_image_size( 'related_size', 225, 280, true );
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
 
// Add the posts and pages columns filter. They can both use the same function.
add_filter('manage_posts_columns', 'add_post_admin_thumbnail_column', 2);
 
// Add the column
function add_post_admin_thumbnail_column($thumb_columns){
	$thumb_columns['crunchify_thumb'] = __('Featured Image');
	return $thumb_columns;
}
 
// Let's manage Post and Page Admin Panel Columns
add_action('manage_posts_custom_column', 'show_post_thumbnail_column', 5, 2);
 
// Here we are grabbing featured-thumbnail size post thumbnail and displaying it
function show_post_thumbnail_column($thumb_columns, $thumb_id){
	switch($thumb_columns){
		case 'crunchify_thumb':
		if( function_exists('the_post_thumbnail') )
			echo the_post_thumbnail(array('80','80'));
		else
			echo 'hmm... your theme doesn\'t support featured image...';
		break;
	}
}

//This will prepend your WordPress RSS feed content with the featured image
function wcs_post_thumbnails_in_feeds( $content ) {
	global $post;
	if( has_post_thumbnail( $post->ID ) ) {
			$content = '<p>' . get_the_post_thumbnail( $post->ID ) . '</p>' . $content;
	}
	return $content;
}
add_filter( 'the_excerpt_rss', 'wcs_post_thumbnails_in_feeds' );
add_filter( 'the_content_feed', 'wcs_post_thumbnails_in_feeds' );

// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function wpvkp_social_buttons($content) {
    global $post;
    if(is_singular() || is_home()){
        $sb_url = urlencode(get_permalink());
				$sb_title = str_replace( ' ', '%20', get_the_title());
				$sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());
				if(!empty($sb_thumb)) {
					$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb.'&amp;description='.$sb_title;
			}
			else {
					$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;description='.$sb_title;
			}

        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url;
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
				$whatsappURL = 'whatsapp://send?text='.$sb_title . ' ' . $sb_url;
				$content .= '<div class="social-box"><div class="social-btn d-flex justify-content-start">';
				$content .= '<a class="sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow">
				<div class="social-Med" style="background: url(https://static.foreshop.net/images/social_media/facebook.jpg); background-size:cover; background-repeat:no-repeat;"></div>
				</a>';

				$content .= '<a class="sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow">
				<div class="social-Med" style="background: url(https://static.foreshop.net/images/social_media/twitter.jpg); background-size:cover; background-repeat:no-repeat;"></div>
				</a>';
				$content .= '<a class="sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow">
				<div class="social-Med" style="background: url(https://static.foreshop.net/images/social_media/whatsapp.jpg); background-size:cover; background-repeat:no-repeat;"></div>
				</a>';

				$content .= '<a class="sbtn s-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank" rel="nofollow">
				<div class="social-Med" style="background: url(https://static.foreshop.net/images/social_media/pinterest.jpg); background-size:cover; background-repeat:no-repeat;"></div>
				</a>';
        $content .= '</div></div>';
        return $content;
    }else{
        return $content;
    }
};
add_shortcode('social','wpvkp_social_buttons');


// INFINITE LOAD
add_action('rest_api_init', function () {
  register_rest_route( 'foretheme/v1', 'featured-posts',array(
                'methods'  => 'GET',
                'callback' => 'get_post_by_ajax_featured'
      ));
});

function get_post_by_ajax_featured(){
	$paged = $_GET['featured_last_post']; //you missed this line
	$postsPerPage = 5;
	$postOffset = $paged * $postsPerPage;
	$category_name = $GLOBALS['first_category'];
	$args = array(
	'posts_per_page'  => $postsPerPage,
	'category_name'   => $category_name,
	'offset'          => $postOffset,
	'post_type'       => 'post',
	'no_found_rows' => true
	);

	$myposts = get_posts($args);

	foreach($myposts as $key=> $post){
	$myposts[$key]->image =  get_the_post_thumbnail($post->ID);
	$myposts[$key]->category = get_the_category( $post->ID)[0];
	}
	echo json_encode(['status'=>true, 'data'=>$myposts]);
}

add_action('rest_api_init', function () {
  register_rest_route( 'foretheme/v1', 'trending-posts',array(
                'methods'  => 'GET',
                'callback' => 'get_post_by_ajax_trending'
      ));
});

function get_post_by_ajax_trending(){
	$paged = $_GET['trending_last_post']; //you missed this line
	$postsPerPage = 5;
	$postOffset = $paged * $postsPerPage;
	$post_cat = wp_get_post_categories($post->ID);
	
	$args = array(
	'posts_per_page'  => $postsPerPage,
	'offset'          => $postOffset,
	'cat__in' => array($post_cat[0]->term_id), 
	'post_type'       => 'post',
	'no_found_rows' => true,
	'orderby' => 'rand',
	'order' => 'DESC'
	);
	
	$myposts = get_posts($args);
	
	foreach($myposts as $key=> $post){
	$myposts[$key]->image =  get_the_post_thumbnail($post->ID);
	$myposts[$key]->category = get_the_category( $post->ID)[0];
	}
	echo json_encode(['status'=>true, 'data'=>$myposts]);
	
}


add_action('rest_api_init', function () {
  register_rest_route( 'foretheme/v1', 'new-posts',array(
                'methods'  => 'GET',
                'callback' => 'get_post_by_ajax_new'
      ));
});

	function get_post_by_ajax_new(){
		$paged = $_GET['new_last_post']; //you missed this line
		$postsPerPage = 5;
		$postOffset = $paged * $postsPerPage;
		$category_name = $GLOBALS['second_category'];
		$args = array(
		'posts_per_page'  => $postsPerPage,
		'category_name'   => $category_name,
		'offset'          => $postOffset,
		'post_type'       => 'post',
		'no_found_rows' => true
		);
		
		$myposts = get_posts($args);
		
		foreach($myposts as $key=> $post){
		$myposts[$key]->image =  get_the_post_thumbnail($post->ID);
		$myposts[$key]->category = get_the_category( $post->ID)[0];
		}
		echo json_encode(['status'=>true, 'data'=>$myposts]);
		
	}

	add_action('rest_api_init', function () {
    register_rest_route( 'foretheme/v1', 'more-posts/(?P<post_id>\d+)',array(
        'methods'  => 'GET',
        'callback' => 'get_post_by_ajax_more'
    ));
});
function get_post_by_ajax_more($request){
    $paged = $request['post_id'];
    $postsPerPage = 3;
    $postOffset = $paged * $postsPerPage;
    $do_not_duplicate = array();
    $category_name = $GLOBALS['first_category'];
    $args = array(
        'posts_per_page'  => $postsPerPage,
        'offset'          => $postOffset,
        'post__not_in' => array($do_not_duplicate),
        'category_name' => $category_name, 
        'post_type' => 'post',
        'no_found_rows' => true,
        'order' => 'DESC'

    );
    
    
    $myposts = get_posts( $args );

    foreach($myposts as $key=> $post){
    array_push($do_not_duplicate,$myposts[$key]->ID);
    
    $myposts[$key]->image =  get_the_post_thumbnail($post->ID);
    $myposts[$key]->category = get_the_category( $post->ID)[0];
    }
    echo json_encode(['status'=>true, 'data'=>$myposts]);		
    
}
