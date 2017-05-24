<?php  if( shortcode_exists( 'themehunk-customizer-oneline-lite' ) ) {  ?>
<div id="slider-div">
    <div id="page-top" class="slider">  
        <div class="flexslider">
            <ul class="slides">
                <!-- #1 Slider -->
                <?php if (get_theme_mod('first_slider_image','') != '') { ?>
                <li data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background:url('<?php echo esc_url(get_theme_mod('first_slider_image')); ?>');">
                    <div class="over-lay">
                        <div class="fs-caption wow fadeInDown" data-wow-delay="1s">
                            <div class="caption-container" data-center="opacity: 1" data-106-top="opacity: 0"data-anchor-target="#slider-div h2">
                                <h2 class="title overtext"><a href="<?php echo esc_url(get_theme_mod('first_slider_link','#')); ?>"><?php echo esc_html(get_theme_mod('first_slider_heading')); ?></a></h2>
                            <?php if (get_theme_mod('first_button_text','') != '') { ?>
                                <div class="slider-button">
                                    <a href="<?php echo esc_url(get_theme_mod('first_button_link','#')); ?>" class="theme-slider-button"><?php echo esc_html(get_theme_mod('first_button_text', __('GET IT NOW','oneline-lite'))); ?></a>
                                </div>
                             <?php } ?>   
                            </div>
                        </div>
                    </div>
                </li>
                <?php }else{
                    echo do_shortcode("[themehunk-customizer-oneline-lite did='4']");
                 } ?>
                <!-- #2 Slider -->
                  <?php if (get_theme_mod('second_slider_image','') != '') { ?>
                <li data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;"  style="background:url('<?php echo esc_url(get_theme_mod('second_slider_image')); ?>');">
                    <div class="over-lay">
                        <div class="fs-caption wow fadeInDown" data-wow-delay="1s">
                            <div class="caption-container" data-center="opacity: 1" data-106-top="opacity: 0"data-anchor-target="#slider-div h2">
                                <h2 class="title overtext"><a href="<?php echo esc_url(get_theme_mod('second_slider_link','#')); ?>"><?php echo esc_html(get_theme_mod('second_slider_heading')); ?></a></h2>
                               <?php if(get_theme_mod('second_button_text', '')!=''){ ?>
                                <div class="slider-button">
                                    <a href="<?php echo esc_url(get_theme_mod('second_button_link','#')); ?>" class="theme-slider-button"><?php echo esc_html(get_theme_mod('second_button_text', __('GET IT NOW','oneline-lite'))); ?></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </li>
                <?php } ?>

                 <!-- #3 Slider -->
                  <?php if (get_theme_mod('third_slider_image','') != '') { ?>
                <li data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;"  style="background:url('<?php echo esc_url(get_theme_mod('third_slider_image')); ?>');">
                    <div class="over-lay">
                        <div class="fs-caption wow fadeInDown" data-wow-delay="1s">
                            <div class="caption-container" data-center="opacity: 1" data-106-top="opacity: 0"data-anchor-target="#slider-div h2">
                                <h2 class="title overtext"><a href="<?php echo esc_url(get_theme_mod('third_slider_link','#')); ?>"><?php echo esc_html(get_theme_mod('third_slider_heading')); ?></a></h2>
                               <?php if(get_theme_mod('third_button_text', '')!=''){ ?>
                                <div class="slider-button">
                                    <a href="<?php echo esc_url(get_theme_mod('third_button_link','#')); ?>" class="theme-slider-button"><?php echo esc_html(get_theme_mod('third_button_text', __('GET IT NOW','oneline-lite'))); ?></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php } ?>