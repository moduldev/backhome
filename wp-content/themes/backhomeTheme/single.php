<?php get_header();?>
<?php if ( $posts ) : ?>
	<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
		<?php get_template_part('content', get_post_format()) ;?>

		<?php
	endforeach;
	wp_reset_postdata();
	?>
<?php endif; ?>
<?php get_footer();?>