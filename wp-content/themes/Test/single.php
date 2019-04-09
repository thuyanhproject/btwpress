<?php
get_header();
?><?php the_post();?>
<div class="text-center">
    <h2><?php the_title();?></h2>
    <p><?php the_content();?></p>
</div>
<?php get_template_part( 'template-parts/content', 'single' );?>
<?php
    get_footer();
?>
