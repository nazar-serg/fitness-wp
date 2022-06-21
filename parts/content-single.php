<div class="post-blog">
    <div class="post-blog__banner">
    <?php the_post_thumbnail( 'large', array( 'class' => 'post-blog__img' ) ); ?>
        <div class="container">
            <div class="post-blog__title wow animate__fadeInUp" data-wow-delay=".5s">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="post-blog__content">
        <div class="container">
            <?php the_content(); ?>
                <div class="content-area__other-articles">
                    <div class="content-area__other-articles-left">
                        <?php next_post_link( '&laquo; %link' ); ?>
                    </div>

                    <div class="content-area__other-articles-right">
                        <?php previous_post_link( '%link &raquo;' ); ?>
                    </div>
		        </div>
            <?php
            if( comments_open() || get_comments_number() ):
                
                comments_template();
            endif;
            ?>
        </div>
    </div>
</div>