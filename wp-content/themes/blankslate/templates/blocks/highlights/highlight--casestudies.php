<div id="" class="block-highlight section section--contained" >
	<div id="" class="block-highlight__inner section__inner">
		
		@acfrepeater('case_studies')
		<div class="grid grid--center">
			<div class="grid__item one-sixth">
				<span>Case Study</span>
			</div>
			<div class="grid__item one-half">
		        <h3>{{ get_sub_field( 'case_study_title' ) }}</h3>
		        <p>{{ get_sub_field( 'case_study_summary' ) }}</p>
			</div>
		</div>
		@acfend
		
	</div>
</div>
