<?php
/**
 * Breadwinner Cycles functions and definitions
 *
 * @package Breadwinner Cycles
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'breadwinner_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function breadwinner_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Breadwinner Cycles, use a find and replace
	 * to change 'Breadwinner Cycles' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'breadwinnercycles', get_template_directory() . '/languages' );

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
	 * Add Post Formats
	 *
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image' ) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'breadwinnercycles' ),
		'mobile' => __( 'Mobile Menu', 'breadwinnercycles' ),
		'utility' => __( 'Utility Menu', 'breadwinnercycles' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
}
endif; // breadwinner_setup
add_action( 'after_setup_theme', 'breadwinner_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function breadwinner_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'breadwinnercycles' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'breadwinner_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function breadwinner_scripts() {
	wp_enqueue_style( 'breadwinner-style', get_stylesheet_directory_uri() . '/css/style.css', false, filemtime(get_stylesheet_directory() . '/css/style.css') );

	wp_enqueue_script( 'breadwinner-site-scripts', get_template_directory_uri() . '/js/site-scripts.js', array(), '20170115', true );

	wp_enqueue_script( 'breadwinner-jQuery', '//code.jquery.com/ui/1.11.4/jquery-ui.js', false, true );

	wp_enqueue_script( 'breadwinner-pictureFill', get_template_directory_uri() . '/js/pictureFill.js', array(), '20130115', true );

	wp_enqueue_script( 'breadwinner-matchHeight', get_template_directory_uri() . '/js/matchHeight.min.js', array(), '20130115', true );

	wp_enqueue_script( 'breadwinner-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '20130115', true );

	wp_enqueue_script( 'breadwinner-slickLightbox', get_template_directory_uri() . '/js/slick-lightbox.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'breadwinner_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Declare Woocommerce support
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_image_size( 'geo-mobile', '480', '360' );
add_image_size( 'geo-tablet', '768', '576' );
add_image_size( 'geo-desktop', '1280', '960' );

add_image_size( 'portal-mobile', '480', '360', 'true' );
add_image_size( 'portal-tablet', '768', '576', 'true' );
add_image_size( 'portal-desktop', '1280', '960', 'true' );
add_image_size( 'portal-retina', '2400', '1800', 'true' );

add_image_size( 'full-width-slider-mobile', '480', '320', 'true' );
add_image_size( 'full-width-slider-tablet', '768', '512', 'true' );
add_image_size( 'full-width-slider-desktop', '1280', '427', 'true' );
add_image_size( 'full-width-slider-retina', '2400', '1600', 'true' );

add_image_size( 'banner-mobile', '480', '240', 'true' );
add_image_size( 'banner-desktop', '1200', '400', 'true' );
add_image_size( 'banner-retina', '2400', '800', 'true' );

// Remove Woo styling
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Disable reviews on products
add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
 unset($tabs['reviews']);
 return $tabs;
}

// BWC logo on login
function custom_login_logo() {
	echo '<style type="text/css">
	.login h1 a {
		background-image: url('.get_bloginfo('template_directory').'/images/breadwinner_login_logo.png) !important;
		background-size: 150px !important;
		height: 110px;
		width: 150px !important;
	}
	</style>';
}
add_action('login_head', 'custom_login_logo');

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Work Hard Ride Home';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/**
 * TypeKit Fonts
 */
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/vlh6wei.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
  	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action('woocommerce_add_to_cart', 'replace_price');

function replace_price($price) {

}

add_action( 'woocommerce_before_calculate_totals', 'add_custom_price' );

function add_custom_price( $cart_object ) {

	$numItems = count($cart_object->cart_contents);
	// echo "There are $numItems items in the cart <br />";

	foreach ( $cart_object->cart_contents as $key => $value ) {
		// echo "<pre><h1>$key</h1>";
		// var_dump(array_keys($value));
		// var_dump(array_keys(get_object_vars($value['data'])));
		// var_dump($value['composite_children']);
		// var_dump($value['title']);
		// var_dump($value['line_subtotal']);
		// var_dump($value['bundled_by']);
		// var_dump($value['bundled_items']);
		// echo "</pre>";
		// die();

		$composite_children_keys = $value['composite_children'];

			// if the item does not have 'composite_children', skip processing it
			if(!is_array($composite_children_keys)) continue;

			foreach($composite_children_keys as $childKey) {
				$child_line_item = $cart_object->cart_contents[$childKey];
				$child_line_item['data']->price = 0.0;
				// Bundles within composites show up under 'bundled_items'
				$grandchild_keys = $child_line_item['bundled_items'];
				if(!is_array($grandchild_keys)) continue;
				foreach($grandchild_keys as $grand_child_key) {
					$grand_child_line_item = $cart_object->cart_contents[$grand_child_key];
					$grand_child_line_item['data']->price = 0.0;
				}
			}

			$value['data']->price = 500.00;

	}

}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );

function woo_custom_cart_button_text() {
    global $product;
    if ( has_term( 'bikes', 'product_cat', $product->ID ) ) {
		return __( 'Place Deposit', 'woocommerce' );
	}
	else {
		return __( 'Add to Cart', 'woocommerce' );
	}
    // endif;
}
