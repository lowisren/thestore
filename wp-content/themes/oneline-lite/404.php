<?php
/**
* The template for displaying 404 pages (Not Found)
*
* @package ThemeHunk
* @subpackage Oneline Lite
* @since Oneline Lite 1.0
*/
get_header();
?>
<div class="page-title page_404">
	<div class="svg-bottom-container">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
		<path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
	</svg>
</div>
<div class="demo-image">
	<div class="overlay-demo"></div>
	<div class="full-fs-caption">
		<div class="caption-container">
			<div class="archive-title">
				<h2 class="title overtext"><?php _e( '404 Not Found !', 'oneline-lite' ); ?></h2>
			</div>
		</div>
	</div>
</div>
<div class="svg-top-container">
	<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
	<g transform="translate(0,-952.36218)"><path d="m 0,1052.3622 100,0 0,-2 L 952.36218,100 z"></path></g>
</svg>
</div>
</div>
<div class="svg-404-bottom-container">
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
<path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
</svg>
</div>
<div id="page" class="clearfix right">
<div class="content-wrapper">
<!-- Content Start -->
<div class="content">
<div class="blog-content">
	<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'oneline-lite' ); ?></p>
	<?php get_search_form(); ?>
</div>
</div>
</div>
<div class="sidebar-wrapper">
<?php get_sidebar(); ?>
</div>
</div><!-- Content End -->
<?php get_footer(); ?>