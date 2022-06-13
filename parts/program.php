<?php $post_id = $args; ?>
<section class="popular-programs">
    <div class="container">
        <div class="popular-programs__title">
            <h2><?php the_field('program_title'); ?></h2>
        </div>
        <div class="popular-programs__text">
            <?php the_field('program_text'); ?>
        </div>
        <div class="popular-programs__btn">
            <a class="popular-programs__btn-link link-border-bottom" href="<?php the_field('program_btn_link'); ?>">
                <?php the_field('program_btn_text'); ?>
            </a>
        </div>
        <div class="popular-programs__row">
            <div class="popular-programs__column popular-programs--bg-green wow animate__fadeInLeft" data-wow-delay=".5s">
                <?php
                $program_1 = get_field('program_1');
                if ( $program_1 ): ?>
                <div class="popular-programs__column-title">
                    <?php echo $program_1['title']; ?>
                </div>
                <div class="popular-programs__column-text">
                    <?php echo $program_1['text']; ?>
                </div>
                <?php endif; ?>
                </div>
                <div class="popular-programs__column popular-programs--bg-silver">
                    <?php
                    $program_2 = get_field('program_2');
                    if ( $program_2 ): ?>
                        <div class="popular-programs__column-title">
                            <?php echo $program_2['title']; ?>
                        </div>
                        <div class="popular-programs__column-text">
                            <?php echo $program_2['text']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="popular-programs__column wow animate__fadeInRight" data-wow-delay=".5s">
                    <?php
                    $program_3 = get_field('program_3');
                    if ( $program_3 ): ?>
                        <div class="popular-programs__column-title">
                            <?php echo $program_3['title']; ?>
                        </div>
                        <div class="popular-programs__column-text">
                            <?php echo $program_3['text']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

