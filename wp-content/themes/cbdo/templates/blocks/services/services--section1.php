<div id="services_1" class="block-highlight block-highlight--default section section--left is_main_section" >
	<div id="" class="block-highlight__inner section__inner">
		<div class="grid grid--center">
			<div class="grid__item one-half palm--one-whole">
				@if(get_field('section_1_headline'))
				<h2 class="block-highlight__headline" >{{ the_field('section_1_headline') }}</h2>
				@endif
				<div class="block-highlight__content">  {{ the_field('section_1_content') }}</div>
			</div><!-- 
		--><div class="grid__item three-eighths palm--one-whole lap--one-third">
			<?= wp_get_attachment_image(get_field('section_1_image'),'full',false,['class' => 'test-image']) ?>
			</div>
		</div>
	</div>
</div>
