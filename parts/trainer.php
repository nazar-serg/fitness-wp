<?php $post_id = $args; ?>
<div class="container">
    <h2><?php the_field('trainer_title', $post_id); ?></h2>
    <?php $trainer_list = get_field('trainer_list'); ?>
    <?php foreach($trainer_list as $trainer_id): ?>
        <h3><?php echo get_the_title($trainer_id); ?></h3>
        <p><?php the_field('trainer_job', $trainer_id); ?></p>
        <?php if (get_field('trainer_facebook', $trainer_id)): ?>
            <a href="#">Facebook</a>
        <?php endif ?>

        <?php if (get_field('trainer_instagram', $trainer_id)): ?>
            <a href="#">Instagram</a>
        <?php endif ?>
    <?php endforeach; ?>
</div>

