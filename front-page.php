<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<div class="banner">
    <div class="banner__row">
        <div class="banner__column-left">
            <div class="banner__column-left-content">
                <div class="banner__column-left-text wow animate__fadeInUp" data-wow-delay=".5s">
                    <div class="banner__column-left-text-above-title">
                        <?php the_field('banner_textup'); ?>
                    </div>
                    <div class="banner__column-left-title">
                        <h1><?php the_field('banner_title'); ?></h1>
                    </div>
                </div>
                <div class="banner__column-left-btn">
                    <a class="banner__column-left-btn-link link-border-bottom" href="<?php the_field('banner_link'); ?>">
                        <?php the_field('banner_btn'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="banner__column-right">
            <div class="banner__column-right-content">
                <div class="banner__column-right-top">
                    <div class="banner__column-right-top-text">
                        <?php the_field('banner_right_text'); ?>
                    </div>
                    <div class="banner__column-right-top-btn">
                        <a class="banner__column-right-top-btn-link btn-transparent modal-toggle" href="<?php the_field('banner_right_btn_link'); ?>">
                            <?php the_field('banner_right_btn'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
while( have_posts() ): the_post();
    get_template_part('parts/about', '', $post->ID);
    get_template_part('parts/trainer', '', $post->ID);
    get_template_part('parts/program', '', $post->ID);
endwhile;   
?>
<div class="video-home">
   <div class="container">
       <div class="video-home__wrapper">
            <a class="video-home__link" href="<?php the_field('video_link'); ?>" data-fancybox="gallery">
                <div class="video-home__video-play">
                    <i class='bx bx-play-circle bx-flip-vertical' style='color:#ffffff' ></i>
                </div>
                <div class="video-home__img">
                    <?php 
                    $image = get_field('video_img');
                    $size = 'full';
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                </div>
            </a>
       </div>
   </div>
</div>
<?php get_template_part('parts/faq', '', $post->ID); ?>
<?php get_footer(); ?>
