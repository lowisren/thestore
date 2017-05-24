<?php
/**
* The template for displaying all single posts and attachments
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
<div data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="demo-image" style="background-image:url('<?php echo esc_url(oneline_lite_page_thumb()); ?>')">
  <div class="overlay-demo"></div>
  <div class="full-fs-caption">
    <div class="caption-container">
     <h2 class="title overtext"> <?php the_title(); ?></h2>
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
<div class="single-post-content">
  <div class="single-post">
    <?php if (have_posts()) : while (have_posts()) : the_post();
    get_template_part('content');
        the_tags();
    ?>
    
    <?php echo oneline_lite_get_related_sigle_post();
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
    comments_template();
    }
    endwhile; endif;
    ?>
  </div>
</div>
</div>
</div>
<!--- sidebar -->
<div class="sidebar-wrapper">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>