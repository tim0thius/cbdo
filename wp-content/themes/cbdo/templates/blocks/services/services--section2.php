<div id="services_2" class="block-highlight block-highlight--default section section--right" >
	<div id="" class="block-highlight__inner section__inner">
		<div class="grid grid--middle grid--rev">
			<div class="grid__item one-half">
				<h2 class="block-highlight__headline" >{{ the_field('section_2_headline') }}</h2>
				<div class="block-highlight__content">  {{ the_field('section_2_content') }}</div>
			</div><!-- 
		--><div class="grid__item one-half">
				<?= wp_get_attachment_image(get_field('section_2_image'),'full',false,['class' => 'test-image']) ?>
			</div>
		</div>
	</div>
</div>