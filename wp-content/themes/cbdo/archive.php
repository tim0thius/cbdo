<?php get_header(); ?>
<section id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	@include( 'templates/blocks/subpage-header2' )
	<div id="post-<?php the_ID(); ?>" class="block-highlight block-highlight--default section is_main_section section--left <?php post_class(); ?>" >
		<div id="" class="block-highlight__inner section__inner">
			<section id="content" role="main">
				<header class="header">
					<h1 class="entry-title"><?php 
					if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
					elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
					elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
					else { _e( 'Archives', 'blankslate' ); }
					?></h1>
				</header>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'entry' ); ?>
					<?php endwhile; endif; ?>
					<?php get_template_part( 'nav', 'below' ); ?>
			</section>
		</div>
	</div>
<?php endwhile; endif; ?>

@include( 'templates/blocks/block-resources' )
</section>
<?php get_footer(); ?>