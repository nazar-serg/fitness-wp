<?php get_header(); ?>
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
        </div>
    </div>
</div>
<?php get_footer(); ?>