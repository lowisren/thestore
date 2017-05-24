<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fortunato
 */
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info smallPart">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'fortunato' ) ); ?>">
			<?php
			/* translators: %s: WordPress name */
			printf( esc_html__( 'Proudly powered by %s', 'fortunato' ), 'WordPress' );
			?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: theme name, 2: theme developer */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'fortunato' ), '<a target="_blank" href="https://crestaproject.com/downloads/fortunato/" rel="nofollow" title="Fortunato Theme">Fortunato</a>', 'CrestaProject' );
			?>
		</div><!-- .site-info -->
		<?php $showSocialFooter = get_theme_mod('fortunato_theme_options_socialfooter', ''); ?>
		<?php if($showSocialFooter == 1) : ?>
		<div class="site-social-footer smallPart">
			<div class="socialLine">
				<?php fortunato_social_buttons(); ?>
			</div>
		</div>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->
<a href="#top" id="toTop"><i class="fa fa-angle-up fa-lg"></i></a>
<?php if (is_active_sidebar( 'sidebar-1' ) ) : ?>	
	<div class="openSidebar">
	  <div id="hamburger">
		<span></span>
		<span></span>
		<span></span>
	  </div>
	  <div id="cross">
		<span></span>
		<span></span>
	  </div>
	</div>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
