<article id="post-<?php the_ID(); ?>">
<h1 class="entry-title"><?php the_title(); ?></h1>
<hr>
<?php echo do_shortcode('[social]'); ?>
<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</article>