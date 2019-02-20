<?php get_header(); ?>
<section id="content" role="main">

@include( 'templates/blocks/single-header' )
<div id="post-<?php the_ID(); ?>" class="block-highlight block-highlight--default section is-single is_main_section section--left <?php post_class(); ?>" >
		<div id="" class="block-highlight__inner section__inner" >
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			<?php endwhile; endif; ?>
	</div>
</div>
</section>
@include( 'templates/blocks/block-resources' )
<?php get_footer(); ?>