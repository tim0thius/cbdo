<div id="services_4" class="block-highlight block-highlight--default section section--right" >
	<div id="" class="block-highlight__inner section__inner">
		<div class="grid grid--middle grid--rev">
			<div class="grid__item one-half">
				<h2 class="block-highlight__headline" >{{ the_field('section_4_headline') }}</h2>
				<div class="block-highlight__content">  {{ the_field('section_4_content') }}</div>
				<div class="block-highlight__subtext">  {{ the_field('section_4_conditions') }}</div>
			</div><!-- 
		--><div class="grid__item one-half">
				<?= wp_get_attachment_image(get_field('section_4_image'),'full',false,['class' => 'test-image']) ?>
			</div>
		</div>
	</div>
</div>