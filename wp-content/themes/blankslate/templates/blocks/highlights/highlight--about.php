@wpquery(array('pagename'=>'about'))
<div id="" class="block-highlight section section--contained" >
	<div id="" class="block-highlight__inner section__inner">
		<div class="grid grid--full">
			<div class="grid__item one-third">
				{{the_post_thumbnail('full', ['class' => 'block-masthead__main-image', 'title' => 'Feature image']);}}
			</div><!-- 
		--><div class="grid__item two-thirds">
				{{the_content()}}
			</div>
		</div>
	</div>
</div>
    
    
    
@wpempty
    <span>{{ __('Sorry, no posts matched your criteria.') }}</span>
@wpend
