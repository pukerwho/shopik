<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container mx-auto px-6 lg:px-0 mb-8">
		<div class="w-full mb-20">
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>	

<?php get_footer(); ?>