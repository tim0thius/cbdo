<div id="services_2" class="block-highlight block-highlight--default section section--right" >
	<div id="" class="block-highlight__inner section__inner">
		<div class="grid grid--rev grid--center">
			<div class="grid__item one-half palm--one-whole">
				<h2 class="block-highlight__headline" >{{ the_field('section_2_headline') }}</h2>
				<div class="block-highlight__content">  {{ the_field('section_2_content') }}</div>
				@if( get_field('section_2_conditions') )
					<div class="block-highlight__divider"></div>
					<div class="block-highlight__subtext"><strong>Common conditions treated:</strong>  {{ the_field('section_2_conditions') }}</div>
				@endif
			</div><!-- 
		--><div class="grid__item three-eighths palm--one-whole lap--one-third">
				<?= wp_get_attachment_image(get_field('section_2_image'),'full',false,['class' => 'test-image']) ?>
			</div>
		</div>
	</div>
</div>