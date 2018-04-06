<div id="highlights--resources" class="block-highlight block-highlight--default section section--contained" >
	<div id="" class="block-highlight__inner section__inner">
		<div class="grid grid--center">
			<div class="grid__item one-whole">
				<h2>Resources</h2>
			</div>
		</div>
		<div class="grid grid--center">
			<div class="grid__item one-half">
				<h3>Osteopathic Literature</h3>
					@wpquery(array('post_type'=>'resource','meta_key' => 'resource_type','meta_value' => 'literature'))
						<div class="block-highlight__item">
					        <h3>{{ the_title() }}</h3>
					        <p>{{ the_excerpt() }}</p>
						</div><!-- 
					 -->@wpempty<!-- 
						 --><div class="block-highlight__itemf">
						    <span>{{ __('Sorry, no resources available.') }}</span>
						</div><!-- 
					 -->@wpend
			</div><!-- 
		 --><div class="grid__item one-half">
		 		<h3>Links to osteopathic resources</h3>
				 @wpquery(array('post_type'=>'resource','meta_key' => 'resource_type','meta_value' => 'link'))<!-- 
					 --><div class="block-highlight__item">
				        <h3>{{ the_title() }}</h3>
				        <p>{{ the_excerpt() }}</p>
					</div><!-- 
				 -->@wpempty<!-- 
					 --><div class="block-highlight__item">
					    <span>{{ __('Sorry, no resources available.') }}</span>
					</div>
				@wpend				
			</div>



		</div>	
	</div>
</div>
