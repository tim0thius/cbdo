<div id="highlight_2" class="block-highlight block-highlight--default section section--right" >
	<div id="" class="block-highlight__inner section__inner">
		<div class="grid grid--middle grid--rev grid--left">
			<div class="grid__item three-eighths portable--one-whole">
				<h2 class="block-highlight__headline" >{{ the_field('section_2_headline') }}</h2>
				<div class="block-highlight__content">{{ the_field('section_2_content') }}</div>
				@if( get_field('new_patient_download_link') )
					<div class="block-highlight__divider"></div>
					<div class="block-highlight__subtext">
						<span class="block-highlight__patient-download-heading"><strong>{{ the_field('new_patient_download_heading') }}</strong>{{ the_field('new_patient_download_text') }}</span>	
						<a target="_blank" href="{{ the_field('new_patient_download_link') }}" class="block-highlight__patient-download-link"><img class="block-masthead__pdf-icon" src="/wp-content/themes/cbdo/assets/images/icon_pdf.svg" alt=""><span class="block-masthead__patient-download-link-text">{{ the_field('new_patient_download_link_text') }}</span></a>		
					</div>
					
				@endif
			</div><!-- 
		--><div class="grid__item one-half portable--one-whole">
				<img class="block-highlight__main-image" src="{{ the_field('section_2_image') }}" alt="">
			</div>
		</div>
	</div>
</div>