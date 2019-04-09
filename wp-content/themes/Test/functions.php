<?php
add_action( 'wp_enqueue_scripts', 'mythem_script' );

function mythem_script() {
    wp_enqueue_style( 'slick.css', get_template_directory_uri() . '/asset/css/slick.css', array(), '3.4.1' );
    wp_enqueue_style( 'slick-theme.css', get_template_directory_uri() . '/asset/css/slick-theme.css', array(), '3.4.1' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/asset/fontawesome/css/all.css', array(), '3.4.1' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/asset/css/bootstrap.min.css', array(), '3.4.1' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/asset/css/style.css', array(), '3.4.1' );
    wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), '3.4.1' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/asset/css/animate.css', array(), '3.4.1' );


    wp_enqueue_script( 'jquery-3.3.1.slim.min.js', get_template_directory_uri() . '/asset/js/jquery-3.3.1.slim.min.js', array(), '3.7.3',true );
    wp_enqueue_script( 'jquery-3.3.1.min.js', get_template_directory_uri() . '/asset/js/jquery-3.3.1.min.js', array(), '3.7.3',true );
    wp_enqueue_script( 'jquery-3.3.1.popper.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '3.7.3', true);
    //wp_enqueue_script( 'jquery-3.3.1.js', get_template_directory_uri() . '/asset/js/jquery-3.3.1.min.js', array(), '3.7.3' ,true);
    wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/asset/js/bootstrap.min.js', array(), '3.7.3',true );
    wp_enqueue_script( 'slick.js', get_template_directory_uri() . '/asset/js/slick.min.js', array(), '3.7.3',true );
    //wp_enqueue_script( 'vue.js', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js', array(), '3.7.3' );

    // wp_enqueue_script( 'header.js', get_template_directory_uri() . '/asset/js/header.js', array(), '3.7.3' );
    wp_enqueue_script( 'products.js', get_template_directory_uri() . '/asset/js/products.js', array(), '3.7.3',true );
    wp_enqueue_script( 'productsdetails.js', get_template_directory_uri() . '/asset/js/productsdetails.js', array(), '3.7.3',true );


}
register_nav_menus(
    array(
        'primary' => __( 'Primary Menu', 'Test' ),
        'social'  => __( 'Social Links Menu', 'Test' ),
    )
);

/**add class li menu */
function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

/**add class a menu */
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menuclass');

function twentysixteen_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'footer 1', 'twentysixteen' ),
            'id'            => 'footer 1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'footer 2', 'twentysixteen' ),
            'id'            => 'footer 2',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'footer 3', 'twentysixteen' ),
            'id'            => 'footer 3',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'footer 4', 'twentysixteen' ),
            'id'            => 'footer 4',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );
?>