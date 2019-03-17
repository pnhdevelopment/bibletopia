<footer class="container py-4">
	<div class="row">
		<div class="col-12 col-lg-3 text-center">
			<img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo.svg'; ?>">
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




<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/script.js'; ?>"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</body>
</html>