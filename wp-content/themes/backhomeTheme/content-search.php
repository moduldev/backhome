<div <?php  post_class('description_event');?> id="<?php the_ID();?>"><p class="event_time"><span><?php the_time(); ?></span>
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

		<span><?php the_category(', ');?></span>
	</p>
	<div class="thumbnail-img">
		<?php the_post_thumbnail();?>
	</div>
	<div class="event_text"><?php the_excerpt(); ?></div>
</div>