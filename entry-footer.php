<?php include('fore-config.php'); ?>
<div class="entry-footer mt-2 mb-2"><span class="cat-links mr-4"><i class="fa fa-bookmark mr-2" aria-hidden="true"></i><?php the_category( ', ' ); ?></span><span class="tag-links"><i class="fa fa-tag mr-2" aria-hidden="true"></i><?php the_tags(''); ?></span></div>
<?php echo do_shortcode('[social]'); ?>
    <div class="mobile-side"> 
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

		<div class="more-from">
	
  <?php 
  echo '<script> var more_last_post = 2; </script>'; ?> 

	</div>
	

<!-- <script id="inline-feed-ritribes">
   window.inline_feed_ritribes = ({
        inline: {
                 type: "block3",
                },
        line: {
                display: false,
                color: "#000000",
                size: "4px",
               },
        title: {
                text: "Hot topics",
                font_family :"ReformaGroteskMediumC,sans-serif",
                font_size   : "40px",
                color: "#1d211f",
                },
        inline_wrap: { 
                      "margin-left": "-11px",
                      "margin-right": "-19px"
                    },
        item_title:{
                     "font-size": "20px",
                     "font-family" :"inherit",
                     color: "#1d211f",
                    },
        item_comment:{
                      "font-size": "14px",
                       color: "#1d211f",
                       "line-height":"20px"
                     }
       });
</script> -->

<script>

var throttledListener = throttle(singlescrollListener, 500);
window.addEventListener('scroll', throttledListener);
function throttle(func, delay) {
  var func = func.bind(func),
      last = Date.now();
      return function() {
      if (Date.now() - last > delay) {
          func();
          last = Date.now();
      }
  }
}

function singlescrollListener() {
      var threshold = document.body.clientHeight * 0.2;
      if (window.pageYOffset >= threshold) {
        inside_get_post_by_ajax();
      }
}

function htmlToElement(html) {
    var template = document.createElement('template');
    html = html.trim(); // Never return a text node of whitespace as the result
    template.innerHTML = html;
    return template.content.firstChild;
}

let is_most_posts_loading = false;

function inside_get_post_by_ajax(){

  if(more_last_post!=-1){
    if(is_most_posts_loading == false){
        is_most_posts_loading = true;
        fetch("https://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-json/foretheme/v1/more-posts/"+more_last_post)
        .then(data=>data.json())
        .then(data=>{
        	data.data.forEach(item =>{
        		const from = item.image.search(/(<img.*)/);
        		item.image = item.image.toString().substr(from)
        	})
            if(data.data.length<1){
              more_last_post = -1;
              
            }else{
								for(let i = 0; i < data.data.length - 2; i = i + 3) {
									const div1Data = data.data[i];
   								const div2Data = data.data[i+1];
									const div3Data = data.data[i+2];
									let img = htmlToElement(div1Data.image);
									let img2 = htmlToElement(div2Data.image);
									let img3 = htmlToElement(div3Data.image);
                 
										document.querySelector('.more-from').innerHTML += `
										<div class="row related">
                    
												<div class="col-md-12"><h2 style="border-bottom: 3px solid #dddddd; text-transform: uppercase; margin-bottom: 15px; color: #8d8d8d; font-family: 'Oswald'; font-size: 24px; line-height: 30px; display: inline-block !important; margin-left: 0px;">More From <?php $url = get_bloginfo('name'); $parsed_url = parse_url($url); echo explode(".",$parsed_url['path'])[0]; ?></h2></div>
											<div class="col-md-6 col-lg-6">
												<a href="${div1Data.post_name}"><div class="post position-relative mb-4" style="background-image:url('${img.src}'); height:175px;">
												</div></a>
												<a href="${div1Data.post_name}" rel="bookmark" title="Permanent Link to ${div1Data.post_title}" class="post-title"><span style="font-weight:bold; font-family:oswald, sans-serif !important;font-size: 17px; line-height: 22px; color: #333;">${div1Data.post_title}</span></a>
											</div>
											<div class="col-md-6 col-lg-6">
												<a href="${div2Data.post_name}"><div class="post position-relative mb-4" style="background-image:url('${img2.src}'); height:175px;">
												</div></a>
												<a href="${div2Data.post_name}" rel="bookmark" title="Permanent Link to ${div2Data.post_title}" class="post-title"><span style="font-weight:bold; font-family:oswald, sans-serif !important;font-size: 17px; line-height: 22px; color: #333;">${div2Data.post_title}</span></a>
											</div>
											<div class="col-lg-12">
												<a href="${div3Data.post_name}"><div class="post position-relative mb-4 more-big-photo" style="background-image:url('${img3.src}'); background-position: center top; height:359px!important;">
												</div></a>
												<a href="${div3Data.post_name}" rel="bookmark" title="Permanent Link to ${div3Data.post_title}" class="post-title"><span style="font-weight:bold; font-family:oswald, sans-serif !important; font-size: 17px; line-height: 22px; color: #333;">${div3Data.post_title}</span></a>
											</div> 
									</div>
                  
                 
								`;
                
								}
                more_last_post++;
                
        is_most_posts_loading = false;
            }
        });

    }
  }
}

</script>

