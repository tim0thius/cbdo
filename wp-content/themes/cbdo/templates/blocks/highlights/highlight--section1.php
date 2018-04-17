<div id="highlight_1" class="block-highlight block-highlight--default section section--left" >
	<div id="" class="block-highlight__inner section__inner">
		<div class="grid grid--middle grid--right">
			<div class="grid__item three-eighths portable--one-whole">
				<h2 class="block-highlight__headline" >{{ the_field('section_1_headline') }}</h2>
				<div class="block-highlight__content">  {{ the_field('section_1_content') }}</div>
				@if( get_field('testimonial_content') )
					<div class="block-highlight__divider"></div>
					<div class="block-highlight__subtext">
						<span class="block-highlight__testimonial_content">"{{ the_field('testimonial_content') }}"</span>
						<div class="grid grid--full">
							<div class="grid__item one-eighth">
								<img class="block-highlight__testimonial_image" src="{{ the_field('testimonial_image') }}" alt="">
							</div><!-- 
							 --><div class="grid__item seven-eighths">
							 	<div class="block-highlight__testimonial_meta">
									<span class="block-highlight__testimonial_name">{{ the_field('testimonial_name') }}</span>
									<span class="block-highlight__testimonial_subtext">{{ the_field('testimonial_subtext') }}</span>
								</div>
							</div>
						</div>									
					</div>
				@endif
			</div><!-- 
		--><div class="grid__item one-half portable--one-whole">
				<img class="block-highlight__main-image" src="{{ the_field('section_1_image') }}" alt="">
			</div>
		</div>
	</div>
</div>
