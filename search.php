<?php get_header(); ?>
<div class="container">

    <?php

    while( have_posts() ):
        the_post();
        get_template_part( 'parts/content', 'search' );
    endwhile;

    ?>
</div>
<?php get_footer(); ?>