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
                <div class="banner__column-left-text">
                    <div class="banner__column-left-text-above-title">
                        <?php the_field('banner_textup'); ?>
                    </div>
                    <div class="banner__column-left-title">
                        <h1><?php the_field('banner_title'); ?></h1>
                    </div>
                </div>
                <div class="banner__column-left-btn">
                    <a class="banner__column-left-btn-link" href="<?php the_field('banner_link'); ?>">
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
                        <a class="banner__column-right-top-btn-link btn-transparent" href="<?php the_field('banner_right_btn_link'); ?>">
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
    get_template_part('parts/program', '', $post->ID);
endwhile;   
?>
<?php get_footer(); ?>
