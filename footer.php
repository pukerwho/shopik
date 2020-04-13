		</section>
		<footer class="footer py-10">
			<div class="footer_ball">
				<img src="https://static.tildacdn.com/tild6263-3566-4333-a232-613661363237/28.svg" alt="" width="80px">
			</div>
			<div class="container mx-auto px-4 lg:px-0">
				<div class="flex flex-col lg:flex-row mb-4 lg:mb-8">
					<div class="w-full lg:w-1/3 mb-6 lg:mb-0">
						<h2 class="text-center lg:text-left mb-4">
							<?php _e('Каталог', 'shop'); ?>	
						</h2>
						<div>
							<?php $categories = get_terms([
								'taxonomy' => 'product_cat',
								'hide_empty' => false,
								'exclude' => array(15),
								'parent' => 0,
							]); 
							foreach($categories as $category): ?>
								<li class="list-none">
									<a href="<?php echo get_term_link($category); ?>">
										<?php echo $category->name; ?>
									</a>	
								</li>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="w-full lg:w-1/3 mb-6 lg:mb-0">
						<h2 class="text-center lg:text-left mb-4">
							<?php _e('Клиенту', 'shop'); ?>	
						</h2>
						<div>
							<li class="list-none">
								<a href="#">Таблица размеров</a>
							</li>
						</div>
					</div>
					<div class="w-full lg:w-1/3 mb-6 lg:mb-0">
						<div class="mb-8">
							<h2 class="text-center mb-4">
								<?php _e('Контакты', 'shop'); ?>	
							</h2>
							<div class="flex mb-4">
								<div class="w-1/3 lg:w-1/4 mr-4">
									<?php _e('Телефоны', 'shop'); ?>:
								</div>
								<div class="flex flex-col">
									<?php if (get_theme_mod( 'contact_phone_life' )): ?>
										<a href="tel:<?php echo get_theme_mod( 'contact_phone_life' ); ?>">
											<?php echo get_theme_mod( 'contact_phone_life' ); ?>
										</a>
									<?php endif; ?>
									<?php if (get_theme_mod( 'contact_phone_vodafon' )): ?>
										<a href="tel:<?php echo get_theme_mod( 'contact_phone_vodafon' ); ?>">
											<?php echo get_theme_mod( 'contact_phone_vodafon' ); ?>
										</a>
									<?php endif; ?>
									<?php if (get_theme_mod( 'contact_phone_kyivstar' )): ?>
										<a href="tel:<?php echo get_theme_mod( 'contact_phone_kyivstar' ); ?>">
											<?php echo get_theme_mod( 'contact_phone_kyivstar' ); ?>
										</a>
									<?php endif; ?>
								</div>
							</div>
							<div class="flex mb-4">
								<div class="w-1/3 lg:w-1/4 mr-4">
									<?php _e('Email', 'shop'); ?>:
								</div>
								<div class="flex flex-col">
									<a href="mailto:<?php echo get_theme_mod( 'contact_email' ); ?>"><?php echo get_theme_mod( 'contact_email' ); ?></a>
								</div>
							</div>
							<div class="flex mb-4">
								<div class="w-1/3 lg:w-1/4 mr-4">
									<?php _e('Адрес', 'shop'); ?>:
								</div>
								<div class="flex flex-col">
									<?php echo get_theme_mod( 'contact_address' ); ?>
								</div>
							</div>
						</div>
						<div>
							<div class="btn text-white text-center modal_click_js" data-modal-id="modal_callback">
								<?php _e('Заказать обратный звонок', 'shop'); ?>
							</div>
						</div>
					</div>
				</div>	
				<div class="copyright text-center pt-8">
					<?php _e('Разработка', 'shop'); ?>: <a href="https://timeto.top">TimeToTop</a>
				</div>
			</div>
		</footer>

		<!-- ФОРМЫ -->
		<div class="modal modal_order" data-modal-id="modal_callback">
    	<div class="modal_block rounded-lg shadow-lg pb-0 lg:pb-12">
    		<div class="px-4 py-8 lg:px-12">
    			<h3 class="secondary-font text-black text-3xl text-center uppercase mb-6"><?php _e( 'Обратный звонок', 'shop' ); ?></h3>
    			<div>
    				<?php 
              $form_callback = get_theme_mod( 'contact_callback' ); 
              echo do_shortcode(''. $form_callback .'');
            ?>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="modal_bg"></div>
	<?php wp_footer(); ?>
	</body>
</html>