<?php get_header();?>
<?php echo do_shortcode('[searchandfilter add_search_param="1" fields="category,post_tag" types="select,checkbox" order_by="slug" all_items_labels="Выбирите ти операции,выберите вид недвижимости" headings=",Tags" hierarchical="1" hide_empty="0"]' ); ?>

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


<?php get_footer();?>
