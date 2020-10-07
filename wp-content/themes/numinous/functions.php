<?php
/**
 * Numinous functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Numinous
 */

$numinous_theme_data = wp_get_theme();
if( ! defined( 'NUMINOUS_THEME_VERSION' ) ) define( 'NUMINOUS_THEME_VERSION', $numinous_theme_data->get( 'Version' ) );
if( ! defined( 'NUMINOUS_THEME_NAME' ) ) define( 'NUMINOUS_THEME_NAME', $numinous_theme_data->get( 'Name' ) );
if( ! defined( 'NUMINOUS_THEME_TEXTDOMAIN' ) ) define( 'NUMINOUS_THEME_TEXTDOMAIN', $numinous_theme_data->get( 'TextDomain' ) );

/**
 * Implement the Custom functions.
 */
require get_template_directory() . '/inc/custom-functions.php';

/**
 * Custom template functions for this theme.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/widgets/widgets.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Metabox for Sidebar Layoute
*/
require get_template_directory() . '/inc/metabox.php';

/**
 * Getting Started
*/
require get_template_directory() . '/inc/getting-started/getting-started.php';

/**
 * Woocommerce Functions
*/
if( numinous_is_woocommerce_activated() ) 
require get_template_directory() . '/inc/woocommerce-functions.php';

/**
* Recommended Plugins
*/
require_once get_template_directory() . '/inc/tgmpa/recommended-plugins.php';
function htz_custom_scripts() {
	wp_enqueue_style( 'home_custom.css', get_template_directory_uri() . '/style.css',array(), '0.0.0.6', false);
	wp_enqueue_style( 'style_custom.css', get_template_directory_uri() . '/css/style_custom.css',array(), '0.0.0.8', false);
	if (!is_front_page() ){
		wp_enqueue_script( 'htz_single', get_template_directory_uri() . '/js/custom-single.js', array(), '0.0.0.1', true );
	}
	
}
add_action( 'wp_enqueue_scripts', 'htz_custom_scripts' );
	
add_action( 'numinous_after_post_content', 'bannerbycategory', 10, 3 );
function bannerbycategory()
{
	dynamic_sidebar('banner-category'); 
}
function htz_toiyeuvietnam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'banner category', 'htz' ),
		'id'            => 'banner-category',
		'description'   => esc_html__( 'Add widgets here.', 'htz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'htz_toiyeuvietnam_widgets_init' );