<?php 
/**
 * fortunato functions and dynamic template
 *
 * @package fortunato
 */
 
/**
 * Replace Excerpt More
 */
if ( ! function_exists( 'fortunato_new_excerpt_more' ) ) {
	function fortunato_new_excerpt_more( $more ) {
		if ( is_admin() ) {
			return $more;
		}
		return '&hellip;';
	}
}
add_filter('excerpt_more', 'fortunato_new_excerpt_more');

 /**
 * Delete font size style from tag cloud widget
 */
if ( ! function_exists( 'fortunato_fix_tag_cloud' ) ) {
	function fortunato_fix_tag_cloud($tag_string){
	   return preg_replace("/style='font-size:.+pt;'/", '', $tag_string);
	}
}
add_filter('wp_generate_tag_cloud', 'fortunato_fix_tag_cloud',10,3);

 /**
 * Social Buttons
 */
if ( ! function_exists( 'fortunato_social_buttons' ) ) {
	function fortunato_social_buttons() {
		$facebookURL = get_theme_mod('fortunato_theme_options_facebookurl', '#');
		$twitterURL = get_theme_mod('fortunato_theme_options_twitterurl', '#');
		$googleplusURL = get_theme_mod('fortunato_theme_options_googleplusurl', '#');
		$linkedinURL = get_theme_mod('fortunato_theme_options_linkedinurl', '#');
		$instagramURL = get_theme_mod('fortunato_theme_options_instagramurl', '#');
		$youtubeURL = get_theme_mod('fortunato_theme_options_youtubeurl', '#');
		$pinterestURL = get_theme_mod('fortunato_theme_options_pinteresturl', '#');
		$tumblrURL = get_theme_mod('fortunato_theme_options_tumblrurl', '#');
		$flickrURL = get_theme_mod('fortunato_theme_options_flickrurl', '#');
		$vkURL = get_theme_mod('fortunato_theme_options_vkurl', '#');
		$xingURL = get_theme_mod('fortunato_theme_options_xingurl', '');
		$redditURL = get_theme_mod('fortunato_theme_options_redditurl', '');
		$spotifyURL = get_theme_mod('fortunato_theme_options_spotifyurl', '');
		$skypeNAME = get_theme_mod('fortunato_theme_options_skypename', '');
		?>
		<?php if (!empty($facebookURL)) : ?>
			<a href="<?php echo esc_url($facebookURL); ?>" title="<?php esc_attr_e( 'Facebook', 'fortunato' ); ?>"><i class="fa fa-facebook spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($twitterURL)) : ?>
			<a href="<?php echo esc_url($twitterURL); ?>" title="<?php esc_attr_e( 'Twitter', 'fortunato' ); ?>"><i class="fa fa-twitter spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($googleplusURL)) : ?>
			<a href="<?php echo esc_url($googleplusURL); ?>" title="<?php esc_attr_e( 'Google Plus', 'fortunato' ); ?>"><i class="fa fa-google-plus spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Google Plus', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($linkedinURL)) : ?>
			<a href="<?php echo esc_url($linkedinURL); ?>" title="<?php esc_attr_e( 'Linkedin', 'fortunato' ); ?>"><i class="fa fa-linkedin spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Linkedin', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($instagramURL)) : ?>
			<a href="<?php echo esc_url($instagramURL); ?>" title="<?php esc_attr_e( 'Instagram', 'fortunato' ); ?>"><i class="fa fa-instagram spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($youtubeURL)) : ?>
			<a href="<?php echo esc_url($youtubeURL); ?>" title="<?php esc_attr_e( 'YouTube', 'fortunato' ); ?>"><i class="fa fa-youtube spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'YouTube', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($pinterestURL)) : ?>
			<a href="<?php echo esc_url($pinterestURL); ?>" title="<?php esc_attr_e( 'Pinterest', 'fortunato' ); ?>"><i class="fa fa-pinterest spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Pinterest', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($tumblrURL)) : ?>
			<a href="<?php echo esc_url($tumblrURL); ?>" title="<?php esc_attr_e( 'Tumblr', 'fortunato' ); ?>"><i class="fa fa-tumblr spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Tumblr', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($flickrURL)) : ?>
			<a href="<?php echo esc_url($flickrURL); ?>" title="<?php esc_attr_e( 'Flickr', 'fortunato' ); ?>"><i class="fa fa-flickr spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Flickr', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($vkURL)) : ?>
			<a href="<?php echo esc_url($vkURL); ?>" title="<?php esc_attr_e( 'VK', 'fortunato' ); ?>"><i class="fa fa-vk spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'VK', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($xingURL)) : ?>
			<a href="<?php echo esc_url($xingURL); ?>" title="<?php esc_attr_e( 'Xing', 'fortunato' ); ?>"><i class="fa fa-xing spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Xing', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($redditURL)) : ?>
			<a href="<?php echo esc_url($redditURL); ?>" title="<?php esc_attr_e( 'Reddit', 'fortunato' ); ?>"><i class="fa fa-reddit-alien spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Reddit', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($spotifyURL)) : ?>
			<a href="<?php echo esc_url($spotifyURL); ?>" title="<?php esc_attr_e( 'Spotify', 'fortunato' ); ?>"><i class="fa fa-spotify spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Spotify', 'fortunato' ); ?></span></i></a>
		<?php endif; ?>
		<?php if (!empty($skypeNAME)) : ?>
			<a href="skype:<?php echo esc_attr($skypeNAME); ?>?call" title="<?php esc_attr_e( 'Skype', 'fortunato' ); ?>"><i class="fa fa-skype spaceLeftRight"><span class="screen-reader-text"><?php esc_html_e( 'Skype', 'fortunato' ); ?></span></i></a>
		<?php endif;
	}
}

 /**
 * Register Custom Settings
 */
function fortunato_color_primary_register( $wp_customize ) {
	$colors = array();
	
	$colors[] = array(
	'slug'=>'fortunato_box_background_color', 
	'default' => '#ffffff',
	'label' => __('Background Color', 'fortunato')
	);
	
	$colors[] = array(
	'slug'=>'fortunato_box_text_color', 
	'default' => '#6c6c6c',
	'label' => __('Text Color', 'fortunato')
	);
	
	$colors[] = array(
	'slug'=>'fortunato_box_second_text_color', 
	'default' => '#cecece',
	'label' => __('Secondary Text Color', 'fortunato')
	);
	
	$colors[] = array(
	'slug'=>'fortunato_special_color', 
	'default' => '#cea525',
	'label' => __('Special Color', 'fortunato')
	);
	
	foreach( $colors as $fortunato_theme_options_colors ) {
	// SETTINGS
		$wp_customize->add_setting(
			'fortunato_theme_options_colors[' . $fortunato_theme_options_colors['slug'] . ']', array(
			'default' => $fortunato_theme_options_colors['default'],
			'type' => 'option', 
			'sanitize_callback' => 'sanitize_hex_color',
			'capability' => 'edit_theme_options'
		)
	);
	// CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$fortunato_theme_options_colors['slug'], 
			array('label' => $fortunato_theme_options_colors['label'], 
			'section' => 'colors',
			'settings' =>'fortunato_theme_options_colors[' . $fortunato_theme_options_colors['slug'] . ']',
			)
		)
	);
	
	}
	
	/*
	Start Fortunato Options
	=====================================================
	*/
	$wp_customize->add_section( 'cresta_fortunato_options', array(
	     'title'    => esc_html__( 'Fortunato Theme Options', 'fortunato' ),
	     'priority' => 50,
	) );
	
	/*
	Social Icons
	=====================================================
	*/
	$socialmedia = array();
	
	$socialmedia[] = array(
	'slug'=>'facebookurl', 
	'default' => '#',
	'label' => __('Facebook URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'twitterurl', 
	'default' => '#',
	'label' => __('Twitter URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'googleplusurl', 
	'default' => '#',
	'label' => __('Google Plus URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'linkedinurl', 
	'default' => '#',
	'label' => __('Linkedin URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'instagramurl', 
	'default' => '#',
	'label' => __('Instagram URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'youtubeurl', 
	'default' => '#',
	'label' => __('YouTube URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'pinteresturl', 
	'default' => '#',
	'label' => __('Pinterest URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'tumblrurl', 
	'default' => '#',
	'label' => __('Tumblr URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'flickrurl', 
	'default' => '#',
	'label' => __('Flickr URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'vkurl', 
	'default' => '#',
	'label' => __('VK URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'xingurl', 
	'default' => '',
	'label' => __('Xing URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'redditurl', 
	'default' => '',
	'label' => __('Reddit URL', 'fortunato')
	);
	$socialmedia[] = array(
	'slug'=>'spotifyurl', 
	'default' => '',
	'label' => __('Spotify URL', 'fortunato')
	);
	
	foreach( $socialmedia as $fortunato_theme_options ) {
		// SETTINGS
		$wp_customize->add_setting(
			'fortunato_theme_options_' . $fortunato_theme_options['slug'], array(
				'default' => $fortunato_theme_options['default'],
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
				'type'     => 'theme_mod',
			)
		);
		// CONTROLS
		$wp_customize->add_control(
			$fortunato_theme_options['slug'], 
			array('label' => $fortunato_theme_options['label'], 
			'section'    => 'cresta_fortunato_options',
			'settings' =>'fortunato_theme_options_' . $fortunato_theme_options['slug'],
			)
		);
	}
	
	/*
	Skype Button
	=====================================================
	*/
	$wp_customize->add_setting('fortunato_theme_options_skypename', array(
        'default'    => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
    ) );
	
	$wp_customize->add_control('fortunato_theme_options_skypename', array(
        'label'      => __( 'Skype Username', 'fortunato' ),
        'section'    => 'cresta_fortunato_options',
        'settings'   => 'fortunato_theme_options_skypename',
    ) );
	
	/*
	Show social on footer
	=====================================================
	*/
	$wp_customize->add_setting('fortunato_theme_options_socialfooter', array(
        'default'    => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fortunato_sanitize_checkbox'
    ) );
	
	$wp_customize->add_control('fortunato_theme_options_socialfooter', array(
        'label'      => __( 'Show social on footer', 'fortunato' ),
        'section'    => 'cresta_fortunato_options',
        'settings'   => 'fortunato_theme_options_socialfooter',
        'type'       => 'checkbox',
    ) );
	
	/*
	Overlay on header
	=====================================================
	*/
	$wp_customize->add_setting('fortunato_theme_options_headeroverlay', array(
        'default'    => '1',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fortunato_sanitize_checkbox'
    ) );
	
	$wp_customize->add_control('fortunato_theme_options_headeroverlay', array(
        'label'      => __( 'Show Overlay on Header', 'fortunato' ),
        'section'    => 'cresta_fortunato_options',
        'settings'   => 'fortunato_theme_options_headeroverlay',
        'type'       => 'checkbox',
    ) );
	
	/*
	Search Button
	=====================================================
	*/
	$wp_customize->add_setting('fortunato_theme_options_hidesearch', array(
        'default'    => '1',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fortunato_sanitize_checkbox'
    ) );
	
	$wp_customize->add_control('fortunato_theme_options_hidesearch', array(
        'label'      => __( 'Show Search Button in Main Menu', 'fortunato' ),
        'section'    => 'cresta_fortunato_options',
        'settings'   => 'fortunato_theme_options_hidesearch',
        'type'       => 'checkbox',
    ) );
	
	/*
	Sidebar open by default
	=====================================================
	*/
	$wp_customize->add_setting('fortunato_theme_options_sidebaropen', array(
        'default'    => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fortunato_sanitize_checkbox'
    ) );
	
	$wp_customize->add_control('fortunato_theme_options_sidebaropen', array(
        'label'      => __( 'Sidebar open by default', 'fortunato' ),
        'section'    => 'cresta_fortunato_options',
        'settings'   => 'fortunato_theme_options_sidebaropen',
        'type'       => 'checkbox',
    ) );
	
	/*
	Upgrade to PRO
	=====================================================
	*/
    class Fortunato_Customize_Upgrade_Control extends WP_Customize_Control {
        public function render_content() {  ?>
        	<p class="fortunato-upgrade-title">
        		<span class="customize-control-title">
					<h3 style="text-align:center;"><div class="dashicons dashicons-megaphone"></div> <?php esc_html_e('Get Fortunato PRO WP Theme for only', 'fortunato'); ?> 29,90&euro;</h3>
        		</span>
        	</p>
			<p style="text-align:center;" class="fortunato-upgrade-button">
				<a style="margin: 10px;" target="_blank" href="http://crestaproject.com/demo/fortunato-pro/" class="button button-secondary">
					<?php esc_html_e('Watch the demo', 'fortunato'); ?>
				</a>
				<a style="margin: 10px;" target="_blank" href="https://crestaproject.com/downloads/fortunato/" class="button button-secondary">
					<?php esc_html_e('Get Fortunato PRO Theme', 'fortunato'); ?>
				</a>
			</p>
			<ul>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Advanced Theme Options', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Logo Upload', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Google Maps in header', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'YouTube Video in header', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Parallax Scene in header', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Slider in header home page', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Loading Page', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Font Switcher', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Unlimited Colors and Skin', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Choose header height (100% - 90% - 75% - 50% - Menu Height)', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Breadcrumb', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( '8 Shortcodes', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( '11 Exclusive Widgets', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Related Posts Box', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Information About Author Box', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'Custom image for 404 page and search page', 'fortunato' ); ?></b></li>
				<li><div class="dashicons dashicons-yes" style="color: #1fa67a;"></div><b><?php esc_html_e( 'And much more...', 'fortunato' ); ?></b></li>
			<ul><?php
        }
    }
	
	$wp_customize->add_section( 'cresta_upgrade_pro', array(
	     'title'    => esc_html__( 'More features? Upgrade to PRO', 'fortunato' ),
	     'priority' => 999,
	));
	
	$wp_customize->add_setting('fortunato_section_upgrade_pro', array(
		'default' => '',
		'type' => 'option',
		'sanitize_callback' => 'esc_attr'
	));
	
	$wp_customize->add_control(new Fortunato_Customize_Upgrade_Control($wp_customize, 'fortunato_section_upgrade_pro', array(
		'section' => 'cresta_upgrade_pro',
		'settings' => 'fortunato_section_upgrade_pro',
	)));
	
}
add_action( 'customize_register', 'fortunato_color_primary_register' );

function fortunato_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Add Custom CSS to Header 
 */
function fortunato_custom_css_styles() { 
	global $fortunato_theme_options_colors;
	$color_options = get_option( 'fortunato_theme_options_colors', $fortunato_theme_options_colors );	
	if( isset( $color_options[ 'fortunato_box_background_color' ] ) ) {
		$fortunato_box_background_color = $color_options['fortunato_box_background_color'];
	}
	if( isset( $color_options[ 'fortunato_box_text_color' ] ) ) {
		$fortunato_box_text_color = $color_options['fortunato_box_text_color'];
	}
	if( isset( $color_options[ 'fortunato_box_second_text_color' ] ) ) {
		$fortunato_box_second_text_color = $color_options['fortunato_box_second_text_color'];
	}
	if( isset( $color_options[ 'fortunato_special_color' ] ) ) {
		$fortunato_special_color = $color_options['fortunato_special_color'];
	}
?>
	<style type="text/css">
		<?php if (!empty($fortunato_box_background_color) && $fortunato_box_background_color != '#ffffff' ) : ?>
			<?php list($r, $g, $b) = sscanf($fortunato_box_background_color, '#%02x%02x%02x'); ?>
			body,
			.widget-area,
			.openSidebar span,
			input[type="text"],
			input[type="email"],
			input[type="url"],
			input[type="password"],
			input[type="search"],
			input[type="number"],
			input[type="tel"],
			input[type="range"],
			input[type="date"],
			input[type="month"],
			input[type="week"],
			input[type="time"],
			input[type="datetime"],
			input[type="datetime-local"],
			input[type="color"],
			textarea,
			select {
				background: <?php echo esc_html($fortunato_box_background_color); ?>;
			}
			button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			.site-header a, .read-link a,
			#wp-calendar > caption,
			.openSearch,
			.main-navigation ul ul a:hover,
			.site-title a:hover,
			.site-title a:focus,
			.main-navigation a:hover,
			.main-navigation a:focus,
			.content-area .onsale,
			.woocommerce .wooImage .button,
			.woocommerce .wooImage .added_to_cart,
			.woocommerce-error li a,
			.woocommerce-message a,
			.return-to-shop a,
			.wc-proceed-to-checkout .button.checkout-button,
			.widget_shopping_cart p.buttons a,
			.woocommerce .wishlist_table td.product-add-to-cart a,
			.woocommerce .content-area .woocommerce-tabs .tabs li.active a {
				color: <?php echo esc_html($fortunato_box_background_color); ?>;
			}
			.cat-links a,
			.tagcloud a,
			.read-link a,
			.site-main .pagination .nav-links a,
			.page-links > a,
			.woocommerce-pagination .page-numbers a {
				color: <?php echo esc_html($fortunato_box_background_color); ?> !important;
			}
			#search-full {
				background: rgba(<?php echo esc_html($r).', '.esc_html($g).', '.esc_html($b); ?>, 0.9);
			}
			@media screen and (max-width: 768px) {
				.menu-toggle,
				.main-navigation.toggled .nav-menu,
				.menu-toggle:hover, .menu-toggle:focus {
					background: <?php echo esc_html($fortunato_box_background_color); ?>;
				}
				.main-navigation.toggled .menu-toggle {
					color: <?php echo esc_html($fortunato_box_background_color); ?>;
				}
			}
		<?php endif; ?>
		
		<?php if (!empty($fortunato_box_text_color) && $fortunato_box_text_color != '#6c6c6c' ) : ?>
			<?php list($r, $g, $b) = sscanf($fortunato_box_text_color, '#%02x%02x%02x'); ?>
			body,
			button,
			input,
			select,
			textarea,
			button:hover,
			input[type="button"]:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover,
			button:focus,
			input[type="button"]:focus,
			input[type="reset"]:focus,
			input[type="submit"]:focus,
			button:active,
			input[type="button"]:active,
			input[type="reset"]:active,
			input[type="submit"]:active,
			a:hover,
			a:focus,
			a:active,
			.openSearch.sidebarColor,
			#toTop,
			.woocommerce .wooImage .button:hover,
			.woocommerce .wooImage .added_to_cart:hover,
			.woocommerce-error li a, .woocommerce-message a:hover,
			.return-to-shop a, .wc-proceed-to-checkout .button.checkout-button:hover {
				color: <?php echo esc_html($fortunato_box_text_color); ?>;
			}
			.cat-links a:hover,
			.cat-links a:focus,
			.tagcloud a:hover,
			.tagcloud a:focus,
			.read-link a:hover,
			.read-link a:focus,
			.site-main .pagination .nav-links a:hover,
			.site-main .pagination .nav-links a:focus,
			.page-links > a:hover,
			.page-links > a:focus,
			.woocommerce ul.products > li .price,
			.woocommerce-pagination .page-numbers a:hover,
			.woocommerce-pagination .page-numbers a:focus {
				color: <?php echo esc_html($fortunato_box_text_color); ?> !important;
			}
			.main-navigation ul ul,
			.openSidebar.sidebarColor span {
				background: <?php echo esc_html($fortunato_box_text_color); ?>;
			}
			.site-brand-main {
				background-color: rgba(<?php echo esc_html($r).', '.esc_html($g).', '.esc_html($b); ?>, 0.4);
			}
			@media screen and (max-width: 768px) {
				.menu-toggle,
				.menu-toggle:hover, .menu-toggle:focus {
					color: <?php echo esc_html($fortunato_box_text_color); ?>;
				}
				.main-navigation a {
					color: <?php echo esc_html($fortunato_box_text_color); ?> !important;
				}
			}
		<?php endif; ?>
		
		<?php if (!empty($fortunato_box_second_text_color) && $fortunato_box_second_text_color != '#cecece' ) : ?>
			select,
			input[type="text"],
			input[type="email"],
			input[type="url"],
			input[type="password"],
			input[type="search"],
			input[type="number"],
			input[type="tel"],
			input[type="range"],
			input[type="date"],
			input[type="month"],
			input[type="week"],
			input[type="time"],
			input[type="datetime"],
			input[type="datetime-local"],
			input[type="color"],
			textarea,
			.woocommerce .wooImage:hover {
				border: 1px solid <?php echo esc_html($fortunato_box_second_text_color); ?>;
			}
			.sepHentry:before, .sepHentry:after {
				border-bottom: 1px solid <?php echo esc_html($fortunato_box_second_text_color); ?>;
			}
			.sepHentry2 {
				border-top: 1px solid <?php echo esc_html($fortunato_box_second_text_color); ?>;
			}
			.widget-area {
				border-right: 1px solid <?php echo esc_html($fortunato_box_second_text_color); ?>;
			}
			.smallPart,
			input[type="text"],
			input[type="email"],
			input[type="url"],
			input[type="password"],
			input[type="search"],
			input[type="number"],
			input[type="tel"],
			input[type="range"],
			input[type="date"],
			input[type="month"],
			input[type="week"],
			input[type="time"],
			input[type="datetime"],
			input[type="datetime-local"],
			input[type="color"],
			textarea,
			select,
			.smallPart a,
			.smallPart a:hover,
			.smallPart a:focus,
			.smallPart a:active,
			.sepHentry {
				color: <?php echo esc_html($fortunato_box_second_text_color); ?>;
			}
			button:hover,
			input[type="button"]:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover,
			button:focus,
			input[type="button"]:focus,
			input[type="reset"]:focus,
			input[type="submit"]:focus,
			button:active,
			input[type="button"]:active,
			input[type="reset"]:active,
			input[type="submit"]:active,
			.site-main .pagination .nav-links > span,
			.page-links > span.page-links-number,
			.woocommerce-pagination .page-numbers span,
			.cat-links a:hover, .cat-links a:focus,
			.tagcloud a:hover, .tagcloud a:focus,
			.read-link a:hover, .read-link a:focus,
			.site-main .pagination .nav-links a:hover,
			.site-main .pagination .nav-links a:focus,
			.page-links > a:hover, .page-links > a:hover,
			.woocommerce-pagination .page-numbers a:hover,
			.woocommerce-pagination .page-numbers a:focus,
			.woocommerce .wooImage .button:hover,
			.woocommerce .wooImage .added_to_cart:hover,
			.woocommerce-error li a, .woocommerce-message a:hover,
			.return-to-shop a, .wc-proceed-to-checkout .button.checkout-button:hover {
				background: <?php echo esc_html($fortunato_box_second_text_color); ?>;
			}
		<?php endif; ?>
		
		<?php if (!empty($fortunato_special_color) && $fortunato_special_color != '#cea525' ) : ?>
			.site-header,
			blockquote::before,
			a,
			.site-social a:hover,
			.comment-reply-title,
			.woocommerce ul.products > li .price,
			.woocommerce div.product .summary .price {
				color: <?php echo esc_html($fortunato_special_color); ?>;
			}
			button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			#wp-calendar > caption,
			.cat-links a, .tagcloud a,
			.read-link a, .site-main .pagination .nav-links a,
			.page-links > a,
			.woocommerce-pagination .page-numbers a,
			.content-area .onsale,
			.woocommerce .wooImage .button,
			.woocommerce .wooImage .added_to_cart,
			.woocommerce-error li a,
			.woocommerce-message a,
			.return-to-shop a,
			.wc-proceed-to-checkout .button.checkout-button,
			.widget_shopping_cart p.buttons a,
			.woocommerce .wishlist_table td.product-add-to-cart a,
			.woocommerce .content-area .woocommerce-tabs .tabs li.active a,
			.widget_price_filter .ui-slider .ui-slider-handle {
				background: <?php echo esc_html($fortunato_special_color); ?>;
			}
			blockquote {
				border-left: 3px solid <?php echo esc_html($fortunato_special_color); ?>;
				border-right: 1px solid <?php echo esc_html($fortunato_special_color); ?>;
			}
			input[type="text"]:focus,
			input[type="email"]:focus,
			input[type="url"]:focus,
			input[type="password"]:focus,
			input[type="search"]:focus,
			input[type="number"]:focus,
			input[type="tel"]:focus,
			input[type="range"]:focus,
			input[type="date"]:focus,
			input[type="month"]:focus,
			input[type="week"]:focus,
			input[type="time"]:focus,
			input[type="datetime"]:focus,
			input[type="datetime-local"]:focus,
			input[type="color"]:focus,
			textarea:focus,
			#wp-calendar tbody td#today {
				border: 1px solid <?php echo esc_html($fortunato_special_color); ?>;
			}
			.main-navigation ul li:hover > a, 
			.main-navigation ul li.focus > a, 
			.main-navigation li.current-menu-item > a, 
			.main-navigation li.current-menu-parent > a, 
			.main-navigation li.current-page-ancestor > a,
			.main-navigation .current_page_item > a, 
			.main-navigation .current_page_parent > a {
				border-top: 2px solid <?php echo esc_html($fortunato_special_color); ?>;
			}
			.woocommerce ul.products > li h2:after {
				border-bottom: 2px solid <?php echo esc_html($fortunato_special_color); ?>;
			}
			@media screen and (max-width: 768px) {
				.main-navigation.toggled .menu-toggle {
					background: <?php echo esc_html($fortunato_special_color); ?>;
				}
			}
		<?php endif; ?>
	</style>
	<?php
}
add_action('wp_head', 'fortunato_custom_css_styles');