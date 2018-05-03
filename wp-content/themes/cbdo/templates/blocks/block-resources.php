<div id="block-resources" class="block-resources section section--contained" >
	<div id="" class="block-resources__inner section__inner">
		<div class="grid grid--center">
			<div class="grid__item one-whole">
				<h2 class="block-resources__heading">Resources</h2>
			</div>
		</div>
		<div class="grid grid--center">
			<div class="grid__item one-third portable--one-whole">
				<h3 class="block-resources__label">Osteopathic Literature</h3>
				<div class="block-resources__divider"></div>
					@wpquery(array('post_type'=>'resource','meta_key' => 'resource_type','meta_value' => 'literature'))
						<div class="block-resources__item">
					        <h3 class="block-resources__title"><img class="block-resources__book-icon" src="/wp-content/themes/cbdo/assets/images/icon_book.svg" alt="">{{ the_title() }}</h3>
					        <span class="block-resources__author">{{ the_field('resource_author') }}</span>
						</div><!-- 
					 -->@wpempty<!-- 
						 --><div class="block-resources__item">
						    <span>{{ __('Sorry, no resources available.') }}</span>
						</div><!-- 
					 -->@wpend
			</div><!-- 
		 --><div class="grid__item one-third portable--one-whole">
		 		<h3 class="block-resources__label">Links to osteopathic resources</h3>
		 		<div class="block-resources__divider"></div>
				 @wpquery(array('post_type'=>'resource','meta_key' => 'resource_type','meta_value' => 'link'))<!-- 
					 --><div class="block-resources__item">
				        <h3 class="block-resources__title">{{ the_title() }}</h3>
				        <a target="_blank" class="block-resources__link" href="{{ the_field('resource_link_url') }}" ><img class="block-resources__link-icon" src="/wp-content/themes/cbdo/assets/images/icon_link.svg" alt=""><span>{{ the_field('resource_link_url') }}</span></a>
					</div><!-- 
				 -->@wpempty<!-- 
					 --><div class="block-resources__item">
					    <span>{{ __('Sorry, no resources available.') }}</span>
					</div>
				@wpend				
			</div>



		</div>	
	</div>
</div>
