<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<li class="product">
  <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" /></a>
  <a href="<?php the_permalink(); ?>"><h2 class="product-title"><?php the_title(); ?></h2></a>
  <?php if( has_term( 17, 'product_cat' ) ) {?>
      <p class="product-type">Jastuk</p>
  <?php } ?>

	<?php // check if product on sale
	if( $product->is_on_sale() ) { ?>
		<p class="product-price"><del><?php echo $product->regular_price; ?><span class="rsd">rsd</span></del><?php echo $product->sale_price; ?><span class="rsd">rsd</span></p>
	<?php } else { ?>
		<p class="product-price"><?php echo $product->regular_price; ?><span class="rsd">rsd</span></p>
	<?php } ?>
</li>
