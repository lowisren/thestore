<?php
/**
 * Sanitization for textarea field
 */
function themehunk_customizer_sanitize_textarea( $input ) {
    global $allowedposttags;
    $output = wp_kses( $input, $allowedposttags );
    return $output;
}
/**
 * Returns a sanitized filepath if it has a valid extension.
 */
function themehunk_customizer_sanitize_upload( $upload ) {
    $return = '';
    $fype = wp_check_filetype( $upload );
    if ( $fype["ext"] ) {
        $return = esc_url_raw( $upload );
    }
    return $return;
}

function themehunk_customizer_enqueue_registers() {
    wp_enqueue_script( 'oneline_lite_customizer_script', THEMEHUNK_CUSTOMIZER_PLUGIN_URL . '/customizer/js/customizer.js', array("jquery"), THEMEHUNK_CUSTOMIZER_VERSION, true  );
}

function themehunk_customizer_customizer_styles() {
    wp_enqueue_style('themehunk_customizer_customizer_styles',THEMEHUNK_CUSTOMIZER_PLUGIN_URL . '/customizer/customizer_styles.css');
}

add_action('customize_controls_print_styles', 'themehunk_customizer_customizer_styles');
add_action( 'customize_controls_enqueue_scripts', 'themehunk_customizer_enqueue_registers' );
?>