<?php get_header(); ?>
<section id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	@include( 'templates/blocks/subpage-header2' )
	<div id="post-<?php the_ID(); ?>" class="block-highlight block-highlight--default section is_main_section section--left <?php post_class(); ?>" >
		<div id="" class="block-highlight__inner section__inner">
			<div class="grid grid--center">
				<div class="grid__item one-half palm--one-whole">
					<div class="block-highlight__content">  {{ the_content() }}</div>
				</div><!-- 
			--><div class="grid__item three-eighths palm--one-whole lap--one-third">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>

@include( 'templates/blocks/block-resources' )
</section>
<?php get_footer(); ?>