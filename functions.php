<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fancy_lab
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function fancy_lab_scripts(){
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.0', true);
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() .  '/inc/bootstrap.min.css', array(), '5.0', 'all' );
	wp_enqueue_style('fancy_lab_styles', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css' ), 'all' );
}

add_action('wp_enqueue_scripts', 'fancy_lab_scripts');


function fancy_lab_config(){

	register_nav_menus( array(

		'main-menu' => esc_html__( 'Header Menu', 'fancy_lab' ),

		'footer-menu' => esc_html__( 'Footer', 'fancy_lab' ),

	) );

	add_theme_support('woocommerce', array(
		'thumbnail_image_width' => 255,
		'single_image_width' => 255,
		'product_grid' => array(
			'default_rows' => 10,
			'min_rows' => 5,
			'max_rows' => 10,
			'default_columns' => 1,
			'min_columns' => 1,
			'max_columns' => 4
		)
	));
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');

	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}

	add_theme_support( 'custom-logo', array(
		'height'      => 85,
		'width'       => 160,
		'flex-width'  => true,
		'flex-height' => true,
	) );


	
}
add_action('after_setup_theme', 'fancy_lab_config', 0);

/**
 * If WooCommerce is active, we want to enqueue a file
 * with a couple of template overrides
 */
if( class_exists('woocommerce')){
	require get_template_directory() . '/inc/wc-modifications.php';
}


/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'fancy_lab_woocommerce_header_add_to_cart_fragment' );
function fancy_lab_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}