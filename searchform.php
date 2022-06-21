<div class="search__search-form">
	<form role="search" method="get" class="search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<input type="search" class="search__field" placeholder="<?php echo esc_attr_x( 'Пошук &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		</label>
		<button type="submit" class="search__submit"><span class="screen-reader-text"><?php echo _x( 'Знайти', 'submit button', 'twentysixteen' ); ?></span></button>
	</form>
</div>
