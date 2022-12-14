<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nataproinst
 */

$page_id = get_the_ID();
get_header('de');
$loop = new WP_Query( array( 
	'post_type' => 'product', 
	'posts_per_page' => 40,
	'orderby' => 'date', 
	'product_cat' => 'produkte',
));?>
<div class="crumbs container">
		<a href="/maindeutsch">
			Home
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<p>
			Produkte
		</p>
	</div>
	<div class="page-top-section container">
		<div class="info">
			<h2 class="main-title">
			<?php the_field('products_top_title', $page_id); ?> 
			</h2>
			<?php the_field('products_top_text', $page_id); ?> 
			<img src="<?php echo get_template_directory_uri(); ?>/asets/images/more-arrow.svg" alt="" class="more-arrow scroll1">
		</div>
		<img src="<?php the_field('products_top_img', $page_id); ?> " alt="" class="img">
	</div>
	<div class="quote-block conainer" id="scrollMe1">
		<h2 class="quote">
		<?php the_field('unique_visual_title', $page_id); ?> 
		</h2>
		<div class="info">
		<?php the_field('unique_visual_text', $page_id); ?> 
		</div>
	</div>
	<h2 class="main-title title-center">
		Meine Produkte
	</h2>
	<div class="products container">
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

	</div>
	<div class="exmple-sliders">
		<h2 class="main-title">
			Feedback - Kundenbewertungen
		</h2>
		<div class="tabs">
			<div class="tab active">
				<div class="slider">
					<div class="arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/asets/images/arrow.svg" alt="">
					</div>
					<div class="slides">
						<div class="slide active">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8218.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8219.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8220.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8221.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8222.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8223.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8224.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8225.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8226.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8227.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8228.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8229.JPG" alt="">
						</div>

						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8230.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8232.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/review/IMG_8233.JPG" alt="">
						</div>
					</div>
					<div class="arrow arrow-right">
						<img src="<?php echo get_template_directory_uri(); ?>/asets/images/arrow.svg" alt="">
					</div>
					<div class="dots">
					</div>
				</div>
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
