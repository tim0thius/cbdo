<div id="block-casestudies" class="block-casestudies section section--contained" >
	<div class="block-casestudies__inner section__inner">

		<h2 class="block-casestudies__heading">Case Studies</h2>
		
@wpquery(array('post_type'=>'casestudy'))
	<div class="block-casestudies__item grid grid--center">
		<div class="grid__item one-sixth portable--one-whole">
			<span class="block-casestudies__label" ><img class="block-casestudies__icon" src="/wp-content/themes/cbdo/assets/images/icon_clipboard.svg" alt=""><span>Case Study</span></span>
		</div>
		<div class="grid__item one-half portable--one-whole">
			<div class="block-casestudies__content">
				<h3 class="block-casestudies__title" >{{ the_title() }}</h3>
		        <div class="block-casestudies__copy" >{{ the_excerpt() }}</div>
		        <a target="_blank" href="{{ the_field('cs_button_url') }}" class="block-casestudies__button">read full study</a>	
			</div>
	        
		</div>
	</div>
@wpempty
    <span>{{ __('Sorry, no posts matched your criteria.') }}</span>
@wpend
		
	</div>
</div>
