<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="blog-banner">
    <div class="blog-banner__content">
        <div class="container">
            <div class="blog-banner__text wow animate__fadeInUp" data-wow-delay=".5s">
                <div class="blog-banner__sub-title">
                    Корисні статті
                </div>
                <div class="blog-banner__title">
                    <h1>Блог</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-area">
    <div class="container">
       <div class="content-area__row">
        <div class="content-area__column-left">
                <aside class="content-area__sidebar">
                    <?php get_sidebar( 'blog' ); ?>
                </aside>
            </div>
            <div class="content-area__column-right">
                <div class="content-area__column-right-row">
                    <?php 

                    if( have_posts() ):

                        while( have_posts() ): the_post();

                            get_template_part( 'parts/content', 'all-articles' );

                        endwhile;
                    else: 
                    ?>

                        <p>There's nothing yet to be displayed!</p>

                    <?php endif; ?>
                </div>
            </div>
       </div>
    </div>
</div>

<?php get_footer(); ?>