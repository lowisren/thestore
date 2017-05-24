<?php
 /**
 * Enable support for Post Thumbnails on posts and pages.
 *
 */
if ( ! function_exists( 'oneline_lite_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function oneline_lite_the_custom_logo() {
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
}
endif;


/*
 * Custom header menu
*/

add_action( 'after_setup_theme', 'oneline_lite_register_theme_menu' );
function oneline_lite_register_theme_menu() {
  register_nav_menus( 
    array(
        'home-menu'     => __( 'Front Menu', 'oneline-lite' ),
        'frontpage-menu' => __( 'Main Menu', 'oneline-lite' ),
    ) );
}
    function oneline_lite_nav_menu(){
        wp_nav_menu( array('theme_location' => 'home-menu', 
        'container' => false, 
            'menu_class' => 'menu', 
            'menu_id'         => 'menu',
            'fallback_cb'     => 'oneline_lite_wp_page_menu'));
    }

    function oneline_lite_front_nav_menu(){
        wp_nav_menu( array('theme_location' => 'frontpage-menu', 
        'container' => false, 
            'menu_class' => 'menu', 
            'menu_id'         => 'menu',
            'fallback_cb'     => 'oneline_lite_wp_page_menu'));
    }

 function oneline_lite_wp_page_menu(){
    echo '<ul class="menu" id="menu">';
    wp_list_pages(array('title_li' => ''));
    echo '</ul>';
}

/**
 * Display navigation to next/previous post when applicable.
 *
 * @since ThemeHunk 1.0
 */

if ( ! function_exists( 'oneline_lite_post_nav' ) ) :
function oneline_lite_post_nav() {
    // Don't print empty markup if there's nowhere to navigate.
    ?>

    <nav class="navigation post-navigation" role="navigation">
        <div class="nav-links">
           <?php
              the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( '%title', 'oneline-lite' ) . '</span> ' ,
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '%title', 'oneline-lite' )));
                //%title
            ?>
        </div><!-- .nav-links -->
    </nav><!-- .navigation -->
    <?php
}
endif;

/**
 * excerpt
 */
function oneline_lite_get_th_custom_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 80);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$return =  '<p>'.$excerpt.'</p><span class="read-more"><a href="'.esc_url(get_permalink()).'" >'.__("Read More","oneline-lite").'</a></span>';
return $return;
}

// related post
  function oneline_lite_get_related_sigle_post() {
     global $post;
     $args = array(
               'category__in' => wp_get_post_categories($post->ID),
               'post__not_in' => array($post->ID),
                'post_status' => array('publish'),                         
                'meta_key' => '_thumbnail_id',
                'posts_per_page' => 3,
            );
      $my_query = new WP_Query($args);
        if ($my_query->have_posts()) { ?>
            <h3 class='related-heading';><?php _e('You may also like this','oneline-lite'); ?></h3>
            <?php
            while ($my_query->have_posts()) : $my_query->the_post();
                ?>
               <li class="sl-related-thumbnail">
                    <div class="sl-related-thumbnail-size">
                        <?php
                       if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('oneline-releted-post-thumb',array('class' => "postimg listing-thumbnail")); ?></a>
                            <?php } ?>
                        </div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </li>
                <?php
            endwhile;
        }
    wp_reset_postdata(); // to use the original query again
}


function oneline_lite_get_my_url() {
    if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) ){
        return false;
    }
    return esc_url_raw( $matches[1] );
}

//pagination

function oneline_lite_pagination() {
     the_posts_pagination( array(
    'mid_size' => 2
) ); 
}


/*Number of comment*/
function oneline_lite_comment_number(){ 
 comments_popup_link(__('No Comment','oneline-lite'), __('1 Comment','oneline-lite'), __('% Comments','oneline-lite')); 
 }

function oneline_lite_svg_enable(){
    $return = '<div class="svg-top-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="0" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 2 L0 100 Z" stroke-width="0"></path>
      </svg>
</div>';
return $return;
 }

function oneline_lite_postformate($default = 'standerd'){
                $find = ($default=='')?'standerd':$default;
 $formate = array('standerd'=>'fa fa-paper-plane-o', 'gallery'=>'fa fa-picture-o' , 'video' =>'fa fa-video-camera' , 'audio'=>'fa fa-music' , 'link' =>'fa fa-link','quote' => 'fa fa-quote-left' );

 return $formate[$find]; 
    
}

function oneline_lite_page_thumb(){
return wp_get_attachment_url(get_post_thumbnail_id());
}

function oneline_lite_header(){
    $bg  ='';
    if(get_header_image()!=''){
   $bg ="background-image:url(".esc_url(get_header_image()).");";
    }else{
    $bg ="background-color:#".esc_attr(get_header_textcolor()).";";
    }
      $custom_css = ".demo-image{ {$bg} }";

                return $custom_css;
}
?>