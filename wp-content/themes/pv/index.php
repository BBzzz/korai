<?php get_header(); ?>
	
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>
		<?php 	while ( have_posts() ) : the_post();
				if ( in_category( array( 'news-hu' , 'news-ro', 'news-en' ))) {
					get_template_part( 'content', get_post_format() );
				}
		endwhile; ?>
		<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
