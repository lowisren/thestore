<?php
/*
  Plugin Name: ThemeHunk Customizer
  Description: With the help of Themehunk unlimited addon you can add unlimited number of columns for services, Testimonial, and Teamwith color options for each.
  Version: 1.0.1
  Author: ThemeHunk
  Text Domain: themehunk-customizer
  Author URI: http://www.themehunk.com/
 */
  if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
  
// Version constant for easy CSS refreshes
define('THEMEHUNK_CUSTOMIZER_VERSION', '1.0.0');
define('THEMEHUNK_CUSTOMIZER_PLUGIN_URL', plugin_dir_url(__FILE__));


add_action('after_setup_theme', 'themehunk_customizer_load_plugin');
function themehunk_customizer_load_plugin() {

include_once( plugin_dir_path(__FILE__) . 'inc/constant.php' );
include_once( plugin_dir_path(__FILE__) . 'widget/team.php' );
include_once( plugin_dir_path(__FILE__) . 'widget/testimonial.php' );
include_once( plugin_dir_path(__FILE__) . 'widget/services.php' );
include_once( plugin_dir_path(__FILE__) . 'inc/install.php' );
include_once( plugin_dir_path(__FILE__) . 'customizer/custom-customizer.php' );
include_once( plugin_dir_path(__FILE__) . 'customizer/customizer.php' );
include_once( plugin_dir_path(__FILE__) . 'inc/custom-style.php' );
include_once( plugin_dir_path(__FILE__) . 'inc/admin.php' );
}
?>