<?php get_header(); ?>

<div class="container mx-auto px-4 lg:px-0">
	<div class="flex flex-col-reverse lg:flex-row">
		<div class="w-full lg:w-1/4 pr-0 lg:pr-10">
			<?php dynamic_sidebar( 'true_side' ); ?>
		</div>
		<div class="w-full lg:w-3/4 pl-0 lg:pl-10">
			<div class="flex">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/square.svg" alt="" width="25px" class="mr-4">
				<h1 class="text-4xl"><?php woocommerce_page_title(); ?></h1>
			</div>
			<!-- Хлебные крошки -->
			<?php do_action( 'woocommerce_before_main_content' ); ?>

			<?php
				if ( woocommerce_product_loop() ) {
					do_action( 'woocommerce_before_shop_loop' );
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

					/**
					 * Hook: woocommerce_after_shop_loop.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				} else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action( 'woocommerce_no_products_found' );
				}
				do_action( 'woocommerce_after_main_content' );
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>