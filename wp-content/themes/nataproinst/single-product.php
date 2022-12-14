<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */
$product = wc_get_product( $post );
if( $product->get_attribute('category') == 'Produkte' || $product->get_attribute('category') == 'Leistungen'){
get_header('de'); ?>
	<div class="crumbs container">
		<a href="/">
			Home
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<a href="<?php echo $product->get_attribute('category_link');?>">
		<?php echo $product->get_attribute('category');?>
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<p>
		<?php the_title(); ?>
		</p>
	</div>
	<div class="product-info container">
		<div class="img">
			<?php echo $product->get_image();?>
		</div>
		<div class="info">
			<div>
				<h2 class="main-title">
				<?php echo $product->get_name(); ?>
				</h2>
				<p class="price">
				<?php echo $product->get_price();?> € 
				</p>
			</div>
			<a href="<?php echo $product->get_attribute('link');?>" class="main-btn">
				<span>
					Besorgen
				</span>
			</a>
		</div>
	</div>

		
	<div class="product-desc container">
	
	<?php echo $product->get_description();; ?>
	</div>
<?php
get_footer('de');
}else{
get_header(); ?>


	<div class="crumbs container">
		<a href="/">
			Главная
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<a href="<?php echo $product->get_attribute('category_link');?>">
		<?php echo $product->get_attribute('category');?>
		</a>
		<img src="<?php echo get_template_directory_uri(); ?>/asets/images/crumbs-arrow.svg" alt="">
		<p>
		<?php the_title(); ?>
		</p>
	</div>
	<div class="product-info container">
		<div class="img">
			<?php echo $product->get_image();?>
		</div>
		<div class="info">
			<div>
				<h2 class="main-title">
				<?php echo $product->get_name();; ?>
				</h2>
				<p class="price">
				<?php echo $product->get_price();?> € 
				</p>
			</div>
			<a href="<?php echo $product->get_attribute('link');?>" class="main-btn">
				<span>
					Купить
				</span>
			</a>
		</div>
	</div>

		
	<div class="product-desc container">
	
	<?php echo $product->get_description();; ?>
	</div>

			

<?php get_footer();
}
?>


