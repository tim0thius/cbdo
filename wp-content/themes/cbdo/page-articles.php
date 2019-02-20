<?php get_header(); ?>
<section id="content" role="main">

	@include( 'templates/blocks/subpage-header2' )
	<div id="post-<?php the_ID(); ?>" class="block-highlight block-highlight--default section is_main_section section--left <?php post_class(); ?>" >
		<div id="" class="block-highlight__inner section__inner">
				<?php // secondary loop
            $the_query = new WP_Query([
              'post_type' => ['post'],
            ]);
        ?>

        <?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>

        <?php
            get_template_part( 'entry' );
        ?>

        <?php $count ++; endwhile; wp_reset_postdata(); endif;?>
		</div>
	</div>

</section>
@include( 'templates/blocks/block-resources' )
<?php get_footer(); ?>