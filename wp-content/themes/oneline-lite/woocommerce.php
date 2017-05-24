<?php
/**
* The template for displaying woocommerce pages
*
* @package ThemeHunk
* @subpackage Oneline Lite
* @since Oneline Lite 1.0
*/
get_header(); ?>
<div class="page-title">
    <div class="svg-bottom-container">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
    </svg>
</div>
<div data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="demo-image" class="demo-image">
    <div class="overlay-demo"></div>
    <div class="full-fs-caption">
        <div class="caption-container" data-center="opacity: 1" data-106-top="opacity: 0" data-anchor-target="h2">
            <h2 class="title overtext"><?php woocommerce_page_title(); ?></h2>
        </div>
    </div>
</div>
<div class="svg-top-container">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <g transform="translate(0,-952.36218)"><path d="m 0,1052.3622 100,0 0,-2 L 952.36218,100 z"></path></g>
</svg>
</div>
<?php echo oneline_lite_breadcrumb(); ?>
</div>
<div class="svg-page-bottom-container">
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
<path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
</svg>
</div>
<div id="page" class="clearfix right">
<div class="content-wrapper">
<div class="content">
<div class="page-content">
    <div class="page-description">
        <?php woocommerce_content(); ?>
    </div>
</div>
</div>
</div>
<div class="sidebar-wrapper">
<?php
if ( is_active_sidebar( 'th-woo-widget-area' ) ) :
dynamic_sidebar( 'th-woo-widget-area' );
endif;
?>
</div>
</div> <!--page class end -->
<div class="clear"></div>
<?php get_footer(); ?>