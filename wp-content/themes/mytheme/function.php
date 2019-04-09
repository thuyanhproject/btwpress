<?php
add_action('wp_enqueue_scripts', 'mytheme_script');
function mytheme_script()
{

    // Add Genericons, used in the main stylesheet.
//    wp_enqueue_style( 'bootstrap.css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '' );
    wp_enqueue_style('font.css', 'https://fonts.googleapis.com/css?family=Josefin+Sans', array(), '');
    wp_enqueue_style('icon.css', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '');
    wp_enqueue_style('slick.css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '');
    wp_enqueue_style('style.css', get_template_directory_uri() . '/css/style.css', array(), '');
    wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '');

    //script
    wp_enqueue_script('bootstrap.js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('bootstrap.bundle.js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '', true);
    wp_enqueue_script('jquery.slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '', true);
    wp_enqueue_script('slick.js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '', true);
    wp_enqueue_script('myjs.js', get_template_directory_uri() . '/js/myjs.js', array(), '', true);
}
register_nav_menus(
    array(
        'primary' => __( 'Primary Menu', 'mytheme' ),
        'social'  => __( 'Social Links Menu', 'mytheme' ),
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

function mytheme_widgets_init() {
register_sidebar(
array(
'name'          => __( 'footer 1', 'mytheme' ),
'id'            => 'footer 1',
'description'   => __( 'Add widgets here to appear in your sidebar.', 'mytheme' ),
'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
)
);
register_sidebar(
array(
'name'          => __( 'footer 2', 'mytheme' ),
'id'            => 'footer 2',
'description'   => __( 'Add widgets here to appear in your sidebar.', 'mytheme' ),
'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
)
);
register_sidebar(
array(
'name'          => __( 'footer 3', 'mytheme' ),
'id'            => 'footer 3',
'description'   => __( 'Add widgets here to appear in your sidebar.', 'mytheme' ),
'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
)
);
register_sidebar(
array(
'name'          => __( 'footer 4', 'mytheme' ),
'id'            => 'footer 4',
'description'   => __( 'Add widgets here to appear in your sidebar.', 'mytheme' ),
'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
)
);
register_sidebar(
        array(
            'name'          => __( 'footer 5', 'mytheme' ),
            'id'            => 'footer 5',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'mytheme' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
?>