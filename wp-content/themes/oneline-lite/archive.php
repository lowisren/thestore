<?php
/**
* The template for displaying archive pages
* If you'd like to further customize these archive views, you may create a
*
* @package ThemeHunk
* @subpackage Oneline Lite
* @since Oneline Lite 1.0
*/
?>
<?php get_header(); ?>
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
			<div class="archive-title">
				<?php
				the_archive_title('<h1>','</h1>');
				?>
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
<div class="svg-page-bottom-container">
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
<path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
</svg>
</div>
<div id="page" class="clearfix right">
<div class="content-wrapper">
<!-- Content Start -->
<div class="content">
<div class="blog-content">
	<?php if (have_posts()) : ?>
	<div id="main">
		<ul class="load_post standard-layout">
			<?php get_template_part('loop', 'blog'); ?>
		</ul>
	</div>
	<?php
	else :
	get_template_part( 'content', 'none' );
	endif;
	?>
</div>
</div>
</div>
<div class="sidebar-wrapper">
<?php get_sidebar(); ?>
</div>
</div><!-- Content End -->
<?php get_footer(); ?>