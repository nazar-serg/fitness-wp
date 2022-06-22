<?php $post_id = $args; ?>
<div class="contact-form-page">
    <div class="contact-form-page__wrapper">
        <div class="container">
            <div class="contact-form-page__back-title wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-delay=".5s">
            <?php the_field( 'contact_back_text', $post_id ); ?>
            </div>
            </div>
            <div class="contact-form-page__title wow animate__fadeInLeft" data-wow-delay=".8s">
                <?php the_field( 'contact_about_title', $post_id ); ?>
            </div>
            <div class="contact-form-page__form">
                <?php echo do_shortcode( '[contact-form-7 id="255" title="Contact Form Page About"]' ); ?>
            </div>
        </div>
    </div>
</div>