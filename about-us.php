<?php
/*
Template Name: About Us Page
*/
?>
<?php $post_id = $args; ?>
<?php get_header(); ?>
<section class="about-us-page">
    <div class="about-us-page__banner banner-page">
        <div class="about-us-page__content-banner banner-page__content">
            <div class="container">
                <div class="about-us-page__text-banner banner-page__text wow animate__fadeInUp" data-wow-delay=".5s">
                    <div class="about-us-page__sub-title-banner banner-page__sub-title">
                        <?php the_field( 'about_us_sub_text' ); ?>
                    </div>
                    <div class="about-us-page__title-banner banner-page__title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-us-page__about">
        <?php $front_page_id = get_option( 'page_on_front' ); ?>
        <?php get_template_part( 'parts/content', 'about', $front_page_id ); ?>
    </section>

    <section class="about-us-page__popular-programs">
        <div class="about-us-page__popular-programs-top">
            <div class="about-us-page__popular-programs-top-wrapper">
                <div class="about-us-page__popular-programs-top-column about-us-page__popular-programs-top-column--title wow animate__fadeInUp" data-wow-delay=".5s"">
                    <div class="about-us-page__popular-programs-top-title">
                        <?php the_field( 'popular_programs_title' ); ?>
                    </div>
                </div>
                <div class="about-us-page__popular-programs-top-column about-us-page__popular-programs-top-column--text wow animate__fadeInUp" data-wow-delay=".5s"">
                    <div class="about-us-page__popular-programs-top-text">
                        <?php the_field( 'popular_programs_text' ); ?>
                    </div>
                </div>
                <div class="about-us-page__popular-programs-top-column about-us-page__popular-programs-top-column--img">
                    <div class="about-us-page__popular-programs-top-img">
                    <?php 
                    $image = get_field( 'popular_programs_img_1' );
                    $size = 'full';
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-page__popular-programs-bottom">
            <div class="about-us-page__popular-programs-bottom-wrapper">
                <div class="about-us-page__popular-programs-bottom-column">
                    <div class="about-us-page__popular-programs-bottom-img">
                    <?php 
                    $image = get_field( 'popular_programs_img_2' );
                    $size = 'full';
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                    </div>
                </div>
                <div class="about-us-page__popular-programs-bottom-column">
                    <div class="about-us-page__popular-programs-bottom-list-programs">
                        <div class="about-us-page__popular-programs-bottom-list-programs-title">
                            <?php the_field( 'popular_programs_list_all_title' ); ?>
                        </div>
                        <?php
                        $this_category = get_category($cat='14');
                        $parent_term_id =$this_category->cat_ID;

                        $taxonomies = array( 
                        'taxonomy' => 'category'
                        );

                        $args = array(
                        'child_of' => $parent_term_id
                        ); 

                        $terms = get_terms($taxonomies, $args);
                        if (sizeof($terms)>0) {
                            foreach ( $terms as $term ) {
                            echo '<div class="about-us-page__popular-programs-bottom-list-programs-name">';
                            echo '<a href="' . esc_url( get_category_link( $term->term_id ) ) . '">'.$term->name;
                            echo '</div>';
                            }
                        }
                        ?> 
                    </div>
                </div>
                <div class="about-us-page__popular-programs-bottom-column">
                    <div class="about-us-page__popular-programs-bottom-btn">
                        <?php
                        $link = get_field('popular_programs_btn');
                        if ( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                        ?>
                        <a class="btn-green" href="<?php echo esc_url( $link_url); ?>">
                            <?php echo esc_html($link_title); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-page__contact-form">
        <?php
        get_template_part( 'parts/content', 'contact');
        ?>
    </section>
</section>
<?php get_footer(); ?>