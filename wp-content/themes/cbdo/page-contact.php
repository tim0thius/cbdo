<?php get_header(); ?>
<section id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	@include( 'templates/blocks/subpage-header' )
	<div id="post-<?php the_ID(); ?>" class="block-highlight block-highlight--default section section--left <?php post_class(); ?>" >
		<div id="" class="block-highlight__inner section__inner">
			<div class="grid grid--center">
				<div class="grid__item one-half">
					<div class="block-highlight__content">  {{ the_content() }}</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>