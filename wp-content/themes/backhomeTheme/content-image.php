<div <?php  post_class('description_event');?> id="<?php the_ID();?>"><p class="event_time"><span><?php the_time(); ?>
		</span>
		<a href="<?php the_permalink() ?>" style="color: blue;" rel="bookmark"><?php the_title(); ?></a>
	</p>
	<div class="thumbnail-img"><?php the_post_thumbnail('large');?></div>
</div>