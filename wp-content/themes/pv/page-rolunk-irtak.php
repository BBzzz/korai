<?php get_header(); 
wp_reset_postdata();
?>

		<div id="content" class="site-content" role="main">
		<?php 	$args = array(
					'cat' => '8',
				//	'orderby' => 'title',
				//	'order' => 'ASC'
				);
			$my_query = new WP_Query( $args );
   			if ( $my_query->have_posts() ) {
			?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
       			<?php while ( $my_query->have_posts() ) { 
           			$my_query->the_post();
           		get_template_part( 'content', 'quote' );
       				}
   			}
   			wp_reset_postdata();
 		?>
		</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
