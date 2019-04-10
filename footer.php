<footer class="container py-4">
	<div class="row">
		<div class="col-12 col-lg-3 text-center">
			<a href="<?php echo get_site_url(); ?>">
				<img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo.svg'; ?>">
			</a>
		</div>
		<div class="col-12 col-lg-3">
			<?php if ( is_active_sidebar( 'footer_widget_1' ) ) : dynamic_sidebar( 'footer_widget_1' ); endif; ?>
		</div>
		<div class="col-12 col-lg-3">
			<?php if ( is_active_sidebar( 'footer_widget_2' ) ) : dynamic_sidebar( 'footer_widget_2' ); endif; ?>
		</div>
		<div class="col-12 col-lg-3">
			<?php if ( is_active_sidebar( 'footer_widget_3' ) ) : dynamic_sidebar( 'footer_widget_3' ); endif; ?>
		</div>
	</div>
</footer>

<nav id="footerNav" class="container navbar navbar-expand-lg mb-3">
	<div class="">
		<?php
			wp_nav_menu(array(
			  'menu' 		   => 'main-menu',
			  'container'      => 'ul',
			  'menu_class'     => 'navbar-nav'
			));
		?>
    </div>
</nav>

<?php wp_footer(); ?>

</body>
</html>