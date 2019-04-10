<?php get_header(); ?>

<section class="container">
	<div id="posts" class="row">

		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
			<!-- <div class="row"> -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- <div class="col-lg-6 col-xs-12 mb-4"> -->
					
					<!-- Title -->
					<a href="<?php the_permalink(); ?>">
						<h1><?php the_title(); ?></h1>
					</a>
					
					<!-- Date -->
					<small class="mr-2">
						<svg class="icon mb-1">
							<use xlink:href="<?php echo get_template_directory_uri() . '/assets/sprite.svg#calendar'; ?>"></use>
						</svg>
						<span>
							<?php the_time('F jS, Y'); ?>
						</span>
					</small>
					
					<!-- Author -->
					<small class="mr-2">
						<svg class="icon mb-1">
							<use xlink:href="<?php echo get_template_directory_uri() . '/assets/sprite.svg#profile'; ?>"></use>
						</svg>
						By <?php the_author(); ?>
					</small><br>
					
					<!-- Categories -->
					<small class="categories">
						<em>Categories:</em> <?php the_category(', '); ?>
					</small>

					<hr />

					<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), "large" ); ?>

					<?php if($image_data[0]): ?>
						<!-- Thumbnail -->
						<div style="max-width: 550px; margin: auto">
							<div class="img-wrapper" style="padding-bottom: calc(<?php echo $image_data[2]/$image_data[1]*100 . '%'; ?>)">
								<img
									data-src="<?php echo $image_data[0]; ?>"
									title="<?php echo the_post_thumbnail_caption(); ?>"
									alt="<?php echo the_post_thumbnail_caption(); ?>"
								>
							</div>
						</div>
					<?php endif; ?>
					
							
					<!-- Excerpt -->
					<p><?php the_content(); ?></p>


				<!-- </div> -->
				<?php endwhile; ?>
				
				<?php else: ?>
					<div>
						<h1>No results found.</h1>
						<p>Please search again.</p>
					</div>
				<?php endif; ?>
			<!-- </div> -->
		</div>
		
		<!-- Sidebar -->
		<div id="sidebar" class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<?php if ( is_active_sidebar( 'primary' ) ) : dynamic_sidebar( 'primary' ); endif; ?>
		</div>

	</div>
</section>


<?php get_footer(); ?>