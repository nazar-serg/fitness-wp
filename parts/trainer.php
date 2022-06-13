<?php $post_id = $args; ?>
<div class="trainer">
    <div class="container">
        <div class="trainer__title">
            <h2><?php the_field('trainer_title', $post_id); ?></h2>
        </div>
        <div class="trainer__inner">
            <?php $trainer_list = get_field('trainer_list'); ?>
            <?php foreach($trainer_list as $trainer_id): ?>
                <div class="trainer__wrapper">
                    <div class="trainer__img">
                        <img src="<?php echo get_the_post_thumbnail_url($trainer_id, 'medium'); ?>" alt="">
                    </div>
                    <div class="trainer__content wow animate__fadeInRight">
                        <div class="trainer__content-name">
                            <h3><?php echo get_the_title($trainer_id); ?></h3>
                        </div>
                        <div class="trainer__content-text">
                            <p><?php the_field('trainer_text', $trainer_id); ?></p>
                        </div>
                        <div class="trainer__content-job">
                            <p><?php the_field('trainer_job', $trainer_id); ?></p>
                        </div>
                        <div class="trainer__content-social">
                            <div class="trainer__content-social-fb">
                                <?php if (get_field('trainer_facebook', $trainer_id)): ?>
                                    <a href="<?php the_field('trainer_facebook', $trainer_id); ?>">
                                        <i class='bx bxl-facebook-circle'></i>
                                    </a>
                                <?php endif ?>
                            </div>
                            <div class="trainer__content-social-in">
                                <?php if (get_field('trainer_instagram', $trainer_id)): ?>
                                    <a href="<?php the_field('trainer_instagram', $trainer_id); ?>">
                                        <i class='bx bxl-instagram' ></i>
                                    </a>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="trainer__content-btn">
                            <a class="trainer__content-btn-link link-border-bottom" href="#">
                                Отримати програму
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

