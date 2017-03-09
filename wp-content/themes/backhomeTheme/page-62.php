<?php get_header(); ?>

	<div class="wrapper_middle">
		<div class="slider_top">
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/peace.jpg" alt=""/></div>

			<div><img src="<?php echo get_template_directory_uri(); ?>/img/road.jpg" alt=""/></div>
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt=""/></div>
		</div>
		<div class="text_right_part">
			<p class="name_programm">Специальная программа</p>

			<p class="discribe_programm">Работает программа по возвращению на подконтрольную территорию Украины
				граждан,
				которые добровольно отказались в участии в т.н.«ДНР/ЛНР» <br/></p>

			<ol class="order_of_programm">
				<li>готовы добровольно отказаться от участия в террористической деятельности и сотрудничать с
					правоохранительными органами Украины;
				</li>
				<li>не участвовали в убийствах, пытках, изнасилованиях и других тяжких преступлениях;</li>
			</ol>
			<a href="about.html">
				<div class="programm_button"><span class="programm_button_text">Подробнее</span></div>
			</a>
		</div>
	</div>
	<div class="about_programm">
		<p class="">Вот уже больше года, как в дом каждого из нас вошла ВОЙНА. Она разделила семьи, близких людей,
			забрала жизни тысяч мирных жителей.
			За этот год мы многое поняли:
		</p>
		<ul class="about_programm_list">
			<li> что нет никакой хунты, фашистов и натовского легиона в Украине</li>
			<li> что украинцы и русские воюют против украинцев и русских</li>
			<li> православные против православных</li>
			<li>обворованные олигархами против обворованных олигархами</li>
		</ul>
		<p>
			Договор подписанный в Минске Путиным и Порошенко, хоть и ненадежный, но дает надежду на МИР.
			Хватит воевать!!!</p>
	</div>

	<div class="wrapper_down">
	<div class="last_event">
	<p class="title_last_event"> Последние <span>события:</span></p>

	<aside class="contacts">
		<p class="title_contacts">Наши <span>контакты:</span></p>

		<p class="contacts_phone"><span>телефон:</span> (050)579-32-19</p>

		<p class="contact_e-mail"><span>e-mail:</span><a
				href="mailto:vernuc.domoy@gmail.com">vernuc.domoy@gmail.com</a>
		</p>
		<p class="contsct_else">Или используй <br/><a href="<?php home_url('/');?>">форму</a> обратной связи</p>
	</aside>
	<div class="event">
		<!--			--><?php //echo do_shortcode('[searchandfilter add_search_param="1" fields="category,post_tag" types="select,checkbox" order_by="slug" all_items_labels="Выбирите ти операции,выберите вид недвижимости" headings=",Tags" hierarchical="1" hide_empty="0"]' ); ?>
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



	</div>
<?php get_sidebar();?>
<?php get_footer(); ?>