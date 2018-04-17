<?php get_header(); ?>
<section id="content" role="main">
@wpposts
@include( 'templates/blocks/subpage-header' )
@include( 'templates/blocks/about/about--section1' )
@include( 'templates/blocks/about/about--section2' )
@include( 'templates/blocks/about/about--section3' )

@wpempty
    <p>404</p>
@wpend

@include( 'templates/blocks/block-casestudies' )
@include( 'templates/blocks/block-resources' )
</section>
<?php get_footer(); ?>