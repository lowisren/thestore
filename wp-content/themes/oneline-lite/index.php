<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
*/
get_header(); ?>
<div class="page-title">
    <div class="svg-bottom-container">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
</div>
<div data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="demo-image">
    <div class="overlay-demo"></div>
    <div class="full-fs-caption">
        <div class="caption-container">
        <h2 class="title overtext"><?php _e('Blog','oneline-lite')?></h2>
        </div>
    </div>
</div>
<div class="svg-top-container">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <g transform="translate(0,-952.36218)"><path d="m 0,1052.3622 100,0 0,-2 L 952.36218,100 z"></path></g>
</svg>
</div>
</div>
<div class="svg-index-bottom-container">
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
<path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
</svg>
</div>
<div id="page" class="clearfix right">
<div class="content-wrapper">
<div class="content">
<div class="blog-content">
    <ul class="load_post standard-layout">
        <?php get_template_part('loop', 'blog'); ?>
        <div class="clear"></div>
    </ul>
</div>
</div>
</div>
<div class="sidebar-wrapper">
<?php get_sidebar(); ?>
</div>
</div> <!--page class end -->
<div class="clear"></div>
<?php get_footer(); ?>