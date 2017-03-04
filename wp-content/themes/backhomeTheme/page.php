<?php get_header();?>

    			<?php
			$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ;
			$arg = array('post_per_page'=>3,'paged'=>$currentPage);
			$posts = query_posts( $arg);

			if ( $posts ) : ?>
    				<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
    					<?php get_template_part('content', get_post_format()) ;?>

    				<?php endforeach; ?>

    				<div class="pagination_container">
    					<?php next_posts_link(' Старые записи');?>
    				</div>
    				<div class="pagination_container">
    					<?php previous_posts_link('Новые записи ');?>
    				</div>
    			<?php endif; wp_reset_query(); ?>

<?php get_footer();?>