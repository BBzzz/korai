<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="content" class="site-content" role="main">
	<?php the_post(); ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
		
	<!--<?php get_search_form(); ?>-->
		
	<h2>Éves lebontásban:</h2>
	<ul>
		<?php wp_get_archives('type=yearly'); ?>
	</ul>

</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
