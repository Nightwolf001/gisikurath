<?php
/**
 * gisikurath functions and definitions
 *
 * @package gisikurath
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'gisikurath_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gisikurath_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gisikurath, use a find and replace
	 * to change 'gisikurath' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'gisikurath', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'gisikurath' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gisikurath_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // gisikurath_setup
add_action( 'after_setup_theme', 'gisikurath_setup' );
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function gisikurath_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'gisikurath' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'gisikurath_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'gisikurath_scripts' );
function gisikurath_scripts() {
	wp_enqueue_style( 'gisikurath-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gisikurath-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'gisikurath-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gisikurath_scripts' );


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * excerpt_length
 */
function custom_excerpt_length( $length ) {
	return 20;
	}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
/**
 * excerpt.
 */
//function new_excerpt_more( $more ) {
//	return '[.....]';
//}
//add_filter('excerpt_more', 'new_excerpt_more');
/**
 * Read More.
 */
function new_excerpt_more( $more ) {
	return '<span class="read-more-btn"><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'read more', 'your-text-domain' ) . '</a></span>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
/*
* Featured Images
*/
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 600, 600);

/*
* mason posts
*/
function mason_script() {
    wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'mason_script' );