			<div id="tips" class="tips">
				<aside id="aside-tips" class="aside-tips">
				<?php 	$args = array(
						'cat' => '5',
						'orderby' => 'title',
						'order' => 'ASC'
					);
					$my_query = new WP_Query( $args );
   					if ( $my_query->have_posts() ) {
					?>
					<h1 class="entry-title"><?php echo ('<span class="leave-reply">' . __( 'Did you know?', 'pv' ) . '</span>') ?></h1>
       						<?php while ( $my_query->have_posts() ) { 
           						$my_query->the_post();
           						get_template_part( 'content', 'side' );
       						}
   					}
   					wp_reset_postdata();
 				?>						
				</aside><!-- #aside-tips -->
			</div><!-- #tips -->
