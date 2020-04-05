<?php get_header(); ?>

<div class="container mx-auto px-4 lg:px-0">
	<div class="flex flex-col-reverse lg:flex-row">
		<div class="w-full lg:w-1/4 pr-0 lg:pr-10">
			<?php dynamic_sidebar( 'true_side' ); ?>
		</div>
		<div class="w-full lg:w-3/4 pl-0 lg:pl-10">
			<?php do_action( 'woocommerce_before_main_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php wc_get_template_part( 'content', 'single-product' ); ?>
			<?php endwhile; // end of the loop. ?>
			<?php do_action( 'woocommerce_after_main_content' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>