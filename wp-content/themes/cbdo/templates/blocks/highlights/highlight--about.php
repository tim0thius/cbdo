@wpquery(array('pagename'=>'about'))
<div id="block-about" class="block-about section section--contained" >
	<div id="block-about__inner" class="block-highlight__inner section__inner">
		<div class="grid grid--center">
			<div class="grid__item portable-one-whole desk--three-quarters largedesk--one-half portable--one-whole">
				<div class="grid grid--center grid--middle">
						<div class="grid__item portable--one-whole one-quarter">
							{{the_post_thumbnail('full', ['class' => 'block-about__main-image', 'title' => 'Feature image']);}}
						</div><!-- 
					--><div class="grid__item portable--one-whole three-quarters">
						<div id="block-about__content" class="block-highlight__content">
							{{ get_field('home_page_summary' )}}
						</div>					
				</div>
				
			</div>



				
			</div>
		</div>
	</div>
</div>
    
    
    
@wpempty
    <span>{{ __('Sorry, no posts matched your criteria.') }}</span>
@wpend
