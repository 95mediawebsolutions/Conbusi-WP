<?php
/**
 * Conbusi WP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package  conbusi wp
 */

 // Customizer
require_once get_template_directory() . '/inc/customizer.php';

// tgm-plugin
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';


function conbusi_wp_scripts(){
    wp_enqueue_style('conbusi-wp-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/css/style.css'), 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), '', 'all');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css', array(), '3.7.0', 'all');
    wp_enqueue_style('gijgo-css', get_template_directory_uri() . '/css/gijgo.css', array(), '', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '', 'all');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/css/nice-select.css', array(), '', 'all');
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.2.1', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), '2.2.1', 'all');
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/css/slicknav.css', array(), '', 'all');
    wp_enqueue_style('theme-default-css', get_template_directory_uri() . '/css/theme-default.css', array(), '1.0.0', 'all');
    wp_enqueue_style('themify-icons-css', get_template_directory_uri() . '/css/themify-icons.css', array(), '1.0.0', 'all');

    // Google Fonts
     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700' );
     
     wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-3.5.0.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'plugin-js', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'popper-min', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'scrollIt-js', get_template_directory_uri() . '/js/scrollIt.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/js/waypoints.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'nice-select.min', get_template_directory_uri() . '/js/nice-select.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'jquery.slicknav.min', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'jquery.scrollUp.min', get_template_directory_uri() . '/js/jquery.scrollUp.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'imagesloaded.pkgd.min', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'gijgo.min', get_template_directory_uri() . '/js/gijgo.min.js', array( 'jquery' ), '', true );

     if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
    
}

add_action('wp_enqueue_scripts', 'conbusi_wp_scripts');


function conbusi_wp_config(){

    // This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'conbusi_wp_main_menu' 	=> esc_html__( 'Conbusi WP Main Menu', 'conbusi-wp' ),
				'conbusi_wp_footer_menu' => esc_html__( 'Conbusi WP Footer Menu', 'conbusi-wp' ),
			)
		);

    // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo');	

        if ( ! isset( $content_width ) ) {
			$content_width = 900;
		}	

}

add_action( 'after_setup_theme', 'conbusi_wp_config', 0 );




/** Slider Custom Post Type**/ 
function services_posttype() {
    $args = array(
        'public'    => true,
        'label'     => ( 'Services'),
        'menu_icon' => 'dashicons-admin-tools',
        "supports" => [ "title", "editor", "thumbnail" ],
    );
    register_post_type( 'service', $args );
}
add_action( 'init', 'services_posttype' );



add_action( 'init', 'service_cates' );

function service_cates() {
	register_taxonomy(
		'service-cates',
		'service',
		array(
			'label' => ( 'service Categories' ),
			'rewrite' => array( 'slug' => 'service-category' ),
			'hierarchical' => true,
		)
	);
}

/**END CUSTOM POST TYPE FOR case study **/


/**Case Study Custom Post Type**/ 
function casestudy_posttype() {
    $args = array(
        'public'    => true,
        'label'     => ( 'Case Study'),
        'menu_icon' => 'dashicons-category',
        "supports" => [ "title", "editor", "thumbnail" ],
    );
    register_post_type( 'casestudy', $args );
}
add_action( 'init', 'casestudy_posttype' );



add_action( 'init', 'casestudy_cates' );

function casestudy_cates() {
	register_taxonomy(
		'casestudy-cates',
		'casestudy',
		array(
			'label' => ( 'Case Study Categories' ),
			'rewrite' => array( 'slug' => 'casestudy-category' ),
			'hierarchical' => true,
		)
	);
}



function filter_casestude_terms($terms)
{
    global $post;
    $args = array(
       'posts_per_page' => 9,
       'post_type'     => 'casestudy',
       'orderby' => 'ASC',
       'tax_query' =>array(
           array(
               'taxonomy' => 'casestudy-cates',
               'field'   => 'slug',
               'terms'   => $terms
           ),),);

           
    $query = new WP_Query($args);
    echo '<div class="col-xl-4 grid-item '.$terms.' ">';
           
    while ($query->have_posts()): $query->the_post();

    $taxonomy = 'casestudy-cates';
    $terms = wp_get_post_terms($post->ID, $taxonomy);

    echo '<div class="single_case">';
           
    echo '<div class="case_thumb">';

    echo '<a href="' .get_the_permalink($post->ID) . '">';
    echo get_the_post_thumbnail($post->ID);
    echo '</a>';

    echo '<div class="case_heading">';
            
    echo '<span>';
    if ($terms && !is_wp_error($terms)) {
        foreach ($terms as $serv_terms) {
            echo $serv_terms->name;
        }
    }
    echo '</span>';

    echo '<h3>';
           
    echo '<a href="' .get_the_permalink($post->ID) . '">';
    echo  get_the_title();
    echo '</a>';
               
    echo '</h3>';

    echo '</div>';

    //    echo '<h3>' . get_the_title() . '</h3>';

    echo '</div>';
    echo '</div>';

    endwhile;
    echo "</div>";
    wp_reset_postdata();
}

/**END CUSTOM POST TYPE FOR case study **/ 


/** Team Custom Post Type**/ 
function team_posttype() {
    $args = array(
        'public'    => true,
        'label'     => ( 'Team'),
        'menu_icon' => 'dashicons-groups',
        "supports" => [ "title", "editor", "thumbnail" ],
    );
    register_post_type( 'team', $args );
}
add_action( 'init', 'team_posttype' );



add_action( 'init', 'team_cates' );

function team_cates() {
	register_taxonomy(
		'team-cates',
		'team',
		array(
			'label' => ( 'Team Categories' ),
			'rewrite' => array( 'slug' => 'ourteam-category' ),
			'hierarchical' => true,
		)
	);
}

/**END CUSTOM POST TYPE FOR case study **/ 


/** Slider Custom Post Type**/ 
function slider_posttype() {
    $args = array(
        'public'    => true,
        'label'     => ( 'Slider'),
        'menu_icon' => 'dashicons-images-alt',
        "supports" => [ "title", "editor", "thumbnail" ],
    );
    register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_posttype' );



add_action( 'init', 'slider_cates' );

function slider_cates() {
	register_taxonomy(
		'slider-cates',
		'slider',
		array(
			'label' => ( 'slider Categories' ),
			'rewrite' => array( 'slug' => 'slider-category' ),
			'hierarchical' => true,
		)
	);
}

/**END CUSTOM POST TYPE FOR case study **/ 

function my_comment_fields($fields) {
    foreach($fields as $field){
        
    }
    return $fields;
}
add_filter('comment_form_default_fields','my_comment_fields');

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
add_action( 'widgets_init', 'conbusi_wp_sidebars' );
function conbusi_wp_sidebars(){
	register_sidebar( array(
		'name'			=> esc_html( 'Conbusi WP Main Sidebar', 'conbusi-wp' ),
		'id'			=> 'conbusi-wp-sidebar-1',
		'description'	=> esc_html( 'Drag and drop your widgets here', 'conbusi-wp' ),
		'before_widget'	=> '<aside id="%1$s" class="single_sidebar_widget post_category_widget %2$s">', 
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h4 class="widget_title">',
		'after_title'	=> '</h4>',
	) );
		
	register_sidebar( array(
		'name'			=> esc_html( 'Footer Sidebar 1', 'conbusi-wp' ),
		'id'			=> 'conbusi-wp-sidebar-footer1',
		'description'	=> esc_html( 'Drag and drop your widgets here', 'conbusi-wp' ),
		'before_widget'	=> '<div id="%1$s" class="footer_widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="footer_title">',
		'after_title'	=> '</h3>',
	) );
	register_sidebar( array(
		'name'			=> esc_html( 'Footer Sidebar 2', 'conbusi-wp' ),
		'id'			=> 'conbusi-wp-sidebar-footer2',
		'description'	=> esc_html( 'Drag and drop your widgets here', 'conbusi-wp' ),
		'before_widget'	=> '<div id="%1$s" class="footer_widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="footer_title">',
		'after_title'	=> '</h3>',
	) );
	register_sidebar( array(
		'name'			=> esc_html( 'Footer Sidebar 3', 'conbusi-wp' ),
		'id'			=> 'conbusi-wp-sidebar-footer3',
		'description'	=> esc_html( 'Drag and drop your widgets here', 'conbusi-wp' ),
		'before_widget'	=> '<div id="%1$s" class="footer_widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="footer_title">',
		'after_title'	=> '</h3>',
    ) );	
    
    register_sidebar( array(
		'name'			=> esc_html( 'Footer Sidebar 4', 'conbusi-wp' ),
		'id'			=> 'conbusi-wp-sidebar-footer4',
		'description'	=> esc_html( 'Drag and drop your widgets here', 'conbusi-wp' ),
		'before_widget'	=> '<div id="%1$s" class="footer_widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="footer_title">',
		'after_title'	=> '</h3>',
	) );
}

