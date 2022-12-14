
<footer>
		<div class="footer-cont container">
			<div class="main-col">
				<a href="/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/logo.svg" alt="">
				</a>
				<p>
					© Instagram Digital Marketing, 2021
				</p>
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
			</div>
			<div class="col">
				<h2>
					Speisekarte
				</h2>
				<?php $args = array(
						'theme_location'  => 'de_menu',
						'container' => false,
						'echo' => false,
						'items_wrap' => '%3$s',
						'depth' => 0,
						);
						
					echo strip_tags(wp_nav_menu($args), '<a>'); ?>
			</div>
			<div class="col">
				<h2>
					Kontakt
				</h2>
				<a class="contact overlay-btn-2">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/phone.svg" alt="">
					<p>
						+49 1516 744 43 57
						<span>
							Rückruf
						</span>
					</p>
				</a>
				<a href="mailto:nataproinst@gmail.com" class="contact">
					<img src="<?php echo get_template_directory_uri(); ?>/asets/images/mail.svg" alt="">
					<p>
						nataproinst@gmail.com
					</p>
				</a>
			</div>
			<div class="col">
				<h2>
					Dokumente
				</h2>
				<a href="/impressum_de">
					Impressum
				</a>
				<a href="/datenschutzerklarung_de">
					Datenschutzerklärung
				</a>
				<a href="/agb_de">
					AGB
				</a>
				<img src="<?php echo get_template_directory_uri(); ?>/asets/images/pay-system.svg" alt="" class="pay-system-logo">
			</div>
		</div>
		<div class="bottom-footer-section">
			<p>
				Webseite entwickelt: <a href=""> Ods_studio</a>
			</p>
		</div>
	</footer>
	
	<script src="<?php echo get_template_directory_uri(); ?>/asets/js/script.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/asets/js/header.js"></script>
	<script type="text/javascript">if (! window.mainTracker) { window.mainTracker = 'tilda'; }	setTimeout(function(){	(function (d, w, k, o, g) { var n=d.getElementsByTagName(o)[0],s=d.createElement(o),f=function(){n.parentNode.insertBefore(s,n);}; s.type = "text/javascript"; s.async = true; s.key = k; s.id = "tildastatscript"; s.src=g; if (w.opera=="[object Opera]") {d.addEventListener("DOMContentLoaded", f, false);} else { f(); } })(document, window, 'c07c5c53c30da1d6c54510edd3d83686','script','<?php echo get_template_directory_uri(); ?>/asets/js/tilda-stat-1.0.min.js');	}, 2000);</script>
	<script src="<?php echo get_template_directory_uri(); ?>/asets/js/faq.js"></script>
	<?php if($_SESSION['cookie'] != 'true') {  ?>
		
		<script type="text/javascript">
				setTimeout(() => {
				backgroundCond = false;
				overlayCookie.style.display = 'block';
				background.style.display = 'block';
				setTimeout(() => {
					overlayCookie.classList.add('active')
					background.classList.add('active');
				}, 100);
				}, 500);
				for (let i = 0; i < overlayCookieBtns.length; i++) {
				overlayCookieBtns[i].addEventListener('click', ()=>{
					backgroundCond = true;
					overlayCookie.classList.remove('active')
					background.classList.remove('active');
					setTimeout(() => {
					overlayCookie.style.display = 'none';
					background.style.display = 'none';
					}, 300);
				})
				
				}
	</script>
	<?php }

	 $_SESSION['cookie'] = 'true';
	?>
<?php wp_footer(); ?>

</body>
</html>
