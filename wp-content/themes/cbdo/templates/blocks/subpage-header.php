<div id="component-subpage-header" class="component-subpage-header section section--contained" >
	<div id="component-subpage-header__inner" class="component-subpage-header__inner section__inner">
		<div class="grid grid--full">
			<div class="grid__item one-half">
				<div class="component-subpage-header__content">
					@if(get_field('custom_title_text'))
					<h2 class="component-subpage-header__headline">{{ the_field('custom_title_text') }}</h2>
					@else
					<h2 class="component-subpage-header__headline">{{ the_title() }}</h2>
					@endif
				</div>				
			</div><!-- 
			 --><div class="grid__item one-half">
				<?= wp_get_attachment_image(get_field('title_image', 'option'),'full',false,['class' => 'component-subpage-header__title-image']) ?>
			</div>
		</div>
	</div>
</div>