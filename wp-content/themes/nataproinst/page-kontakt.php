<?php


$page_id = get_the_ID();
get_header('de');
?>
	<div class="crumbs container">
		<a href="/maindeutsch">
			Home
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<p>
			Kontakt
		</p>
	</div>
	
	<div class="cooperate container">
		<div class="cooperate-cont">
			<div class="cooperate-info">
				<h2 class="main-title">
					Gerne kooperiere ich
				</h2>
				<a href="tel:4915167444357" class="cooperate-contact">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/orange-phone.svg" alt="">
					<p class="main-text">
						+49 1516 744 43 57
					</p>
				</a>
				<a href="https://api.whatsapp.com/send/?phone=%2B4915167444357&text=urlencodedtex&app_absent=0" target="_blank" class="cooperate-contact">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/orange-watsapp.svg" alt="">
					<p class="main-text">
						+49 1516 744 43 57
					</p>
				</a>
				<a href="https://t.me/natatatamaur" target="_blank" class="cooperate-contact">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/orange-telegram.svg" alt="">
					<p class="main-text">
						@natatatamaur
					</p>
				</a>
				<a href="mailto:nataproinst@gmail.com" class="cooperate-contact">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/orange-mail.svg" alt="">
					<p class="main-text">
						nataproinst@gmail.com
					</p>
				</a>
			</div>
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
		</div>
		
	</div>
	<?php get_footer('de');?>