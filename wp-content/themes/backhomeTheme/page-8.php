<?php get_header();?>

	<div>
		<?php
        $arg = array(
            'post_type' => 'post',
            'cat' => 3,
            'tag_id' => 7
        );
		$lastblog = new WP_Query($arg);
		if( $lastblog->have_posts()):
			while($lastblog->have_posts()): $lastblog->the_post(); ?>
				<?php get_template_part('content', get_post_format()) ;?>
			<?php endwhile; ?>

		<?php endif; wp_reset_query(); ?>

	</div>

    <div>

        <form action="index.php">

            <select name="type_operation" id="">
                <?php
                $catarg = array(3,5);

                foreach($catarg as $cats) { ?>
                    <option value="<?php get_cat_name($cats);?>">
                        <?php echo get_cat_name($cats);?>
                    </option>
                    <?php  };?>



            </select>
            <select name="type_estate" id="">
                <?php

                $tagarg = array(

                    'term_id' => '7,8,10',
                );
                $posttags = get_tags();

                if ($posttags) {
                    foreach($posttags as $tag) {
                        echo $tag->name . ' ';
                    }

                }
                ;?>



            </select>
            <button type="submit">push</button>


        </form>

    </div>
<?php get_sidebar();?>

<?php get_footer();?>