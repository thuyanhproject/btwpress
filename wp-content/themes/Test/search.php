<?php get_header();?>
<?php echo get_the_title().'<br/>';?>
<header class="page-header">
    <?php while( have_posts() ): the_post(); ?>
    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'Test' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
    <?php endwhile; ?>
</header>
<?php get_footer(); ?>