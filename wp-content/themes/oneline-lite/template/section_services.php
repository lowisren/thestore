<?php 
 if( shortcode_exists( 'themehunk-customizer-oneline-lite' ) ) {
$heading = get_theme_mod('our_services_heading','');
$subheading = get_theme_mod('our_services_subheading','');
?>
<div class="service-wrapper">
<?php echo  oneline_lite_svg_enable(); ?>
<section id="services" class="svg_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" >
    <div class="container">
        <div class="page-services">
        <?php if($heading!=''){ ?>
            <h2 class="main-heading wow fadeInRight" data-wow-delay="0s"><?php echo esc_html($heading); ?></h2>
            <?php } else { ?>
            <h2 class="main-heading wow fadeInRight" data-wow-delay="0s"><?php 
                    echo do_shortcode("[themehunk-customizer-oneline-lite did='111']"); ?></h2>
            <?php } ?>
            <?php if($subheading!=''){ ?>
            <p class="sub-heading wow fadeInRight" data-wow-delay="0s"><?php echo esc_html($subheading); ?></p>
            <?php } else { ?>
            <p class="sub-heading wow fadeInRight" data-wow-delay="0s"><?php echo do_shortcode("[themehunk-customizer-oneline-lite did='6']"); ?> </p>
        <?php } ?>
            <div class="service-block">
                <ul class="service-grid wow fadeInLeft" data-wow-delay="0s">
         <?php
            if ( is_active_sidebar( 'multi-service-widget' ) ){
                    dynamic_sidebar( 'multi-service-widget' );
                 } else {
                    echo do_shortcode("[themehunk-customizer-oneline-lite did='1']");
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
</div>
<div class="clearfix"></div>
<?php } ?>