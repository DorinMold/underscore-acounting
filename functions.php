<?php
/**
 * TestWordpress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TestWordpress
 */

if ( ! function_exists( 'themewordpress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function themewordpress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TestWordpress, use a find and replace
		 * to change 'themewordpress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'themewordpress', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'themewordpress' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'themewordpress_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'themewordpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function themewordpress_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'themewordpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'themewordpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function themewordpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'themewordpress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'themewordpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'themewordpress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function themewordpress_scripts() {
	wp_enqueue_style( 'themewordpress-style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap', get_template_directory_uri() . "/build/bootstrap.min.css" );
	wp_enqueue_style( 'second-css', get_template_directory_uri() . "/build/style.css" );

	wp_enqueue_script('bootstrap_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
	wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
	wp_enqueue_script( 'themewordpress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'themewordpress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'));


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$vars_main = ['base' => get_site_url()];

	wp_localize_script('mainjs', 'main_vars', $vars_main);
}
add_action( 'wp_enqueue_scripts', 'themewordpress_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function customPostType(){
    
    $labels = array(
        'name' => 'Reviews',
        'singular_name' => 'Review',
        'add_new' => 'Add New Review',
    );

    $details = array(
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'description' => 'Please leave your review',
        'public' => true,
        'supports' => array('title','author','post-formats','custom-fields','editor')
    );

    register_post_type("review", $details);
    
    // register_post_type("stars", array(
    //      'labels' => array('name' => 'stars',
    //                        'singular_name' => "Star",
    //                       ),
    //      'show_ui' => true,
    //      'show_in_rest' => true,
    //      'description' => 'Number of stars given',
    //      'public' => true,
    //      'suports' => array('title','editor')
    //     ));
        
}


add_action('init','customPostType');

add_action("rest_api_init","restFieldsAndRoute");

function restFieldsAndRoute(){

register_rest_route("reviewnamespace/v1","notion", array(
    'methods' => WP_REST_SERVER::READABLE,  //sau GET
    'callback' => 'showResults'
    ));
}

function showResults($data){
    $arr = array(
       // 'name' => array(),
       // 'content' => array()
       'reviewPosts' => array()
    );
    $review = new WP_Query(array(
        'post_type' => 'review'
    ));
    
    while($review->have_posts()):
         $review->the_post();
        // array_push($arr['name'],get_the_title());
        // array_push($arr['content'],get_the_content());
        array_push($arr['reviewPosts'], array(get_the_title(),get_the_content(),get_post_meta(get_the_ID(),'stars_input', true)));
    endwhile;
    return $arr;
    wp_reset_postdata();
}

add_action('admin_init','addMetaBox');

function addMetaBox(){
    
    add_meta_box('star-like','Stars for Like','custom_meta_field','review','normal','low');  //first is id, second title, 3rd callback, 4th post type ...how to display in page
} 

function custom_meta_field(){
    
    global $post;
    
    $data = get_post_custom($post->ID);
    
    $val = isset($data['stars_input']) ? esc_attr($data['stars_input'][0]): "no value";
    
    echo '<input type="text" name="stars_input" id="stars_input" value="'. $val .'">  </input>';
}

add_action('save_post','saveStars');

function saveStars(){
     global $post;
     
     if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
         return $post->ID;
     }
}

function as_adapt_search_form( $form ) {
    // $forms contains the rendered HTML output of the standard search form
    // the exact output is changed if your theme has declared HTML5 support
    // with the following minimum settings:
    //
    // add_theme_support( 'html5', array( 'search-form' ) );
    //
    // see http://codex.wordpress.org/Function_Reference/add_theme_support
    // add Foundation classes to the button class
    //
    // we do a string replace and search for 'search-submit', which is the one
    // class that is already defined for the HTML5 search form
    //
    // if HTML5 search-form support has not been defined, this will leave the
    // HTML output unchanged
    $form = str_replace(
        'search-submit',
        'btn btn-success',
        $form
    );
    // return the modified string
    return $form;
}
// run the search form HTML output through the newly defined filter
add_filter( 'get_search_form', 'as_adapt_search_form' );

