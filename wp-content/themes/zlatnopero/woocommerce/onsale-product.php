<?php
defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<li class="product najprodavaniji">

<!-- get price -->
<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>


  <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" /><span class="on-sale">Sniženo</span></a>
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
