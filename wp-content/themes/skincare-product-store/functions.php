<?php
/**
 * Skincare Product Store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package skincare-product-store
 * @since skincare-product-store 1.0
 */

if ( ! function_exists( 'skincare_product_store_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since skincare-product-store 1.0
	 *
	 * @return void
	 */
	function skincare_product_store_support() {

		load_theme_textdomain( 'skincare-product-store', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'skincare_product_store_support' );

if ( ! function_exists( 'skincare_product_store_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since skincare-product-store 1.0
	 *
	 * @return void
	 */
	function skincare_product_store_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'skincare-product-store-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'skincare-product-store-animate-css',
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'skincare-product-store-style' );

		wp_style_add_data( 'skincare-product-store-style', 'rtl', 'replace' );

		wp_enqueue_style( 'dashicons' );

		wp_enqueue_style('skincare-product-store-swiper-css',
		esc_url(get_template_directory_uri()) . '/assets/css/swiper-bundle.css',
		array()
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'skincare_product_store_styles' );

/* Enqueue Custom Js */
function skincare_product_store_scripts() {

	wp_enqueue_script( 
		'skincare-product-store-custom', esc_url(get_template_directory_uri()) . '/assets/js/custom.js', 
		array('jquery') 
	);

	wp_enqueue_script( 
		'skincare-product-store-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);

	wp_enqueue_script(
        'skincare-product-store-scroll-to-top',
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js',
        array(), 
        null, 
        true // Load in footer
    );

    wp_enqueue_script(
		'skincare-product-store-swiper-js',
		esc_url(get_template_directory_uri()) . '/assets/js/swiper-bundle.js',
		array(),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'skincare_product_store_scripts' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_skincare-product-store') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_plugin_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=skincare-product-store'),
    ]);
});

add_action('wp_ajax_check_plugin_activation', function () {
    if (!isset($_POST['plugin']) || empty($_POST['plugin'])) {
        wp_send_json_error(['message' => 'Missing plugin identifier']);
    }

    include_once ABSPATH . 'wp-admin/includes/plugin.php';

    // Map plugin identifiers to their main files
    $skincare_product_store_plugin_map = [
        'woocommerce'          => 'woocommerce/woocommerce.php',
        'wordclever_ai_content_writer'    => 'wordclever-ai-content-writer/wordclever.php',
        'wishlist'             => 'yith-woocommerce-wishlist/init.php',  
    ];

    $skincare_product_store_requested_plugin = sanitize_text_field($_POST['plugin']);

    if (!isset($skincare_product_store_plugin_map[$skincare_product_store_requested_plugin])) {
        wp_send_json_error(['message' => 'Invalid plugin']);
    }

    $skincare_product_store_plugin_file = $skincare_product_store_plugin_map[$skincare_product_store_requested_plugin];
    $skincare_product_store_is_active   = is_plugin_active($skincare_product_store_plugin_file);

    wp_send_json_success(['active' => $skincare_product_store_is_active]);
});

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

function skincare_product_store_theme_setting() {
	// Add block patterns
	require get_template_directory() . '/inc/block-pattern.php';

	// Add block Style
	require get_template_directory() . '/inc/block-style.php';

	// TGM
	require get_template_directory() . '/inc/tgm/plugin-activation.php';

	// Get Started
	require get_template_directory() . '/get-started/getstart.php';

	// Get Notice
	require get_template_directory() . '/get-started/notice.php';

	// Get Notice
	require get_template_directory() . '/inc/customizer.php';
}	
add_action('after_setup_theme', 'skincare_product_store_theme_setting');		