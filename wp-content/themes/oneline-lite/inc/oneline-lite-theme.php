<?php
function oneline_lite_tab_config($theme_data){
    $config = array(
        'theme_brand' => __('ThemeHunk','oneline-lite'),
        'theme_brand_url' => esc_url($theme_data->get( 'AuthorURI' )),
        'welcome'=>sprintf(esc_html__('Welcome to OneLine Lite - Version %1s', 'oneline-lite'), $theme_data->get( 'Version' ) ),
        'welcome_desc' => esc_html__( ' Oneline is a versatile one page theme for creating beautiful websites. This theme comes with powerful features which will help you in designing a wonderful website for any type of niche (Business, Landing page, E-commerce, Local business, Personal website).', 'oneline-lite' ),
        'tab_one' =>esc_html__( 'Getting Started', 'oneline-lite' ),
        'tab_two' =>esc_html__( 'Recommended Actions', 'oneline-lite' ),
        'tab_three' =>esc_html__( 'Free VS Pro', 'oneline-lite' ),

        'plugin_title' => esc_html__( 'Step 1 - Do recommended actions', 'oneline-lite' ),
        'plugin_link' => '?page=th_oneline_lite&tab=actions_required',
        'plugin_text' => sprintf(esc_html__('To set up home page like theme demo. You have to install recommended plugin.', 'oneline-lite'), $theme_data->get( 'Name' )),
        'plugin_button' => esc_html__('Go To Recommended Action', 'oneline-lite'),


        'docs_title' => esc_html__( 'Step 2 - Check theme documentation', 'oneline-lite' ),
        'docs_link' => 'https://www.themehunk.com/docs/oneline-lite-theme/',
        'docs_text' => sprintf(esc_html__('Need any help to setup and configure %s? Please have a look at our documentations instructions.', 'oneline-lite'), $theme_data->get( 'Name' )),
        'docs_button' => esc_html__('Documentation', 'oneline-lite'),
		
		'customizer_title' => esc_html__( 'Step 3 - Theme Customizer', 'oneline-lite' ),
        'customizer_text' =>  sprintf(esc_html__('%s theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel.', 'oneline-lite'), $theme_data->Name),
        'customizer_button' => sprintf( esc_html__('Start Customize', 'oneline-lite')),

        'support_title' => esc_html__( 'Step 4 - Contact Support Forum, if you need help', 'oneline-lite' ),
        'support_link' => esc_url('//www.themehunk.com/support/'),
        'support_text' => sprintf(esc_html__('If you need any help you can contact to our support team, our team is always ready to help you.', 'oneline-lite'), $theme_data->get( 'Name' )),
        'support_button' => sprintf( esc_html__('Create a support ticket', 'oneline-lite'), $theme_data->get( 'Name' )),
        );
    return $config;
}


if ( ! function_exists( 'oneline_lite_admin_scripts' ) ) :
    /**
     * Enqueue scripts for admin page only: Theme info page
     */
    function oneline_lite_admin_scripts( $hook ) {
        if ($hook === 'appearance_page_th_oneline_lite'  ) {
            wp_enqueue_style( 'oneline-lite-admin-css', get_template_directory_uri() . '/css/admin.css' );
            // Add recommend plugin css
            wp_enqueue_style( 'plugin-install' );
            wp_enqueue_script( 'plugin-install' );
            wp_enqueue_script( 'updates' );
            add_thickbox();
        }
    }
endif;
add_action( 'admin_enqueue_scripts', 'oneline_lite_admin_scripts' );

function online_lite_count_active_plugins() {
   $i = 3;
       if ( shortcode_exists( 'themehunk-customizer-oneline-lite' ) ):
           $i--;
       endif;
        if(class_exists( 'woocommerce' )) :
           $i--;
       endif;
       if ( shortcode_exists( 'lead-form' ) ):
           $i--;
       endif;

       return $i;
}

function oneline_lite_tab_count(){
   $count = '';
       $number_count = online_lite_count_active_plugins();
           if( $number_count >0):
           $count = "<span class='update-plugins count-".esc_attr( $number_count )."' title='".esc_attr( $number_count )."'><span class='update-count'>" . number_format_i18n($number_count) . "</span></span>";
           endif;
           return $count;
}


 /**
    * Menu tab
    */
function oneline_lite_tab() {
               $number_count = online_lite_count_active_plugins();
               $menu_title = esc_html__(' OneLine Lite', 'oneline-lite');
           if( $number_count >0):
           $count = "<span class='update-plugins count-".esc_attr( $number_count )."' title='".esc_attr( $number_count )."'><span class='update-count'>" . number_format_i18n($number_count) . "</span></span>";
               $menu_title = sprintf( esc_html__('OneLine Lite %s', 'oneline-lite'), $count );
           endif;


   add_theme_page( esc_html__( 'OneLine Lite', 'oneline-lite' ), $menu_title, 'edit_theme_options', 'th_oneline_lite', 'oneline_lite_tab_page');
}
add_action('admin_menu', 'oneline_lite_tab');


function oneline_lite_pro_theme(){ ?>
<div class="freeevspro-img">
<img src="<?php echo get_template_directory_uri(); ?>/images/freevspro.png" alt="free vs pro" />
<p>
 <a href="https://www.themehunk.com/product/oneline-single-page-wordpress-theme/" target="_blank" class="button button-primary">Check Pro version for more features</a>
                           </p></div>
<?php }


function oneline_lite_tab_page() {
    $theme_data = wp_get_theme();
    $theme_config = oneline_lite_tab_config($theme_data);


    // Check for current viewing tab
    $tab = null;
    if ( isset( $_GET['tab'] ) ) {
        $tab = $_GET['tab'];
    } else {
        $tab = null;
    }

    $actions_r = oneline_lite_get_actions_required();
    $actions = $actions_r['actions'];

    $current_action_link =  admin_url( 'themes.php?page=th_oneline_lite&tab=actions_required' );

    $recommend_plugins = get_theme_support( 'recommend-plugins' );
    if ( is_array( $recommend_plugins ) && isset( $recommend_plugins[0] ) ){
        $recommend_plugins = $recommend_plugins[0];
    } else {
        $recommend_plugins[] = array();
    }
    ?>
    <div class="wrap about-wrap theme_info_wrapper">
        <h1><?php  echo $theme_config['welcome']; ?></h1>
        <div class="about-text"><?php echo $theme_config['welcome_desc']; ?></div>

        <a target="_blank" href="<?php echo $theme_config['theme_brand_url']; ?>/?wp=oneline-lite" class="themehunkhemes-badge wp-badge"><span><?php echo $theme_config['theme_brand']; ?></span></a>
        <h2 class="nav-tab-wrapper">
            <a href="?page=th_oneline_lite" class="nav-tab<?php echo is_null($tab) ? ' nav-tab-active' : null; ?>"><?php  echo $theme_config['tab_one']; ?></a>
            <a href="?page=th_oneline_lite&tab=actions_required" class="nav-tab<?php echo $tab == 'actions_required' ? ' nav-tab-active' : null; ?>"><?php echo $theme_config['tab_two'];  echo oneline_lite_tab_count();?></a>
            <a href="?page=th_oneline_lite&tab=theme-pro" class="nav-tab<?php echo $tab == 'theme-pro' ? ' nav-tab-active' : null; ?>"><?php echo $theme_config['tab_three']; ?></span></a>
        </h2>

        <?php if ( is_null( $tab ) ) { ?>
            <div class="theme_info info-tab-content">
                <div class="theme_info_column clearfix">
                    <div class="theme_info_left">
                    <div class="theme_link">
                            <h3><?php echo $theme_config['plugin_title']; ?></h3>
                            <p class="about"><?php echo $theme_config['plugin_text']; ?></p>
                            <p>
                                <a href="<?php echo esc_url($theme_config['plugin_link'] ); ?>" class="button button-secondary"><?php echo $theme_config['plugin_button']; ?></a>
                            </p>
                        </div>
                        <div class="theme_link">
                            <h3><?php echo $theme_config['docs_title']; ?></h3>
                            <p class="about"><?php echo $theme_config['docs_text']; ?></p>
                            <p>
                                <a href="<?php echo esc_url($theme_config['docs_link'] ); ?>" target="_blank" class="button button-secondary"><?php echo $theme_config['docs_button']; ?></a>
                            </p>
                        </div>
						  <div class="theme_link">
                            <h3><?php echo $theme_config['customizer_title']; ?></h3>
                            <p class="about"><?php  echo $theme_config['customizer_text']; ?></p>
                            <p>
                                <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php echo $theme_config['customizer_button']; ?></a>
                            </p>
                        </div>
                        <div class="theme_link">
                            <h3><?php echo $theme_config['support_title']; ?></h3>
                            <p class="about"><?php  echo $theme_config['support_text']; ?></p>
                            <p>
                                <a href="<?php echo $theme_config['support_link']; ?>" target="_blank" class="button button-secondary"><?php echo $theme_config['support_button']; ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if ( $tab == 'actions_required' ) { ?>
            <div class="action-required-tab info-tab-content">

                <?php if ( is_child_theme() ){
                    $child_theme = wp_get_theme();
                    ?>
                    <form method="post" action="<?php echo esc_attr( $current_action_link ); ?>" class="demo-import-boxed copy-settings-form">
                        <p>
                           <strong> <?php printf( esc_html__(  'You\'re using %1$s theme, It\'s a child theme', 'oneline-lite' ) ,  $child_theme->Name ); ?></strong>
                        </p>
                        <p><?php printf( esc_html__(  'Child theme uses it’s own theme setting name, would you like to copy setting data from parent theme to this child theme?', 'oneline-lite' ) ); ?></p>
                        <p>

                        <?php

                        $select = '<select name="copy_from">';
                        $select .= '<option value="">'.esc_html__( 'From Theme', 'oneline-lite' ).'</option>';
                        $select .= '<option value="onelinelite">OnelineLite</option>';
                        $select .= '<option value="'.esc_attr( $child_theme->get_stylesheet() ).'">'.( $child_theme->Name ).'</option>';
                        $select .='</select>';

                        $select_2 = '<select name="copy_to">';
                        $select_2 .= '<option value="">'.esc_html__( 'To Theme', 'oneline-lite' ).'</option>';
                        $select_2 .= '<option value="onelinelite">OnelineLite</option>';
                        $select_2 .= '<option value="'.esc_attr( $child_theme->get_stylesheet() ).'">'.( $child_theme->Name ).'</option>';
                        $select_2 .='</select>';

                        echo $select . ' to '. $select_2;

                        ?>
                        <input type="submit" class="button button-secondary" value="<?php esc_attr_e( 'Copy now', 'oneline-lite' ); ?>">
                        </p>
                        <?php if ( isset( $_GET['copied'] ) && $_GET['copied'] == 1 ) { ?>
                            <p><?php esc_html_e( 'Your settings copied.', 'oneline-lite' ); ?></p>
                        <?php } ?>
                    </form>

                <?php } ?>
      
                    <?php if ( isset($actions['recommend_plugins']) && $actions['recommend_plugins'] == 'active' ) {  ?>
                        <div id="plugin-filter" class="recommend-plugins action-required">
                        <h3><?php esc_html_e( 'Recommend Plugins', 'oneline-lite' ); ?></h3>
                            <?php oneline_lite_plugin_api(); ?>
                        </div>
                    <?php } ?>                            
            </div>
        <?php } ?>

        <?php if ( $tab == 'theme-pro' ) { ?>

            <?php oneline_lite_pro_theme(); ?>

        <?php } ?>

    </div> <!-- END .theme_info -->
    <?php

}

 function oneline_lite_plugin_api() {
        include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
                        network_admin_url( 'plugin-install.php' );


        $recommend_plugins = get_theme_support( 'recommend-plugins' );
    if ( is_array( $recommend_plugins ) && isset( $recommend_plugins[0] ) ){

        foreach($recommend_plugins[0] as $slug=>$plugin){
            
            $plugin_info = plugins_api( 'plugin_information', array(
                    'slug' => $slug,
                    'fields' => array(
                        'downloaded'        => false,
                        'rating'            => false,
                        'description'       => true,
                        'short_description' => false,
                        'donate_link'       => false,
                        'tags'              => false,
                        'sections'          => true,
                        'homepage'          => true,
                        'added'             => false,
                        'last_updated'      => false,
                        'compatibility'     => false,
                        'tested'            => false,
                        'requires'          => false,
                        'downloadlink'      => false,
                        'icons'             => true,
                    )
                ) );
                //foreach($plugin_info as $plugin_info){
                    $plugin_name = $plugin_info->name;
                    $plugin_slug = $plugin_info->slug;
                    $version = $plugin_info->version;
                    $author = $plugin_info->author;
                    $download_link = $plugin_info->download_link;
                    $icons = (isset($plugin_info->icons['1x']))?$plugin_info->icons['1x']:$plugin_info->icons['default'];
            

            $status = is_dir( WP_PLUGIN_DIR . '/' . $plugin_slug );
            $active_file_name = $plugin_slug . '/' . $plugin_slug . '.php';
            $button_class = 'install-now button';

            if ( ! is_plugin_active( $active_file_name ) ) {
                $button_txt = esc_html__( 'Install Now', 'oneline-lite' );
                if ( ! $status ) {
                    $install_url = wp_nonce_url(
                        add_query_arg(
                            array(
                                'action' => 'install-plugin',
                                'plugin' => $plugin_slug
                            ),
                            network_admin_url( 'update.php' )
                        ),
                        'install-plugin_'.$plugin_slug
                    );

                } else {
                    $install_url = add_query_arg(array(
                        'action' => 'activate',
                        'plugin' => rawurlencode( $active_file_name ),
                        'plugin_status' => 'all',
                        'paged' => '1',
                        '_wpnonce' => wp_create_nonce('activate-plugin_' . $active_file_name ),
                    ), network_admin_url('plugins.php'));
                    $button_class = 'activate-now button-primary';
                    $button_txt = esc_html__( 'Active Now', 'oneline-lite' );
                }


                    $detail_link = add_query_arg(
                    array(
                        'tab' => 'plugin-information',
                        'plugin' => $plugin_slug,
                        'TB_iframe' => 'true',
                        'width' => '772',
                        'height' => '349',

                    ),
                    network_admin_url( 'plugin-install.php' )
                );
				$detail = '';
                echo '<div class="rcp">';
                echo '<h4 class="rcp-name">';
                echo esc_html( $plugin_name );
                echo '</h4>';
                echo '<img src="'.$icons.'" />';
				if($plugin_slug=='lead-form-builder'){
		$detail='Lead form builder is a contact form as well as lead generator plugin. This plugin will allow you create
unlimited contact forms and to generate unlimited leads on your site.';
} elseif($plugin_slug=='themehunk-customizer'){
		$detail= 'ThemeHunk customizer – 
ThemeHunk customizer plugin will allow you to add  unlimited number of columns for services, Testimonial, and Team with widget support. It will add slider section, Ribbon section, latest post, Contact us and Woocommerce section. These will be visible on front page of your site.';

} elseif($plugin_slug=='woocommerce'){
$detail='WooCommerce is a free eCommerce plugin that allows you to sell anything, beautifully. Built to integrate seamlessly with WordPress, WooCommerce is the eCommerce solution that gives both store owners and developers complete control.';
}
			echo '<p class="rcp-detail">'.$detail.' </p>';

                echo '<p class="action-btn plugin-card-'.esc_attr( $plugin_slug ).'">
                        <span>Version:'.$version.'</span>
                        '.$author.'
                <a href="'.esc_url( $install_url ).'" data-slug="'.esc_attr( $plugin_slug ).'" class="'.esc_attr( $button_class ).'">'.$button_txt.'</a>
                </p>';
                echo '<a class="plugin-detail thickbox open-plugin-details-modal" href="'.esc_url( $detail_link ).'">'.esc_html__( 'Details', 'oneline-lite' ).'</a>';
                echo '</div>';


            }

        }
    }
}


function oneline_lite_get_actions_required( ) {

    $actions = array();

    $recommend_plugins = get_theme_support( 'recommend-plugins' );
    if ( is_array( $recommend_plugins ) && isset( $recommend_plugins[0] ) ){
        $recommend_plugins = $recommend_plugins[0];
    } else {
        $recommend_plugins[] = array();
    }

    if ( ! empty( $recommend_plugins ) ) {

        foreach ( $recommend_plugins as $plugin_slug => $plugin_info ) {
            $plugin_info = wp_parse_args( $plugin_info, array(
                'name' => '',
                'active_filename' => '',
            ) );
            if ( $plugin_info['active_filename'] ) {
                $active_file_name = $plugin_info['active_filename'] ;
            } else {
                $active_file_name = $plugin_slug . '/' . $plugin_slug . '.php';
            }
            if ( ! is_plugin_active( $active_file_name ) ) {
                $actions['recommend_plugins'] = 'active';
            }
        }

    }

    $actions = apply_filters( 'oneline_lite_get_actions_required', $actions );

    $return = array(
        'actions' => $actions,
        'number_actions' => count( $actions ),
    );

    return $return;
}