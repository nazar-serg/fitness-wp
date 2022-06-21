<?php get_header(); ?>
<div class="container">
    <div class="search">
    <div class="search__you-looking-for">Результат пошуку для: <span><?php echo get_search_query(); ?></span></div>
        <?php
        if( have_posts() ){
            get_search_form();
            while( have_posts() ){
                the_post();
                get_template_part( 'parts/content', 'search' );
            }
        } else {
            echo '<div class="search__not-posts">';
            echo 'Вибачте, інформація за вашим запитом відсутня';
            echo '</div>';
        }
        ?>

    </div>
</div>
<?php get_footer(); ?>