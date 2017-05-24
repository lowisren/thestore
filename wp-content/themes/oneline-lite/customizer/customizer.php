<?php
    //  = Default Theme Customizer Settings  =
function oneline_lite_customize_register( $wp_customize ) {

     //  Genral Settings 
  $wp_customize->get_section('title_tagline')->title = esc_html__('General Settings', 'oneline-lite');
   $wp_customize->get_section('title_tagline')->priority = 3;
  
/** Custom Colors ***/

    $wp_customize->get_section('colors')->title = esc_html__('Style Settings', 'oneline-lite');
    $wp_customize->get_section('colors')->priority = 15;

/** Footer Section ***/
    $wp_customize->add_panel( 'footer_panel', array(
        'priority'       => 16,
        'title'          => __('Social Icon Section', 'oneline-lite'),
        ));
    
    //social icon        
       $wp_customize->add_section('social_option', array(
            'title'    => __('Social Icon Option', 'oneline-lite'),
            'priority' => 2,
            'panel'    =>'footer_panel'
            ));
       $wp_customize->add_setting('social_link_facebook', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_facebook', array(
        'label'    => __('Facebook URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_facebook',
         'type'       => 'text',
        ));

        $wp_customize->add_setting('social_link_google', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_google', array(
        'label'    => __('Google+ URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_google',
         'type'       => 'text',
        ));
        $wp_customize->add_setting('social_link_linkedin', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_linkedin', array(
        'label'    => __('LinkedIn URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_linkedin',
         'type'       => 'text',
        ));
        $wp_customize->add_setting('social_link_pintrest', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_pintrest', array(
        'label'    => __('Pintrest URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_pintrest',
         'type'       => 'text',
        ));
        $wp_customize->add_setting('social_link_twitter', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
        ));
        $wp_customize->add_control('social_link_twitter', array(
        'label'    => __('Twitter URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_twitter',
         'type'       => 'text',
        ));     
}
add_action('customize_register','oneline_lite_customize_register');
?>