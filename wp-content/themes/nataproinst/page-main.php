<?php

$page_id = get_the_ID();
get_header();
?>

<div class="top-section container">
		<div class="info">
			<h2 class="main-title">
			<?php the_field('top_title', $page_id); ?>
			</h2>
			
			<?php the_field('top_text', $page_id); ?>
			
			<a class="main-btn overlay-btn-1"><span>Получить консультацию</span></a>
		</div>
		
		<img src="<?php  the_field('top_img', $page_id); ?>" alt="" class="img">
	</div>
	<div class="benefits-cont container">
		<h2 class="main-title">
			Чем я могу быть вам полезна? 
		</h2>
		<div class="benefits">
			<div class="benefit">
				<img src="<?php the_field('my_favor-img_1', $page_id); ?>" alt="" class="img">
				<div class="info">
					<h3>
					<?php the_field('my_favor-title_1', $page_id); ?>
					</h3>
					<p>
					<?php the_field('my_favor-text_1', $page_id); ?>
					</p>
					<a href="/products" class="main-btn"><span>Подробнее</span></a>
				</div>
			</div>
			<div class="benefit">
				<img src="<?php the_field('my_favor-img_2', $page_id); ?>" alt="" class="img">
				<div class="info">
					<h3>
					<?php the_field('my_favor-title_2', $page_id); ?>
					</h3>
					<p>
					<?php the_field('my_favor-text_2', $page_id); ?>
					</p>
					<a href="/services" class="main-btn"><span>Подробнее</span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="about container">
		<div class="info">
			<h2 class="main-title">
				Обо мне
			</h2>
			<?php the_field('about_text', $page_id); ?>
			<a href="/about" class="main-btn"><span>Узнать больше</span></a>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/about-img.png" alt="" class="img">
	</div>
	<div class="exmple-sliders">
		<h2 class="main-title">
			Примеры моих работ
		</h2>
		<tabs class="tabs-head">
			<p class="main-text active">
				Сторис
			</p>
			<p class="main-text">
				Оформление ленты
			</p>
			<p class="main-text">
				Обложки
			</p>
		</tabs>
		<div class="tabs">
			<div class="tab active">
				<div class="slider">
					<div class="arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/asets/images/arrow.svg" alt="">
					</div>
					<div class="slides">
						<div class="slide active">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1353.PNG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1354.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1335.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1336.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1337.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1338.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1339.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1340.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1342.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1343.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1344.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1346.PNG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1348.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1359.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1361.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1360.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1333.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1332.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1327.PNG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1325.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1326.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1328.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1329.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1330.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1350.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1355.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1357.JPG" alt="">
						</div>

						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1358.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1347.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/stories/IMG_1345.JPG" alt="">
						</div>
					</div>
					<div class="arrow arrow-right">
						<img src="<?php echo get_template_directory_uri(); ?>/asets/images/arrow.svg" alt="">
					</div>
					<div class="dots">
					</div>
				</div>
			</div>
			<div class="tab">
				<div class="slider">
					<div class="arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/asets/images/arrow.svg" alt="">
					</div>
					<div class="slides">
						<div class="slide active">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7484.PNG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7485.PNG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7490.PNG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7494.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7497.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7504.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7506.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7507.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7508.JPG" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/feed/IMG_7510.JPG" alt="">
						</div>
					</div>
					<div class="arrow arrow-right">
						<img src="<?php echo get_template_directory_uri(); ?>/asets/images/arrow.svg" alt="">
					</div>
					<div class="dots">
					</div>
				</div>
			</div>
			<div class="tab">
				<div class="slider">
					<div class="arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/asets/images/arrow.svg" alt="">
					</div>
					<div class="slides">
						<div class="slide active">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-1.jpg" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-2.jpg" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-3.jpg" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-4.jpg" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-5.jpg" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-6.jpg" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-7.jpg" alt="">
						</div>

						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-8.jpg" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-9.jpg" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16-10.jpg" alt="">
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/asets/images/covers/9_16.jpg" alt="">
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
	<div class="bonus-cont container">
		<div class="bonus-top-info">
			<div class="info">
				<h2>
				<?php the_field('bonus_title', $page_id); ?>
				</h2>
				<p class="main-text">
				<?php the_field('bonus_text', $page_id); ?>
				</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/asets/images/bonus.png" alt="" class="img">
		</div>
		<form action="">
			<input type="text" placeholder="Имя Фамилия">
			<input type="text" placeholder="Email">
			<input type="text" placeholder="Телефон">
			<div class="info">
				<button type="button" class="main-btn">
					<span>
						Получить бонус
					</span>
				</button>
				<p>
					Нажимая на кнопку Вы соглашаетесь с политкой конфиденциальности на сайте
				</p>
			</div>
		</form>
	</div>

<?php
get_footer();
