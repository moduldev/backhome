<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/icon.png" type="image/png">
	<title><?php bloginfo(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<header>
	<div class="wrapper_top">
		<div class="logo">
			<span class="first_line"><a href="<?php echo home_url();?>">Я</a></span><br/><span class="second_line"><a
					href="<?php echo home_url();?>">Вернулся!</a></span>
		</div>
		<div class="right_part">
			<div class="social_icons">
				<a class="vk" href="http://vk.com/club106922086" target="blank">
					<div class="vk"></div>
				</a>
				<a class="youtube" href="https://www.youtube.com/" target="blank">
					<div class="youtube"></div>
				</a>
			</div>
			<div class="clearfix"></div>
			<div class="navigation">

				<?php wp_nav_menu(

					array(
						'container'  => '',
						'menu_class' => 'menu',
						'theme_location'  => 'primary'

					)

				); ?>
			</div>
		</div>
	</div>
	<div id="top"><img src="<?php echo get_template_directory_uri();?>/img/up_button.jpeg" alt=""/></div>
</header>