<?php
/*
Template Name: Topics
*/
?>

<?php get_header(); ?>

<main class="container">
	<div id="posts" class="row">

		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 mb-4">
 												
			<!-- Title -->
			<h1><?php the_title(); ?></h1>
			<hr />



<div id="container">
	<div id="content" role="main">

	<?php
	// get all the categories from the database
	$cats = get_categories(); 

		// loop through the categries
		foreach ($cats as $cat) {
			// setup the cateogory ID
			$cat_id= $cat->term_id;
			// Make a header for the cateogry
			echo "<h2>".$cat->name."</h2>";
			// create a custom wordpress query
			query_posts("cat=$cat_id&posts_per_page=100");
			// start the wordpress loop!
			if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php // create our link now that the post is setup ?>
				<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
				<?php echo '<hr/>'; ?>

			<?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
		<?php } // done the foreach statement ?>

	</div><!-- #content -->
</div><!-- #container -->





		</div>
		

		<!-- Sidebar -->
		<div id="sidebar" class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<?php if ( is_active_sidebar( 'primary' ) ) : dynamic_sidebar( 'primary' ); endif; ?>
		</div>

	</div>
</main>


<?php get_footer(); ?>