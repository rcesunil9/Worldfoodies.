<?php get_header(); ?>
<main id="content" class="container my-4">
  <div class="row">
        <div class="col-md-12 col-lg-4">
          <div class="row">
          <div class="col-md-4 col-lg-12">
          <h1>Contact Us:</h1>
          <p>Raul Wallenberg 4, Tel Aviv, Israel,<br/> +972 37484000-3</p>
          </div>
          <div class="col-md-4 col-lg-12">
          <h5>SUBSCRIBE</h5>
          <form class="form-inline mt-2 mb-4 mr-md-0 mx-auto" onsubmit="submitSubscribe(event, 'contact-page')">
            <input type="email" name="email" class="form-control" placeholder="Your email..." required/>
            <button class="btn btn-success" type="submit" style=""><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
          </form>
          </div>
          <div class="col-md-4 col-lg-12">
          <h5>FOLLOW US</h5>
          <h4 class="ml-md-2 ml-0">
            <a href="<?php echo $facebook; ?>" class="contact-social"><i class="fa fa-facebook mr-2" aria-hidden="true"></i></a>
            <a href="<?php echo $instagram; ?>" class="contact-social"><i class="fa fa-instagram mr-2" aria-hidden="true"></i></a>
            <a href="<?php echo $pinterest; ?>" class="contact-social"><i class="fa fa-pinterest-p mr-2" aria-hidden="true"></i></a>
            <a href="" class="contact-social"><i class="fa fa-rss" aria-hidden="true"></i></a>
          </h4>
          </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div role="form" class="wpcf7" id="wpcf7-f488-p486-o1" lang="en-US" dir="ltr">
            <div class="screen-reader-response" aria-live="polite"></div>
            <form action="/contact-us/#wpcf7-f488-p486-o1" method="post" class="wpcf7-form mt-4">
              <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="488">
                <input type="hidden" name="_wpcf7_version" value="5.1.9">
                <input type="hidden" name="_wpcf7_locale" value="en_US">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f488-p486-o1">
                <input type="hidden" name="_wpcf7_container_post" value="486">
              </div>
              <div class="form-group">
                <label for="your-name">Your Name *</label>
                <input type="text" name="your-name" value="" class="form-control" aria-required="true" aria-invalid="false" placeholder="Name..." required>
              </div>
              <div class="form-group">
                <label for="your-email">Your Email *</label>
                <input type="email" name="your-email" value="" class="form-control" aria-required="true" aria-invalid="false" placeholder="Email..." required>
              </div>
              <div class="form-group">
                <label for="subject">Subject *</label>
                <input type="subject" name="subject" value="" class="form-control" aria-required="true" aria-invalid="false" placeholder="Subject..." required>
              </div>
              <div class="form-group">
                <label for="your-message">Your Message *</label><br>
                <textarea name="your-message" class="form-control" rows="3" placeholder="Message..." aria-invalid="false" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send" class="btn btn-primary mb-2">
              </div>
              <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
            </form>
          </div>
        </div>

        <div class="col-md-12 col-lg-4">
        <aside id="sidebar" class="text-center sticky-top">
        <h4 class="mt-4 mb-3 mx-3 text-left">RECENT POSTS</h4>
          <?php 
            query_posts( array( 'posts_per_page' => 4, 'post_type'  => 'post', 'post_status' => 'publish', 'no_found_rows' => true) );
            while ( have_posts() ) : the_post();
              $img_url[0] = '';
              if ( has_post_thumbnail() ) { 
                $img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb_size' );
              } 
              echo '<div class="recent-post d-flex text-left align-items-start mb-2 mx-3">
                    <img width="80px" height="80px" alt="' . get_the_title() . '" src="' . $img_url[0] . '" class="w-25"/>
                      <div> 
                        <a href="' . get_permalink() . '" ><span>' . get_the_title() . '</span></a>
                        <p class="category">' . get_the_category_list( ', ' ) . '</p>
                      </div>
                </div>';
            endwhile; 
            wp_reset_postdata(); 
          ?>
          </aside>
        </div>
  </div>
</main>
<?php get_footer();
