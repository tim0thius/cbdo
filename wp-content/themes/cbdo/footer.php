<div class="clear"></div>
</div>

<footer class="block-footer section section--contained" role="contentinfo">
	<div class="block-footer__inner section__inner">
		
		<div class="grid grid--center">
			<div class="grid__item one-third portable--one-whole">
				<h2 class="block-footer__heading">Contact</h2>
				<div class="block-footer__divider"></div>
				<div class="block-footer__contact">
					<?php 
						$form_id = get_field('footer_form_id', 'option');
						if($form_id){
							echo do_shortcode( '[ninja_form id="' . $form_id . '"]' ); 
						}
						
					?>
				</div>	
			</div><!-- 
		 --><div class="grid__item one-half portable--one-whole">
				<div class="block-footer__locations">
			 		<h2 class="block-footer__heading">Locations</h2>
			 		<div class="block-footer__divider"></div>
					<div class="grid">
						<div class="grid__item one-whole">

							<div class="grid">
								<div class="grid__item one-whole">
									<div class="block-footer__city">
										Albany Office
									</div>
								</div><!-- 
								 --><div class="grid__item one-half portable--one-whole">
									<div class="block-footer__copy">
										
										<div class="block-footer__address">
											<?= the_field('street_albany', 'option') ?><br/><?= the_field('citystatezip_albany', 'option') ?>
										</div>
										<div class="block-footer__phone">
											<a href="tel:5105265256"><strong>Phone:</strong> <?= the_field('phone_albany', 'option') ?></a>
										</div>
										<div class="block-footer__fax">
											<strong>Fax:</strong> <?= the_field('fax_albany', 'option') ?>
										</div>
										<div class="block-footer__email">
											<strong>email:</strong> <?= the_field('email_albany', 'option') ?>
										</div>						
									</div>
								</div><!-- 
								 --><div class="grid__item one-half portable--one-whole">
									<img class="block-footer__map" src="https://maps.googleapis.com/maps/api/staticmap?center=902+Santa+Fe+Avenue,Albany,CA&zoom=13&size=600x300&maptype=roadmap
				&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:0x37dcd4%7Clabel:G%7C37.8905356,-122.2890289
				&markers=color:red%7Clabel:C%7C40.718217,-73.998284
				&key=AIzaSyBpGdpNvREFGnPgxRa-4ktqImORQAYZgPw" alt="">
								</div>
							</div>

						</div><!-- 
						 --><div class="grid__item one-whole">
						 	<div class="grid">
								<div class="grid__item one-whole">
									<div class="block-footer__divider"></div>
									<div class="block-footer__city">
										San Francisco Office (Fridays)
									</div>
								</div><!-- 
								 --><div class="grid__item one-half portable--one-whole">
									<div class="block-footer__copy">
										
										<div class="block-footer__address">
											<?= the_field('street_sanfran', 'option') ?><br/><?= the_field('citystatezip_sanfran', 'option') ?>
										</div>
										<div class="block-footer__phone">
											<a href="tel:4153341010"><strong>Phone:</strong> <?= the_field('phone_sanfran', 'option') ?></a>
										</div>
										<div class="block-footer__fax">
											<strong>Fax:</strong> <?= the_field('fax_sanfran', 'option') ?>
										</div>
										<div class="block-footer__email is-invisible">
											<strong>email:</strong>
										</div>	
																	
									</div>
								</div><!-- 
								 --><div class="grid__item one-half portable--one-whole">
									<img class="block-footer__map" src="https://maps.googleapis.com/maps/api/staticmap?center=661+Chenery+Street,San+Francisco,CA&zoom=13&size=600x300&maptype=roadmap
		&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:0x37dcd4%7Clabel:G%7C37.7344428,-122.4352915
		&markers=color:red%7Clabel:C%7C40.718217,-73.998284
		&key=AIzaSyBpGdpNvREFGnPgxRa-4ktqImORQAYZgPw" alt="">
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>		
		<div class="block-footer__divider"></div>
		<div class="grid grid--rev">
			<div class="grid__item one-half portable--one-whole">
				<?php wp_nav_menu( 
					array( 
					'theme_location' => 'footer-menu',
					'container_class' => 'block-footer__menu',
					'menu_class' => 'block-footer__menu-items'
					)
				); ?>
			</div><!-- 
			 --><div class="grid__item one-half portable--one-whole">
				<div class="block-footer__copyright">
					<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'cbdo' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
				</div>	
			</div>
			
		</div>
	

	
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>