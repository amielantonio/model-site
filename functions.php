<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}


function register_my_menu() {
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

function model_custom_logo() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );

	$custom_logo_attr = array(
		'class'   => 'custom-logo custom-logo-m',
		'loading' => false,
	);

	$image = wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr );

	$oImage = get_stylesheet_directory_uri(). "/img/logo-o.svg";
	$dImage = get_stylesheet_directory_uri(). "/img/logo-d.svg";
	$eImage = get_stylesheet_directory_uri(). "/img/logo-e.svg";
	$lImage = get_stylesheet_directory_uri(). "/img/logo-l.svg";

	$oHtml = "<img src='{$oImage}' class='custom-logo custom-logo-o'/>";
	$dHtml = "<img src='{$dImage}' class='custom-logo custom-logo-d'/>";
	$eHtml = "<img src='{$eImage}' class='custom-logo custom-logo-e'/>";
	$lHtml = "<img src='{$lImage}' class='custom-logo custom-logo-l'/>";

	$home = site_url();

	$html = "
		<a href='{$home}' class='navbar-brand custom-logo-link' rel='home' aria-current='page'>
			{$image}
			{$oHtml}
			{$dHtml}
			{$eHtml}
			{$lHtml}
		</a>
	";


	echo $html;
}

add_action('wp_head', function() {
	?>
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() . "/favicon_package" ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri() . "/favicon_package" ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() . "/favicon_package" ?>/safari-pinned-tab.svg" color="#cb6959">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
<?php
});

add_filter( 'wpcf7_form_autocomplete', function ( $autocomplete ) {
    $autocomplete = 'off';
    return $autocomplete;
}, 10, 1 );


/**
 * Get all website information under 
 */
function site_information () {
	$generalInformation = [
		// 'company_email' => get_field();
	];
}