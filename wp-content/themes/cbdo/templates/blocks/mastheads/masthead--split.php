<div id="block-masthead" class="section section--contained" >
	<div id="block-masthead__inner" class="section__inner">
		<div class="grid grid--full">
			<div class="grid__item one-half">
				<div class="block-masthead__content">
					<h2 class="block-masthead__headline"><?= the_title() ?></h2>
					<hr class="block-masthead__divider">
					<a href="" class="block-masthead__calltoaction action__show-contact">set up an appointment</a>
					<span class="block-masthead__subtext">or call 1111111</span>
				</div>				
			</div><!-- 
			 --><div class="grid__item one-half">
				<?php the_post_thumbnail('full', ['class' => 'block-masthead__main-image', 'title' => 'Feature image']); ?>
			</div>
		</div>
	</div>
</div>