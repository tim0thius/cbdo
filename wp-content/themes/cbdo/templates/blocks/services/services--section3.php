<div id="services_3" class="block-highlight block-highlight--default section section--left" >
	<div id="" class="block-highlight__inner section__inner">
		<div class="grid grid--center">
			<div class="grid__item one-half portable--one-whole">
				<h2 class="block-highlight__headline" >{{ the_field('section_3_headline') }}</h2>
				<div class="block-highlight__content">  {{ the_field('section_3_content') }}</div>
				<a href="{{ the_field('section_3_related_article_url') }}" class="block-highlight__related-article">{{ the_field('section_3_related_article_title') }}</a>
			</div><!-- 
		--><div class="grid__item three-eighths portable--one-whole">
				<?= wp_get_attachment_image(get_field('section_3_image'),'full',false,['class' => 'test-image']) ?>
			</div>
		</div>
	</div>
</div>
