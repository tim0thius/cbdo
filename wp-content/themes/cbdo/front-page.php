<?php get_header(); ?>
<section id="content" role="main">
@wpposts
@include( 'templates/blocks/mastheads/masthead--split' )
@include( 'templates/blocks/highlights/highlight--about' )
@include( 'templates/blocks/highlights/highlight--section1' )
@include( 'templates/blocks/highlights/highlight--section2' )
@include( 'templates/blocks/highlights/highlight--casestudies' )
@include( 'templates/blocks/highlights/highlight--resources' )
@wpempty
    <p>404</p>
@wpend
</section>
<?php get_footer(); ?>