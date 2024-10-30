<?php
/**
 * Country Or Geo Location Based Page Content
 *
 * This plugin provides the capability to display different content in different country based in the ID given to the element
 *
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Country Or Geo Location Based Page Content
 * Plugin URI:        https://www.facebook.com/shahalaanjum.choudhary
 * Description:       This plugin provides the capability to display different content in different country based in the ID given to the element
 * Version:           1.0.0
 * Author:            Shahala Anjum Choudhary
 * Author URI:        https://www.facebook.com/shahalaanjum.choudhary
 * Text Domain:       country-or-geo-location-based-page-content
 * Domain Path:       /

*/

    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

    /* add the script to footer */
//  add_action('wp_footer', 'add_script_to_footer');
//  function add_script_to_footer(){

  /*  function geo_location_scripts() {
        wp_enqueue_style( 'style-name', get_stylesheet_uri() . '/css/geo_location.css' );
        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/geo_location.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'geo_location_scripts' );
 */
?>

<?php
//enqueue scripts from wordpress library
 wp_enqueue_script("jquery"); 

//enqueue scripts
    function geo_location_scripts() {
    wp_register_script('geo_location_script', plugins_url('geo_location.js', __FILE__), array('jquery'),'1.1', true);
    wp_enqueue_script('geo_location_script');
    }
    add_action( 'wp_enqueue_scripts', 'geo_location_scripts' );

//enqueue styles
function geo_location_styles() {
wp_register_style('geo_location_stylesheet', plugins_url('geo_location.css', __FILE__));
wp_enqueue_style('geo_location_stylesheet');
}
add_action( 'wp_enqueue_scripts', 'geo_location_styles' );
  //};


