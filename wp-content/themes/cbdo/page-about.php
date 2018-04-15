<?php get_header(); ?>
<section id="content" role="main">
@wpposts
@include( 'templates/blocks/subpage-header' )
@include( 'templates/blocks/about/about--section1' )
@include( 'templates/blocks/about/about--section2' )

@wpempty
    <p>404</p>
@wpend
</section>
<?php get_footer(); ?>