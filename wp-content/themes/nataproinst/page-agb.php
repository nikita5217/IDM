<?php
$page_id = get_the_ID();
get_header();
?>

	<div class="crumbs container">
		<a href="/">
			Главная
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<p>
			AGB
		</p>
	</div>
	<div class="container text-page">
		<h2 class="main-title text-center text-page-title">
		<?php the_field('agb_title', $page_id); ?>
		</h2>
		<?php the_field('agb_content', $page_id); ?>
	</div>
	<?php get_footer();?>