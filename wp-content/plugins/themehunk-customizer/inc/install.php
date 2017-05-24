<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// register widget
add_action('widgets_init', 'themehunk_customizer_widget_init');
function themehunk_customizer_widget_init() {
    register_widget( 'themehunk_customizer_services_widget' );
    register_widget( 'themehunk_customizer_team_widget' );
    register_widget( 'themehunk_customizer_testimonial_widget' );

}
function themehunk_customizer_widgets_init(){

    register_sidebar(array(
    'name' => __('Service Widget', 'themehunk-customizer'),
    'id' => 'multi-service-widget',
    'description' => __('Add Service Widget','themehunk-customizer'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ));
    register_sidebar(array(
    'name' => __('Team Widget', 'themehunk-customizer'),
    'id' => 'multi-team-widget',
    'description' => __('Add Team Widget', 'themehunk-customizer'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ));

    register_sidebar(array(
    'name' => __('Testimonial Widget', 'themehunk-customizer'),
    'id' => 'testimonial-widget',
    'description' => __('Add Testimonial Widget', 'themehunk-customizer'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ));
}
/** Register sidebars by running novelpro_widgets_init() on the widgets_init hook. */
add_action('widgets_init', 'themehunk_customizer_widgets_init');

/*
 * Include assets
 */
function themehunk_customizer_admin_assets() {
 wp_enqueue_media();
wp_enqueue_script('themehunk-customizer-widget-script', THEMEHUNK_CUSTOMIZER_PLUGIN_URL. 'customizer/js/widget.js', array( 'jquery', 'wp-color-picker' ), THEMEHUNK_CUSTOMIZER_VERSION, true);
}
add_action('admin_enqueue_scripts', 'themehunk_customizer_admin_assets');
?>