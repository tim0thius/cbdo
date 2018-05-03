<div id="block-masthead" class="section section--contained" >
	<div id="block-masthead__inner" class="section__inner">
		<div class="grid grid--full">
			<div class="grid__item one-half palm--one-whole">
				<div class="block-masthead__content" style="background-image: url({{ the_field('mobile_background_image', 'option') }})">
					<h2 class="block-masthead__headline"><?= the_title() ?></h2>
					<hr class="block-masthead__divider">
					<a href="/contact" class="block-masthead__calltoaction action__show-contact">set up an appointment</a>
					<span class="block-masthead__subtext">or Call 510-526-5256</span>
					<img class="block-masthead__do-symbol" src="/wp-content/themes/cbdo/assets/images/DO_Symbol_WHITE.svg" alt="">
				</div>				
			</div><!-- 
			 --><div class="grid__item one-half palm--one-whole" style="background-image: url({{ the_field('desktop_background_image', 'option') }})">
			</div>
		</div>
	</div>
</div>