<?php $page_id = get_the_ID();
get_header(); ?>
	<div class="crumbs container">
		<a href="./">
			Главная
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<p>
			Datenschutzerklärung
		</p>
	</div>
	<div class="container text-page">
		
		<h2 class="main-title text-center text-page-title">
			Datenschutzerklärung
		</h2>
		<?php the_field('datenschutzerklarung_content', $page_id); ?>
		
	</div>
	<?php get_footer();?>