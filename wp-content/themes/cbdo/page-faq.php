<?php get_header(); ?>
<?php
?>
<section id="content" role="main">
	@include( 'templates/blocks/subpage-header2' )
	<div id="post-<?php the_ID(); ?>" class="block-highlight block-highlight--default section is_main_section section--left <?php post_class(); ?>" >
		<div id="" class="block-highlight__inner section__inner">
			<div class="grid grid--middle grid--center">
				<div class="grid__item two-thirds portable--one-whole">
					<div class="block-highlight__content">
						{{ the_content() }}
						<div class="component-faq" >
						    @acfrepeater('faq_list')
						    <div class="faq_item">
						    	<span class="component-faq__question" >{{ get_sub_field( 'faq_question' ) }}</span>
						        <span class="component-faq__answer" >{{ get_sub_field( 'faq_answer' ) }}</span>
						    </div>
						        
						    @acfend
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="is-off-white">
		@include( 'templates/blocks/block-casestudies' )
	</div>
	
	@include( 'templates/blocks/block-resources' )
</section>
<?php get_footer(); ?>