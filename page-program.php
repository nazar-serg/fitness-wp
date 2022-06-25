<?php
/*
Template Name: Page All Programs
*/
?>
<?php $post_id = $args; ?>
<?php get_header(); ?>
<section class="all-programs">
    <div class="all-programs__banner banner-page">
        <div class="all-programs__content-banner banner-page__content">
            <div class="container">
                <div class="all-programs__text-banner banner-page__text wow animate__fadeInUp" data-wow-delay=".5s">
                    <div class="all-programs__sub-title-banner banner-page__sub-title">
                        <?php the_field( 'all-programs_banner_text_up' ); ?>
                    </div>
                    <div class="all-programs__title-banner banner-page__title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="all-programs__banner-btn">
                        <?php
                        $link = get_field('all-programs_banner_btn');
                        if ( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                        ?>
                        <a class="all-programs__banner-btn-link link-border-bottom" href="<?php echo esc_url( $link_url); ?>">
                            <?php echo esc_html($link_title); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="all-programs__list-programs">
        <div class="container">
        <?php
							$args = array(
								'post_type' => 'post',
                                'posts_per_page' => 4,
								'category_in' => array( 14 ),
							);

							$programs = new WP_Query( $args );
                            
                            echo '<div class="all-programs__row">';
							if( $programs->have_posts() ):
								while( $programs->have_posts() ): $programs->the_post();	
							?>
                            <div class="all-programs__column wow animate__fadeInUp">
                                <a class="all-programs__column-link" href="<?php the_permalink(); ?>">
							        <h3><?php the_title(); ?></h3>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                            </div>

							<?php
							    endwhile;
									wp_reset_postdata();
							endif;
                            echo '</div>';
						?>
        </div>
    </section>
    <section class="about-us-page__contact-form">
        <?php $about_page_id = get_page( '72' ); ?>
        <?php get_template_part( 'parts/content', 'contact', $about_page_id ); ?>
    </section>
</section>
<?php get_footer(); ?>