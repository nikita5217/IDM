<?php


$page_id = get_the_ID();
get_header();
?>
<?php 
		$loop = new WP_Query( array( 
		'post_type' => 'product', 
		'posts_per_page' => 40,
		'orderby' => 'date', 
		'product_cat' => 'services',
		));

		while ( $loop->have_posts() ): $loop->the_post(); ?>
	<div class="overlay overlay-servise-<?php echo $product->get_attribute('popup-id');?>">
		<div class="close"><span></span><span></span></div>
		<form action="" class="main-form">
			<h3>
				Свяжитесь со мной 
			</h3>
			<p class="main-text text-center">
			<?php the_title(); ?>
			</p>
			<p class="main-text text-center">
				<b>
				<?php  echo $product->get_attribute('price');?> 
				</b>
			</p>
			<input type="text" name="name" placeholder="Имя Фамилия">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="phone" placeholder="+7 (999) 999 99 99">
			<div class="agreement">
				<input class="agree-checkbox" type="checkbox" id="agree2" name="agree">
				<label for="agree2"></label>
				<p>
					Нажимая на кнопку Вы соглашаетесь с политкой конфиденциальности на сайте
				</p>
			</div>
			<button class="main-btn">
				<span>
					Купить
				</span>
			</button>
		</form>
	</div>
	<?php endwhile; ?>
	<div class="crumbs container">
		<a href="/">
			Главная
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<p>
			Услуги
		</p>
	</div>
	<div class="page-top-section container">
		<div class="info">
			<h2 class="main-title">
				<?php the_field('cooperate_title', $page_id); ?> 
			</h2>
			<?php the_field('cooperate_text', $page_id); ?>
			<img src="<?php echo get_template_directory_uri(); ?>/asets/images/more-arrow.svg" alt="" class="more-arrow scroll1">
		</div>
		<img src="<?php the_field('cooperate_img', $page_id); ?>" alt="" class="img">
	</div>
	<h2 class="main-title title-center" id="scrollMe1">
		Чем я могу быть полезна Вашему бизнесу?
	</h2>
	<div class="products container">
	<?php 

		while ( $loop->have_posts() ): $loop->the_post(); ?>

		
		<div class="product">
			<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img">
			<div class="info">
				<p class="main-text">
				<?php the_title(); ?>
				</p>
				<?php if($product->get_attribute('popup-id') != $undefined){?>
				<p class="main-text notification">
				<?php echo $product->get_attribute('subtitle');?>
				</p>
				<?php }?>
				<p class="main-text price">
				<?php  echo $product->get_attribute('price');?> 
				</p>
				<?php if($product->get_attribute('popup-id') != $undefined){?>
				<div class="btns">
					<a class="main-btn big-btn overlay-servise-btn-<?php echo $product->get_attribute('popup-id');?>">
						<span>
							Купить
						</span>
					</a>
				</div>
				<?php }else{?>
				<div class="btns">
					<a href="<?php echo $product->get_attribute('link');?>" class="main-btn">
						<span>
							Купить
						</span>
					</a>
					<a href="<?php the_permalink(); ?>" class="more">
						<span>
							Подробнее
						</span>
					</a>
				</div>
				<?php }?>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
	<h2 class="main-title title-center">
	<?php the_field('benefit_title', $page_id); ?>
	</h2>
	<div class="adventures container">
		<img src="<?php the_field('benefit_img_1', $page_id); ?>" alt="" class="img">
		<div class="info">
		<?php the_field('benefit_text_1', $page_id); ?>
		</div>
	</div>
	<div class="adventures revers container">
		<img src="<?php the_field('benefit_img_2', $page_id); ?>" alt="" class="img">
		<div class="info">
		<?php the_field('benefit_text_2', $page_id); ?>
		</div>
	</div>
	<div class="my-team"id="myteam">
		<h2 class="my-team-title" >
		<?php the_field('team_title', $page_id); ?>
		</h2>
		<div class="team-members">
			<?php the_field('team', $page_id); ?>
		</div>
	</div>
	<div class="cooperate container">
		<h2 class="title-center main-title">
			Буду рада сотрудничеству
		</h2>
		<div class="cooperate-cont">
			<form action="" class="main-form">
				<h3>
					Свяжитесь со мной 
				</h3>
				<input type="text" name="name" placeholder="Имя Фамилия">
				<input type="text" name="email" placeholder="Email">
				<input type="text" name="phone" placeholder="+7 (999) 999 99 99">
				<div class="agreement">
					<input class="agree-checkbox" type="checkbox" id="agree3" name="agree">
					<label for="agree3"></label>
					<p>
						Нажимая на кнопку Вы соглашаетесь с политкой конфиденциальности на сайте
					</p>
				</div>
				<button class="main-btn">
					<span>
						Свяжитесь со мной
					</span>
				</button>
			</form>
			<img src="<?php echo get_template_directory_uri(); ?>/asets/images/bonus.png" alt="" class="img">
		</div>
		
	</div>
	

<?php get_footer();?>
