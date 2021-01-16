<?php 

include('fore-config.php');

$category = single_term_title( '', false ) . ' ';
$title = wp_title('|', FALSE);

$new_title = str_replace(' | '.$_SERVER['SERVER_NAME'], '', $title);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php  
	 if(!is_front_page()){
	 $cat = get_the_category($id)[0]->name;
	 if($cat == NULL || empty($cat)){
		 ?>
		<meta name="robots" content="index,follow" />
		<meta name="googlebot" content="index,follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
		<meta name="bingbot" content="index,follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
		<?php
	 }
	 if($cat == 'Trending') { ?>
		<meta name="robots" content="noindex,nofollow" />
		<meta name="googlebot" content="noindex,nofollow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
		<meta name="bingbot" content="noindex,nofollow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<?php } else { ?>
		<meta name="robots" content="index,follow" />
		<meta name="googlebot" content="index,follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
		<meta name="bingbot" content="index,follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<?php } } else {
		?>
		<meta name="robots" content="index,follow" />
		<meta name="googlebot" content="index,follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
		<meta name="bingbot" content="index,follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
		<?php
	}	?>
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />	
	<meta name="twitter:card" content="summary_large_image" />
	<link rel="icon" href="//static.foreshop.net/images/<?php echo $site_url; ?>/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" href="//static.foreshop.net/images/<?php echo $site_url; ?>/favicon-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="//static.foreshop.net/images/<?php echo $site_url; ?>/favicon-180x180.png" />
    <?php
      $title_new = '';
      if($cat === 'Trending'){
        $title_new = "Trending";
      }else {
        $title_new = $category . $new_title;
      }
      echo '<title>' .$title_new . '</title>
      <link rel="canonical" href="//' . $site_url . '"/>
      <meta property="og:title" content="' .  $new_title . '" />
      <meta property="og:url" content="//' . $site_url . '" />
      <meta property="og:site_name" content="' .  $new_title . '" />
      <link rel="alternate" type="application/rss+xml" title="' . $site_url . ' &raquo; Feed" href="//' . $site_url . '/feed/" />
      <link rel="alternate" type="application/rss+xml" title="' . $site_url . ' &raquo; Comments Feed" href="//' . $site_url . '/comments/feed/" />
      <link rel="//api.w.org/" href="//' . $site_url . '/wp-json/" />
      <link rel="shortlink" href="//' . $site_url . '/" />
      <link rel="alternate" type="application/json+oembed" href="/wp-json/oembed/1.0/embed?url=' . $site_url . '" />
      <link rel="alternate" type="text/xml+oembed" href="/wp-json/oembed/1.0/embed?url=' . $site_url . '%2F&#038;format=xml" />';
    ?>
    <!-- <link rel="preload" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript" as="script"> -->
	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css"><?php echo $style;?></style>
	<!-- <link rel="stylesheet" href="//static.foreshop.net/css/foretheme/style.min.css?v=0.1"> -->
	<link rel="stylesheet" href="//static.foreshop.net/css/foretheme/app.min.css">
	<link href='//fonts.googleapis.com/css?family=Oswald:400,300,900' rel='stylesheet' type='text/css'>
	<!-- <script async src="//renteres-lab.com/video_test/vitribe.js?a=foreshop&identifier=DZjJ3Ifg8Ips&mode=flex" type="text/javascript"></script> -->
	<style>
	html{
		scroll-behavior: smooth;
	}
	</style>
	<?php
      $current = $_SERVER['REQUEST_URI'];
      $paths = array('/store','/contact-us','/return-and-refund-policy','/terms-and-conditions','/privacy-policy','/product','quiz');
      $res = 0;

      foreach ($paths as &$item) {
          if($res === 0){
            if(strpos($current,$item) !== false){
                $res = 1;
             }
          }
      }
        //Whoever reads this - i don't know why it's working like that, but it's working.
      if($res !== 1){
        echo '<script data-ad-client="ca-pub-1444749628606253" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
      }else{
          echo '<script>console.log("ADSENSE WAS NOT STARTED ON ".concat(window.location.href))</script>';
      }
   ?>
	<script>
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.querySelector("nav").style.top = "0";
			} else {
				document.querySelector("nav").style.top = "-80px";
			}
			prevScrollpos = currentScrollPos;
		}
	</script>
    <?php echo wp_head(); ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg sticky-top navbar-light p-0">
			<div class="container">
			<a class="navbar-brand ml-1" href="/" title="<?php echo $alt_logo; ?>" rel="home">
				<img src="//static.foreshop.net/images/<?php echo $site_url; ?>/logo.png" height="43px" alt="<?php echo get_bloginfo( 'name' ); ?>" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNav">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => "navbar-nav mr-auto mt-2 mt-lg-0", 'container' => "") ); ?>
				<ul class="nav navbar-nav navbar-right text-center">
                    <li>

                    	<a href="//instagram.com/<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram mx-2" aria-hidden="true"></i></a>
                    	<a href="//pinterest.com/<?php echo $pinterest; ?>" target="_blank"><i class="fa fa-pinterest-p mx-2" aria-hidden="true"></i></a>
											<a href="#langbar"><i class="fa fa-globe mx-2" aria-hidden="true"></i></a>
                    </li>
                    <li class="ml-md-2"><a href="#search"><i class="fa fa-search mx-2"></i></a></li>
                </ul>
                <div id="search">
				    <button type="button" class="close">×</button>
				    <form action="/" method="get">
				    	<label for="search"></label>
				        <input type="search" name="s" value="<?php the_search_query(); ?>" placeholder="Search..."/>
				        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
				    </form>
				</div>
			</div>
		</div>
	</nav>
	
