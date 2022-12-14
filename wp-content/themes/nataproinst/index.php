<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nataproinst
 */

get_header();
?>

<div class="top-section container">
		<div class="info">
			<h2 class="main-title">
				Упаковка и продвижение Instagram аккаунтов для бизнеса в Европе 
			</h2>
			<p class="main-text">
				Как с помощью Instagram увеличить прибыль своего бизнеса – узнайте на моей <a class="overlay-btn overlay-btn-3">бесплатной <img src="<?php echo get_template_directory_uri(); ?>/asets/images/info.svg" alt="" class="info-img"></a>   индивидуальной консультации
			</p>
			<a class="main-btn overlay-btn-1"><span>Получить консультацию</span></a>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/top-photo-1.png" alt="" class="img">
	</div>
	<div class="benefits-cont container">
		<h2 class="main-title">
			Чем я могу быть вам полезна?
		</h2>
		<div class="benefits">
			<div class="benefit">
				<img src="<?php echo get_template_directory_uri(); ?>/asets/images/benefit-img-1.png" alt="" class="img">
				<div class="info">
					<h3>
						Мои уникальные авторские продукты
					</h3>
					<p>
						Закрытый Telegram-канал с готовым контентом для Instagram, фишками стильного оформления и ведения профиля. Уникальные пресеты и нарисованные стикер-паки для визуала, который выделит вас среди конкурентов.
					</p>
					<a href="<?php echo get_template_directory_uri(); ?>/asets/products.html" class="main-btn"><span>Подробнее</span></a>
				</div>
			</div>
			<div class="benefit">
				<img src="<?php echo get_template_directory_uri(); ?>/asets/images/benefit-img-2.png" alt="" class="img">
				<div class="info">
					<h3>
						Чем я могу помочь вашему бизнесу?
					</h3>
					<p>
						Комплексно подготовлю ваш аккаунт к продвижению и рекламе, благодаря правильной визуальной концепции, дизайну и стратегии по созданию личного бренда.
					</p>
					<a href="<?php echo get_template_directory_uri(); ?>/asets/servises.html" class="main-btn"><span>Подробнее</span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="about container">
		<div class="info">
			<h2 class="main-title">
				Обо мне
			</h2>
			<p class="main-text">
				Меня зовут Наталья. Я инстаграм-маркетолог и эксперт в области создания визуального контента
			</p>
			<p class="main-text">
				Более 6 лет живу в Германии. Мои клиенты - это блогеры и предприниматели со всего мира.
			</p>
			<p class="main-text">
				Прошла обучение у ведущих европейских экспертов по Инстаграм в разных направлениях. И успешно вкладываю свои знания и опыт в авторские разработки
			</p>
			<p class="main-text">
				Изучила особенности продаж через Инстаграм в разных странах, в том числе самой консервативной - Германии
			</p>
			<p class="main-text">
				Веду свой блог, где делюсь как самостоятельно без вложений продвигаться в Инстаграм. Делюсь фишками и лайфхаками по созданию продающего визуала.
			</p>
			<a href="<?php echo get_template_directory_uri(); ?>/asets/about.html" class="main-btn"><span>Узнать больше</span></a>
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
					Приятный бонус
				</h2>
				<p class="main-text">
					При заполнении формы ниже, вы получаете доступ к Telegram-каналу, в котором я делюсь трендами оформления ленты и сторис!
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
	<div class="insta-cont container">
		<h2 class="main-title">
			Подписывайся на мой Instagram
		</h2>
		<div id="allrecords" data-tilda-export="yes" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="4972653" data-tilda-page-id="24471131" data-tilda-formskey="3319bb99477f6f5a6f3091d264972653" data-tilda-lazy="yes">
			<div id="rec394976724" class="r t-rec"  data-animationappear="off" data-record-type="802" >
				<div class="t802">
					 <div class="t802__container t802__container_indent t802__container_clgap-40px" data-cols-in-line="3">
						  <div class="t802__col t802__col_33">
							   <div class="t802__imgwrapper t802__imgwrapper_empty t802__imgwrapper_original-size"> 
								   <div class="t802__hover-wrapper"> </div>
								</div> 
							</div> 
						<div class="t802__col t802__col_33"> 
							<div class="t802__imgwrapper t802__imgwrapper_empty t802__imgwrapper_original-size"> 
						<div class="t802__hover-wrapper"> </div> 
					</div> 
				</div> 
				<div class="t802__col t802__col_33"> 
					<div class="t802__imgwrapper t802__imgwrapper_empty t802__imgwrapper_original-size"> 
						<div class="t802__hover-wrapper"> </div>
					</div> 
				</div> 
				<div class="t802__col t802__col_33"> 
					<div class="t802__imgwrapper t802__imgwrapper_empty t802__imgwrapper_original-size"> 
						<div class="t802__hover-wrapper"> </div> 
					</div> 
				</div> 
				<div class="t802__col t802__col_33">
					<div class="t802__imgwrapper t802__imgwrapper_empty t802__imgwrapper_original-size"> 
						 <div class="t802__hover-wrapper"> </div> 
					</div> 
				</div> 
			<div class="t802__col t802__col_33"> 
				<div class="t802__imgwrapper t802__imgwrapper_empty t802__imgwrapper_original-size"> 
					<div class="t802__hover-wrapper"> </div> 
				</div> 
			</div> 
		</div>
	</div><script type="text/javascript"> $(document).ready(function() { t802_insta_init('394976724','nata.proinst'); });</script></div></div>
	</div>

<?php
get_footer();
