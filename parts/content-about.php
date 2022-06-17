<?php $post_id = $args; ?>
<div class="about">
    <div class="container">
        <div class="about__row">
            <div class="about__column">
                <div class="about__title">
                    <h2><?php the_field('about_title', $post_id); ?></h2>
                </div>
                <div class="about__text">
                    <?php the_field('about_text', $post_id); ?>
                </div>
            </div>
            <div class="about__column">
                <div class="about__img">
                <?php 
                    $image = get_field('about_img', $post_id);
                    $size = 'full';
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                </div>
                <div class="about__btn">
                    <a class="about__btn-link link-border-bottom" href="<?php the_field('about_link', $post_id); ?>">
                        <?php the_field('about_btn', $post_id); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
