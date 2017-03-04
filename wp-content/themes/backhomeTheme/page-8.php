<?php get_header();?>


	<div>
		<?php

		$lastblog = new WP_Query('post_type=post&cat=3');
		if( $lastblog->have_posts()):
			while($lastblog->have_posts()): $lastblog->the_post(); ?>
				<?php get_template_part('content', get_post_format()) ;?>
			<?php endwhile; ?>
			<div class="pagination_container">
				<?php next_posts_link(' Старые записи');?>
			</div>
			<div class="pagination_container">
				<?php previous_posts_link('Новые записи ');?>
			</div>
		<?php endif; wp_reset_query(); ?>

	</div>

<?php get_footer();?>