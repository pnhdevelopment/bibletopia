<form role="search" method="get" class="search-form w-100" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input
			type="search"
			class="form-control"
			placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>"
			value="<?php echo get_search_query(); ?>"
			name="s"
		/>
		<span class="input-group-btn">
			<button class="btn" type="submit"></button>
		</span>
	</div>
</form>



