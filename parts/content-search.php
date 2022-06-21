<article class="blog-article search__your-result wow animate__fadeInUp">
	<div class="blog-article__title">
		<a class="blog-article__title-link" href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</div>
	<div class="blog-article__meta-info">
		<div class="blog-article__author">
			<p><?php echo get_the_date(); ?>, <span>Автор:</span> <?php the_author_posts_link(); ?></p>
		</div>
		<div class="blog-article__category">
			<?php if( has_category() ): ?>
				<p><span>Категорія:</span> <?php the_category( ' ' ); ?></p>
			<?php endif; ?>
		</div>
		<div class="blog-article__tags">
			<p><?php the_tags( '<span>Мітки:</span> ', ', ' ); ?></p>	
		</div>	
	</div>
	<div class="blog-article__content">
		<?php the_excerpt( 'excerpt_length' ); ?>
	</div>
</article>