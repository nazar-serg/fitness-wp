<?php $post_id = $args; ?>
<div class="faq">
    <div class="container">
        <div class="faq__row">
            <div class="faq__column">
                <div class="faq__title">
                    <h2><?php the_field('faq_title', $post_id); ?></h2>
                </div>
                <div class="faq__text">
                    <p><?php the_field('faq_text', $post_id); ?></p>
                </div>
                <div class="faq__btn">
                    <?php
                    $link = get_field('faq_btn');
                    if ( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                    <a class="faq__btn-link link-border-bottom" href="<?php echo esc_url( $link_url); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="faq__column">
                <?php $faq_count = get_field('faq_count', $post_id); ?>
                <?php $counter = 1; ?>
                <?php while( $counter <= $faq_count ): ?>
                    <div class="faq__cart wow animate__fadeInUp">
                        <button class="faq__accordion">
                                <?php the_field( 'faq_question_' . $counter,  $post_id ); ?>
                        </button>
                        <div class="faq__panel">
                            <?php the_field( 'faq_answer_' . $counter,  $post_id ); ?>
                        </div>
                    </div>
                    <?php $counter++; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>