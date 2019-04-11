<?php get_header(); ?>

<section id="not-found" class="container">
	<div class="row">

		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
			<h1>404 - Page not found</h1>
			<p>The well-armed monkeys normally operating this Web page are engaged in full-scale warfare at the moment.</p>
			<p>To avoid the flying fur, try one of the escape routes suggested <a onclick="window.history.back()">here</a>.</p>
		</div>
		
		<!-- Sidebar -->
		<div id="sidebar" class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<?php if ( is_active_sidebar( 'primary' ) ) : dynamic_sidebar( 'primary' ); endif; ?>
		</div>

	</div>
</section>


<?php get_footer(); ?>