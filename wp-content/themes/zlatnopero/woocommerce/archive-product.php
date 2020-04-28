<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header('shop');
?>

<main class="container">
	<?php $page = get_page_by_title( 'Proizvodi' ); ?>
  <aside class="main-sidebar">
		<h2 class="filter-title">Kategorije</h2>
		<div class="filter-wrapper">
			<?php get_sidebar('sidebar'); ?>
		</div>
  </aside>
  <section class="main-section">
		<?php
		if ( woocommerce_product_loop() ) {
			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}

		/**
		 * Hook: woocommerce_after_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' ); ?>
  <section>
</main>

<?php get_footer(); ?>
