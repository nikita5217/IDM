<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nataproinst
 */
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Instagram Digital Marketing</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asets/css/tilda-grid-3.0.min.css" type="text/css" media="all" /><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asets/css/tilda-blocks-2.14.css?t=1640207450" type="text/css" media="all" /><link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&subset=latin,cyrillic" rel="stylesheet"><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asets/css/tilda-animation-1.0.min.css" type="text/css" media="all" /><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asets/css/tilda-slds-1.4.min.css" type="text/css" media="print" onload="this.media='all';" /><noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asets/css/tilda-slds-1.4.min.css" type="text/css" media="all" /></noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asets/css/tilda-zoom-2.0.min.css" type="text/css" media="print" onload="this.media='all';" /><noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asets/css/tilda-zoom-2.0.min.css" type="text/css" media="all" /></noscript><script src="<?php echo get_template_directory_uri(); ?>/asets/js/jquery-1.10.2.min.js"></script><script src="<?php echo get_template_directory_uri(); ?>/asets/js/tilda-scripts-3.0.min.js"></script><script src="<?php echo get_template_directory_uri(); ?>/asets/js/tilda-blocks-2.7.js?t=1640207450"></script><script src="js/lazyload-1.3.min.js" charset="utf-8" async></script><script src="<?php echo get_template_directory_uri(); ?>/asets/js/tilda-animation-1.0.min.js" charset="utf-8" async></script><script src="<?php echo get_template_directory_uri(); ?>/asets/js/tilda-cover-1.0.min.js" charset="utf-8" async></script><script src="<?php echo get_template_directory_uri(); ?>/asets/js/tilda-events-1.0.min.js" charset="utf-8" async></script><script type="text/javascript">window.dataLayer = window.dataLayer || [];</script><script type="text/javascript">if((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent))===false && typeof(sessionStorage)!='undefined' && sessionStorage.getItem('visited')!=='y'){	var style=document.createElement('style');	style.type='text/css';	style.innerHTML='@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';	document.getElementsByTagName('head')[0].appendChild(style);	$(document).ready(function() {	$('.t-records').addClass('t-records_animated');	setTimeout(function(){ $('.t-records').addClass('t-records_visible'); sessionStorage.setItem('visited','y');	},400);	});
	}</script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asets/style/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asets/style/page1.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asets/style/page2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asets/style/page3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asets/style/page4.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asets/style/page5.css">
	<meta property="og:type" content="website">
    <meta property="og:title" content="Упаковка и продвижение аккаунтов Instagram в Европе и по всему миру"> 
    <meta property="og:description" content=""> 
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/asets/image/top-photo-1.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="670">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/asets/images/flaticon.png" type="(image/png)">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/asets/images/flaticon.png" type="(image/png)">
</head>
<body>
	<?php opcache_reset();?>
	<header class="container">
		<a href="/de/maindeutsch/" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/asets/images/logo.svg" alt="">
		</a>
		<div class="right-part">
				<nav>
					<?php $args = array(
						'theme_location'  => 'de_menu',
						'container' => false,
						'echo' => false,
						'items_wrap' => '%3$s',
						'depth' => 0,
						);
						
					echo strip_tags(wp_nav_menu($args), '<a>'); ?>
				</nav>
			<a href="tel:491516744437" class="phone">
				<img src="<?php echo get_template_directory_uri(); ?>/asets/images/phone.svg" alt="">
				+49 1516 744 43 57
			</a>
			<div class="soc-netw">
				<a href="https://www.instagram.com/nata.proinst/">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/insta.svg" alt="">
				</a>
				<a href="https://www.facebook.com/NataliaToolsy">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/facebook.svg" alt="">
				</a>
				<a href="https://t.me/natatatamaur">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/telegram.svg" alt="">
				</a>
				<a href="https://api.whatsapp.com/send/?phone=%2B4915167444357&text=urlencodedtex&app_absent=0">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/whatsapp.svg" alt="">
				</a>
			</div>
			<div class="langs">
				<div class="lang">
					DE
				</div>
				<div class="overlay-lang">
					<a href="/maindeutsch" class="overlay-lang-item" >
						DE
					</a>
					<a href="/" class="overlay-lang-item">
						RU
					</a>
				</div>
			</div>
		</div>
		<div class="burger">
			<span></span><span></span><span></span>
		</div>
	</header>
	<div class="background-overlay"></div>
	<div class="overlay overlay-1">
		<div class="close"><span></span><span></span></div>
		<form action="" class="main-form">
			<h3>
				Anmeldeformular
			</h3>
			<input type="text" name="name" placeholder="Name Nachnahme">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="phone" placeholder="Telefon">
			<div class="agreement">
				<input class="agree-checkbox" type="checkbox" id="agree1" name="agree">
				<label for="agree1"></label>
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
	</div>
	<div class="overlay overlay-2">
		<div class="close"><span></span><span></span></div>
		<form action="" class="main-form">
			<h3>
				Свяжитесь со мной 
			</h3>
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
					Свяжитесь со мной
				</span>
			</button>
		</form>
	</div>
	<div class="overlay overlay-consultation overlay-3">
		<div class="close" style="display: none;"><span></span><span></span></div>
		<p>
			Консультация длиться 30 минут и мы разберем ваш индивидуальный запрос в сфере продвижения и оформления Instagram
		</p>
	</div>
	<div class="overlay overlay-consultation overlay-lang">
		<div class="close" style="display: none;"><span></span><span></span></div>
		<p>
			Страницы ещё в разработке 
		</p>
	</div>
	<div class="overlay overlay-consultation overlay-cookie">
		<div class="close" style="display: none;"><span></span><span></span></div>
		<h2 class="main-title">
			Wir verwenden Cookies
		</h2>
		<p class="main-text">
			Wir nutzen Cookies auf unserer Website, um sie zu verbessern. Wenn Sie auf "Cookies akzeptieren" klicken, stimmen Sie der Verwendung der Cookies zu. Cookies von Drittanbietern können auch abgelehnt werden. Sie können Ihre Cookie-Einstellungen jederzeit ändern.
		</p>
		<div class="btns">
			<div class="main-btn">
				<span>
					Cookies akzeptieren
				</span>
			</div>
			<div class="main-btn cencel">
				<span>
					Nur notwendige Cookies
				</span>
			</div>
		</div>
		<div class="bottom-links">
			<a href="<?php echo get_template_directory_uri(); ?>/asets/impressum.html">
				Impressum
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/asets/datenschutzerklärung.html">
				Datenschutzerklärung
			</a>
		</div>
	</div>
	<div class="overlay overlay-consultation overlay-cookie">
		<div class="close" style="display: none;"><span></span><span></span></div>
		<h2 class="main-title">
			Wir verwenden Cookies
		</h2>
		<p class="main-text">
			Wir nutzen Cookies auf unserer Website, um sie zu verbessern. Wenn Sie auf "Cookies akzeptieren" klicken, stimmen Sie der Verwendung der Cookies zu. Cookies von Drittanbietern können auch abgelehnt werden. Sie können Ihre Cookie-Einstellungen jederzeit ändern.
		</p>
		<div class="btns">
			<div class="main-btn">
				<span>
					Cookies akzeptieren
				</span>
			</div>
			<div class="main-btn cencel">
				<span>
					Nur notwendige Cookies
				</span>
			</div>
		</div>
		<div class="bottom-links">
			<a href="<?php echo get_template_directory_uri(); ?>/asets/impressum.html">
				Impressum
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/asets/datenschutzerklärung.html">
				Datenschutzerklärung
			</a>
		</div>
	</div>
	

