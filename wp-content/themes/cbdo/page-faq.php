<?php get_header(); ?>
<?php
?>
<section id="content" role="main">
	<div id="post-<?php the_ID(); ?>" class="block-highlight block-highlight--default section section--left <?php post_class(); ?>" >
		<div id="" class="block-highlight__inner section__inner">
			<div class="grid grid--middle">
				<div class="grid__item one-half">
					<h2 class="block-highlight__headline" >{{ the_title() }}</h2>
					<div class="block-highlight__content">
						{{ the_content() }}
						<ul>
						    @acfrepeater('faq_list')
						        <li>{{ get_sub_field( 'faq_question' ) }}</li>
						        <li>{{ get_sub_field( 'faq_answer' ) }}</li>
						    @acfend
						</ul>
					</div>
				</div><!-- 
			--><div class="grid__item one-half">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				</div>
			</div>
		</div>
	</div>

</section>
<?php get_footer(); ?>