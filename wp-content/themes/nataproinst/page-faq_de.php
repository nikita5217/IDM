<?php


$page_id = get_the_ID();
get_header('de');
$loop = new WP_Query( array( 
	'post_type' => 'product', 
	'posts_per_page' => 40,
	'orderby' => 'date', 
	'product_cat' => ' insta_produkte',
));?>
	<div class="crumbs container">
		<a href="/maindeutsch">
			Home
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<p>
			FAQ
		</p>
	</div>
	<div class="page-top-section container">
		<div class="info">
			<h2 class="main-title">
				<?php the_field('faq_top_title', $page_id); ?>
			</h2>
			<?php the_field('faq_top_text', $page_id); ?>
			<img src="<?php echo get_template_directory_uri(); ?>/asets/images/more-arrow.svg" alt="" class="more-arrow scroll1">
		</div>
		<img src="<?php the_field('faq_top_img', $page_id); ?>" alt="" class="img">
	</div>
	<?php the_field('millistone_title', $page_id); ?>
	<div class="story container desk">
	<?php the_field('millistone_desk', $page_id); ?>
	</div>
	<div class="story container mob">
		<?php the_field('millistone_mob', $page_id); ?>
	</div>
	<div class="what-i-do what-i-do-faq container">
		<div class="what-i-do-col">
			<div class="what-i-do-info">
				<p class="main-text">
				<?php the_field('square_block_1', $page_id); ?>
				</p>
			</div>
		</div>
		<div class="what-i-do-col">
			<div class="what-i-do-info">
				<p class="main-text">
				<?php the_field('square_block_2', $page_id); ?>
				</p>
			</div>
		</div>
	</div>
	<h2 class="main-title title-center">
	<?php the_field('programs_title', $page_id); ?>
	</h2>
	<div class="adventures container revers">
		<img src="<?php the_field('programs_img_1', $page_id); ?>" alt="" class="img">
		<div class="info">
		<?php the_field('programs_text_1', $page_id); ?>
		</div>
	</div>
	<div class="adventures container">
		<img src="<?php the_field('programs_img_2', $page_id); ?>" alt="" class="img">
		<div class="info">
		<?php the_field('programs_text_2', $page_id); ?>
		</div>
	</div>
	<h2 class="title-center main-title">
		<?php the_field('reels_title', $page_id); ?>
	</h2>
	<div class="reels container">
		<div class="reels-about">
			<img src="<?php the_field('reels_img', $page_id); ?>" alt="" class="img">
			<div class="info">
				<h3 class="big-main-title">
				<?php the_field('reels_title_2', $page_id); ?>
				</h3>
				<p class="main-text">
				<?php the_field('reels_text', $page_id); ?>
				</p>
			</div>
		</div>
		<div class="reels-faqs">
			<div class="reels-faqs-col">
				<div class="reels-faq">
					<h3>
						01
					</h3>
					<?php the_field('reels_quastion_1', $page_id); ?>
				</div>
				<div class="reels-faq">
					<h3>
						02
					</h3>
					<?php the_field('reels_quastion_2', $page_id); ?>
				</div>
				<div class="reels-faq">
					<h3>
						03
					</h3>
					<?php the_field('reels_quastion_3', $page_id); ?>
				</div>
			</div>
			<div class="reels-faqs-col">
				<div class="reels-faq">
					<h3>
						04
					</h3>
					<?php the_field('reels_quastion_4', $page_id); ?>
				</div>
				<div class="reels-faq">
					<h3>
						05
					</h3>
					<?php the_field('reels_quastion_5', $page_id); ?>
				</div>
				<div class="reels-faq">
					<h3>
						#
					</h3>
					<?php the_field('reels_quastion_6', $page_id); ?>
				</div>
			</div>
		</div>
		<h2 class="main-title title-center">
		<?php the_field('Reels_ideas_title', $page_id); ?>
		</h2>
		<div class="reels-ideas">
			<div class="reels-tabs">
				<div class="reels-tab main-text active">
				<?php the_field('Reels_ideas_tab_1', $page_id); ?>
				</div>
				<div class="reels-tab main-text">
				<?php the_field('Reels_ideas_tab_2', $page_id); ?>
				</div>
			</div>
			<div class="select">
				<div class="selected-block">
					<p>
					<?php the_field('Reels_ideas_tab_1', $page_id); ?>
					</p>
					<svg class="arrow" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M9.92721 8.63667L0.740076 0L0 0.679368L9.91469 10L20 0.741984L19.2724 0.0580211L9.92721 8.63667Z" fill="#E96B5F"/>
						</svg>                     
				</div>
				<div class="options">
					<div class="option">
					<?php the_field('Reels_ideas_tab_1', $page_id); ?>
					</div>
					<div class="option">
					<?php the_field('Reels_ideas_tab_2', $page_id); ?>
					</div>
				</div>
			</div>
			<div class="ideas about active">
				<?php the_field('Reels_ideas_text_1', $page_id); ?>
			</div>
			<div class="ideas about">
				<?php the_field('Reels_ideas_text_2', $page_id); ?>
			</div>
		</div>
	</div>
	<div class="telegram-block container">

	<?php 

while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="product">
			<img src="<?php the_post_thumbnail_url();?>" alt="" class="img">
			<div class="info">
				<p class="main-text">
                <?php the_title(); ?>
				</p>
				<p class="main-text price">
					<?php echo $product->get_price(); ?> € 
				</p>
				<div class="btns">
					<a href="<?php echo $product->get_attribute('link');?>" class="main-btn">
						<span>
							Besorgen
						</span>
					</a>
					<a href="<?php the_permalink(); ?>" class="more">
						<span>
							Mehr
						</span>
					</a>
				</div>
			</div>
		</div>
        <?php endwhile; ?>
		<div class="info">
			<h3 class="big-main-title">
				<?php the_field('instagram_title', $page_id); ?>
			</h3>
		</div>
	</div>
	<h2 class="main-title title-center">
	<?php the_field('how_get_subscribers_title', $page_id); ?>
	</h2>
	<div class="container faq-cont">
		<div class="info">
			<h3 class="big-main-title">
			<?php the_field('how_get_subscribers_title_2', $page_id); ?>
			</h3>
			<?php the_field('how_get_subscribers_text', $page_id); ?>
		</div>
		<div class="faqs">
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_1', $page_id); ?>
			</div>
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_2', $page_id); ?>
			</div>
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_3', $page_id); ?>
			</div>
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_4', $page_id); ?>
			</div>
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_5', $page_id); ?>
			</div>
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_6', $page_id); ?>
			</div>
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_7', $page_id); ?>
			</div>
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_8', $page_id); ?>
			</div>
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_9', $page_id); ?>
			</div>
			<div class="faq">
			<?php the_field('how_get_subscribers_answer_10', $page_id); ?>
			</div>
		</div>
	</div>
    <div class="cooperate container">
		<h2 class="title-center main-title">
			Gerne kooperiere ich
		</h2>
		<div class="cooperate-cont">
			<form action="" class="main-form">
				<h3>
					Kontaktieren Sie mich
				</h3>
				<input type="text" name="name" placeholder="Name Nachnahme">
				<input type="text" name="email" placeholder="Email ">
				<input type="text" name="phone" placeholder="Telefon">
				<div class="agreement">
					<input class="agree-checkbox" type="checkbox" id="agree3" name="agree">
					<label for="agree3"></label>
					<p>
					    Ich erkläre mit mit den Datenschutzrichtlinien der Website einverstanden.
					</p>
				</div>
				<button class="main-btn">
					<span>
						Kontaktieren Sie mich
					</span>
				</button>
			</form>
			<img src="<?php echo get_template_directory_uri(); ?>/asets/images/bonus.png" alt="" class="img">
		</div>
		
	</div>
	<?php get_footer('de');?>