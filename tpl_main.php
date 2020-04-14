<?php
/*
Template Name: ГЛАВНАЯ
*/
?>

<?php get_header(); ?> 

<section id="hero">
	<div class="hero px-3 lg:px-6 mb-20">
		<div class="brand h-full" style="background: url(<?php echo get_theme_mod( 'first_screen_img' ); ?>); background-size: cover; background-position: 50%;">
			<div class="container mx-auto h-full">
				<div class="flex flex-col items-center lg:items-start justify-center h-full">
					<div class="brand_title mb-4">
						<span><?php echo get_theme_mod( 'first_screen_title' ); ?></span>
					</div>
					<div class="brand_subtitle mb-10">
						<?php echo get_theme_mod( 'first_screen_subtitle' ); ?>
					</div>
					<div class="brand_description">
						<?php echo get_theme_mod( 'first_screen_description' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="categories">
	<div class="container mx-auto pb-20">
		<div class="w-full">
			<div class="with_vesh text-center mb-12">
				<h2><?php _e('Категории','shop'); ?></h2>
				<img src="<?php bloginfo('template_url'); ?>/assets/img/vesh.svg" alt="" width="125px">
			</div>
			<div class="categories categories_top flex flex-wrap">
				<?php $categories_top = get_terms([
					'taxonomy' => 'product_cat',
					'hide_empty' => true,
					'exclude' => array(15),
					'parent' => 0,
				]); 
				foreach(array_slice($categories_top,0,3) as $category_top): ?>
					<div class="w-full lg:w-1/3 p-3 lg:p-4 mb-4 lg:mb-8">
						<?php 
							$thumbnail_id = get_woocommerce_term_meta( $category_top->term_id, 'thumbnail_id', true );
							$image_cat = wp_get_attachment_url( $thumbnail_id ); 
						?>
						<div class="categories_top_block">
							<div class="categories_top_item flex flex-col justify-center p-4" style="background:url(<?php echo $image_cat; ?>); background-size: cover;">
								<div class="categories_top_item_title mb-6">
									<?php echo $category_top->name; ?>	
								</div>
								<div class="categories_top_item_description mb-8">
									<?php echo $category_top->description; ?>	
								</div>
								<div class="categories_top_item_btn uppercase">
									<a href="<?php echo get_term_link($category_top); ?>">
										<?php _e('Подробнее', 'shop'); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="w-full">
			<div class="btn_more text-center">
				<a href="/store">
					<?php _e('Каталог', 'shop'); ?>
				</a>
			</div>
		</div>
	</div>
</section>

<section id="about">
	<div class="about pb-20">
		<div class="container mx-auto">
			<div class="w-4/5 flex mx-auto">
				<div class="mr-8">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/square.svg" alt="" width="150px" class="about_icon">
				</div>
				<div>
					<h2 class="mb-4 leading-none"><?php _e('О нас', 'shop'); ?></h2>
					<div class="w-full lg:w-2/3 about_text mb-8">
						<?php echo get_theme_mod( 'about_main_page_text' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="product_cat">
	<div class="product_cat">
		<div class="container mx-auto px-4 lg:px-0">
			<div class="product_cat_block relative">
				<div class="with_vesh text-center mb-12">
					<h2><?php _e('Популярные товары','shop'); ?></h2>
					<img src="<?php bloginfo('template_url'); ?>/assets/img/vesh.svg" alt="" width="125px">
				</div>
				<div class="w-full lg:w-4/5 flex flex-wrap flex-col relative mx-auto mb-16">
					<?php 
						$first_product_cat = get_theme_mod( 'product_cat_first' );
						$product_cat_query = new WP_Query( array( 
						'post_type' => 'product', 
						'posts_per_page' => 3,
						'tax_query' => array(
					    array(
				        'taxonomy' => 'product_cat',
						    'terms' => $first_product_cat,
				        'field' => 'slug',
				        'include_children' => true,
				        'operator' => 'IN'
					    )
						),
					) );
					if ($product_cat_query->have_posts()) : while ($product_cat_query->have_posts()) : $product_cat_query->the_post(); ?>
						<div class="product_cat_item">
							<div class="product_cat_item_photo">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="">
							</div>
							<div class="product_cat_item_info">
								<div class="product_cat_item_title">
									<?php the_title(); ?>
								</div>
								<div class="product_cat_item_btn">
									<a href="<?php the_permalink(); ?>">
										<?php _e('Подробнее', 'shop'); ?>
									</a>
								</div>
							</div>
						</div>
					<?php wp_reset_postdata(); endwhile; endif;  ?>
				</div>
				<div class="w-full lg:w-4/5 flex flex-wrap flex-col relative mx-auto mb-16 product_cat_second z-10">
					<?php 
						$first_product_cat = get_theme_mod( 'product_cat_second' );
						$product_cat_query = new WP_Query( array( 
						'post_type' => 'product', 
						'posts_per_page' => 4,
						'tax_query' => array(
					    array(
				        'taxonomy' => 'product_cat',
						    'terms' => $first_product_cat,
				        'field' => 'slug',
				        'include_children' => true,
				        'operator' => 'IN'
					    )
						),
					) );
					if ($product_cat_query->have_posts()) : while ($product_cat_query->have_posts()) : $product_cat_query->the_post(); ?>
						<div class="product_cat_item">
							<div class="product_cat_item_photo">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="">
							</div>
							<div class="product_cat_item_info">
								<div class="product_cat_item_title">
									<?php the_title(); ?>
								</div>
								<div class="product_cat_item_btn">
									<a href="<?php the_permalink(); ?>">
										<?php _e('Подробнее', 'shop'); ?>
									</a>
								</div>
							</div>
						</div>
					<?php wp_reset_postdata(); endwhile; endif;  ?>
				</div>
				<div class="w-full lg:w-4/5 flex flex-wrap flex-col relative mx-auto product_cat_third z-10">
					<?php 
						$first_product_cat = get_theme_mod( 'product_cat_third' );
						$product_cat_query = new WP_Query( array( 
						'post_type' => 'product', 
						'posts_per_page' => 3,
						'tax_query' => array(
					    array(
				        'taxonomy' => 'product_cat',
						    'terms' => $first_product_cat,
				        'field' => 'slug',
				        'include_children' => true,
				        'operator' => 'IN'
					    )
						),
					) );
					if ($product_cat_query->have_posts()) : while ($product_cat_query->have_posts()) : $product_cat_query->the_post(); ?>
						<div class="product_cat_item">
							<div class="product_cat_item_photo">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="">
							</div>
							<div class="product_cat_item_info">
								<div class="product_cat_item_title">
									<?php the_title(); ?>
								</div>
								<div class="product_cat_item_btn">
									<a href="<?php the_permalink(); ?>">
										<?php _e('Подробнее', 'shop'); ?>
									</a>
								</div>
							</div>
						</div>
					<?php wp_reset_postdata(); endwhile; endif;  ?>
				</div>
				<div class="w-full">
					<div class="btn_more text-center">
						<a href="/store">
							<?php _e('Каталог', 'shop'); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="delivery" class="delivery pb-20">
	<div class="container mx-auto mb-8">
		<div class="delivery_block flex flex-col lg:flex-row">
			<div class="w-full lg:w-1/2 flex pr-0 lg:pr-12 mb-10 lg:mb-0">
				<div class="mr-8">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/circle.svg" alt="" width="200px">
				</div>
				<div>
					<h2 class="leading-none mb-4"><?php _e('Доставка', 'shop'); ?></h2>
					<div class="delivery_text">
						<?php echo get_theme_mod( 'about_main_page_text' ); ?>	
					</div>	
				</div>
			</div>
			<div class="w-full lg:w-1/2 flex pl-0 lg:pl-12">
				<div class="mr-8">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/triangle.svg" alt="" width="200px">
				</div>
				<div>
					<h2 class="leading-none mb-4"><?php _e('Оплата', 'shop'); ?></h2>
					<div class="delivery_text">
						<?php echo get_theme_mod( 'about_main_page_text' ); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>