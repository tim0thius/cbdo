<?php get_header(); ?>
<?php
?>
<section id="content" role="main">
<ul>
    @acfrepeater('faq_list')
        <li>{{ get_sub_field( 'faq_question' ) }}</li>
        <li>{{ get_sub_field( 'faq_answer' ) }}</li>
    @acfend
</ul>
</section>
<?php get_footer(); ?>