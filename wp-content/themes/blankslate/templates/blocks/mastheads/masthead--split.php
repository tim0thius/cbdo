<div id="block-masthead" class="section section--contained" >
	<div id="block-masthead__inner" class="section__inner">
		<div class="grid grid--full">
			<div class="grid__item one-half">
				<h2><?= the_title() ?></h2>
			</div><!-- 
			 --><div class="grid__item one-half">
				<?php the_post_thumbnail('full', ['class' => 'block-masthead__main-image', 'title' => 'Feature image']); ?>
			</div>
		</div>
	</div>
</div>