<main class="container">
	<div id="posts" class="row">

		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

			<div class="posts-list mb-4">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post d-inline-block mb-4">
					
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

					<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), "medium" ); ?>

					<?php if($image_data[0]): ?>
						<!-- Thumbnail -->
						<a href="<?php the_permalink(); ?>">
							<div class="img-wrapper" style="padding-bottom: calc(<?php echo $image_data[2]/$image_data[1]*100 . '%'; ?>)">
								<img
									data-src="<?php echo $image_data[0]; ?>"
									title="<?php echo the_post_thumbnail_caption(); ?>"
									alt="<?php echo the_post_thumbnail_caption(); ?>"
								>
							</div>
						</a>
					<?php endif; ?>
							
					<!-- Excerpt -->
					<p><?php the_excerpt(); ?></p>

					<a class="continue-reading" href="<?php the_permalink(); ?>">
						Continue reading...
					</a>

				</div>

			<?php endwhile; ?>
			</div>


			<!-- Pagination -->
			<div class="pagination-wrapper w-100 my-3">
				<?php the_posts_pagination(); ?>
			</div>

			<?php else: ?>
				<div>
					<h1>No results found.</h1>
					<p>Please search again.</p>
				</div>
			<?php endif; ?>	

		</div>
		

		<!-- Sidebar -->
		<div id="sidebar" class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<?php if ( is_active_sidebar( 'primary' ) ) : dynamic_sidebar( 'primary' ); endif; ?>
		</div>

	</div>
</main>