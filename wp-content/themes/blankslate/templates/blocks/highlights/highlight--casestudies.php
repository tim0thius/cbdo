<div id="highlights--casestudies" class="block-highlight section section--contained" >
	<div id="" class="block-highlight__inner section__inner">
		
@wpquery(array('post_type'=>'casestudy'))
	<div class="grid grid--center">
		<div class="grid__item one-sixth">
			<span>Case Study</span>
		</div>
		<div class="grid__item one-half">
	        <h3>{{ the_title() }}</h3>
	        <p>{{ the_excerpt() }}</p>
		</div>
	</div>
@wpempty
    <span>{{ __('Sorry, no posts matched your criteria.') }}</span>
@wpend
		
	</div>
</div>
