<?php	 if ( have_posts() ) : ?>
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