<?php 

/*
Template Name: Contact Page
*/

 ?>
<?php get_header(); ?>
<section class="contact-page">
    <div class="contact-page__banner banner-page">
        <div class="contact-page__content-banner banner-page__content">
            <div class="container">
                <div class="contact-page__text-banner banner-page__text wow animate__fadeInUp" data-wow-delay=".5s">
                    <div class="contact-page__sub-title-banner banner-page__sub-title">
                        <?php the_field( 'contact_textup' ); ?>
                    </div>
                    <div class="contact-page__title-banner banner-page__title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-page__our-contacts">
        <div class="container">
            <div class="contact-page__our-contacts-wrapper">
                <div class="contact-page__our-contacts-email">test@gmail.com</div>
            </div>
        </div>
       
    </section>
    <section class="contact-page__contact">
        <div class="container">
            <div class="contact-page__form-title">
                <?php the_field( 'contact_form_title' ); ?>
            </div>
            <div class="contact-page__form">
                <?php echo do_shortcode( '[contact-form-7 id="269" title="Contact Form Page Contact"]' ); ?>
            </div>
        </div>
    </section>
</section>
<?php get_footer(); ?>