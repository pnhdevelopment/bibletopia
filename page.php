<?php get_header(); ?>


<main class="container">
	<div id="posts" class="row">

		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 mb-4">

			<!-- <div class="posts-list"> -->
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- <div class="post d-inline-block mb-4"> -->
					
					<!-- Title -->
					<h1><?php the_title(); ?></h1>
					
					<hr />

					<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), "medium" ); ?>

					<?php if($image_data[0]): ?>
						<!-- Thumbnail -->
						<div class="img-wrapper" style="padding-bottom: calc(<?php echo $image_data[2]/$image_data[1]*100 . '%'; ?>)">
							<img
								src="<?php echo $image_data[0]; ?>"
								title="<?php echo the_post_thumbnail_caption(); ?>"
								alt="<?php echo the_post_thumbnail_caption(); ?>"
							>
						</div>
					<?php endif; ?>
							
					<!-- Excerpt -->
					<p><?php //the_excerpt(); ?></p>
					<?php the_content(); ?>

					<?php echo comment_form(); ?>


					<!-- <a class="continue-reading" href="<?php the_permalink(); ?>">
						Continue reading...
					</a> -->

				<!-- </div> -->

			<?php endwhile; endif; ?>
			<!-- </div> -->


		</div>
		

		<!-- Sidebar -->
		<div id="sidebar" class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<?php if ( is_active_sidebar( 'primary' ) ) : dynamic_sidebar( 'primary' ); endif; ?>
		</div>

	</div>
</main>


<?php get_footer(); ?>