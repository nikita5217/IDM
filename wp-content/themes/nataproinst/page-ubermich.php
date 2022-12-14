<?php
$page_id = get_the_ID();
get_header('de');
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asets/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asets/slick/slick-theme.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/asets/slick/slick.min.js"></script>
	<div class="crumbs container">
		<a href="/maindeutsch">
			Home
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<p>
			Über mich
		</p>
	</div>
	<div class="page-top-section container">
		<div class="info">
			<h2 class="main-title">
			<?php the_field('about_top_title', $page_id); ?>
			</h2>
			<?php the_field('about_top_text', $page_id); ?>
			<img src="<?php echo get_template_directory_uri(); ?>/asets/images/more-arrow.svg" alt="" class="more-arrow scroll1">
		</div>
		<img src="<?php the_field('about_top_img', $page_id); ?>" alt="" class="img">
	</div>
	<div class="quote-block conainer" id="scrollMe1">
		<h2 class="quote">
		<?php the_field('title_quote_1', $page_id); ?>
		</h2>
		<div class="info">
		<?php the_field('text_quote_1', $page_id); ?>
		</div>
	</div>
	<h2 class="main-title title-center">
	<?php the_field('edit_my_life_title', $page_id); ?>
	</h2>
	<div class="text-block container mb--1">
		<img src="<?php the_field('edit_my_life_img_1', $page_id); ?>" alt="" class="img">
		<div class="info">
		<?php the_field('edit_my_life_text_1', $page_id); ?>
		</div>
	</div>
	<div class="text-block text-block-2 container revers">
		<img src="<?php the_field('edit_my_life_img_2', $page_id); ?>" alt="" class="img">
		<div class="info">
		<?php the_field('edit_my_life_text_2', $page_id); ?>
		</div>
	</div>
	<h2 class="main-title title-center">
	<?php the_field('story_title', $page_id); ?>
	</h2>
	<div class="story container desk">
	<?php the_field('story_text_desk', $page_id); ?>
	</div>
	<div class="story container mob">
	<?php the_field('story_text_mob', $page_id); ?>
	</div>
	<div class="why container">
		<div class="banners-wraper">
			<div class="banners-cont">
				<img src="<?php echo get_template_directory_uri(); ?>/asets/images/orange-arrow.svg" alt="" class="arrow arrow-left">
				<img src="<?php echo get_template_directory_uri(); ?>/asets/images/orange-arrow.svg" alt="" class="arrow arrow-right">
				<div class="loupe">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/loupe.svg" alt="">
				</div>
				<?php the_field('design_visual_imgs_1', $page_id); ?>
				
			</div>
			<?php the_field('design_visual_imgs_2', $page_id); ?>
		</div>
		<div class="info">
			<h2 class="main-title">
			<?php the_field('design_visual_title', $page_id); ?>
			</h2>
			<?php the_field('design_visual_text', $page_id); ?>
		</div>
	</div>
	<div class="quote-block conainer">
		<h2 class="quote">
		<?php the_field('title_quote_2', $page_id); ?>
		</h2>
		<div class="info">
		<?php the_field('text_quote_2', $page_id); ?>
			<a href="/leistungen#myteam" class="main-btn">
				<span>
				    Mehr zum Team
				</span>
			</a>
		</div>
	</div>
	<div class="what-i-do container">
		<div class="what-i-do-col">
			<div class="what-i-do-info">
			<?php the_field('square_1', $page_id); ?>
			</div>
			<a href="/produkte" class="main-btn"><span>Mehr</span></a>
		</div>
		<div class="what-i-do-col">
			<div class="what-i-do-info">
			<?php the_field('square_2', $page_id); ?>
			</div>
			<a href="/leistungen" class="main-btn"><span>Mehr</span></a>
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
	<script type="text/javascript">
		 $('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: true,
			asNavFor: '.slider-nav'
		});
			$('.slider-nav').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			centerMode: false,
			focusOnSelect: true
		});
		$('.banners-cont .arrow-right').on('click', function() {
          $('.slider-for').slick('slickNext');
        });
        $('.banners-cont .arrow-left').on('click', function() {
          $('.slider-for').slick('slickPrev');
        });
	</script>
	