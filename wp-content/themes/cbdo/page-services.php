<?php get_header(); ?>
<section id="content" role="main">	
	@wpposts
	@include( 'templates/blocks/subpage-header2' )
	@include( 'templates/blocks/services/services--section1' )
	@include( 'templates/blocks/services/services--section2' )
	@include( 'templates/blocks/services/services--section3' )
	@include( 'templates/blocks/services/services--section4' )

	@wpempty
	    <p>404</p>
	@wpend
	@include( 'templates/blocks/block-resources' )			
</section>
<?php get_footer(); ?>