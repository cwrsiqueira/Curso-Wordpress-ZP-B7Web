<div class="post_related_item">
    <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>" class="post_thumbnail">
            <?php the_post_thumbnail('thumbnail', [
                'class' => 'post_miniatura'
            ]) ?>
        </a>
    <?php endif; ?>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <p>
        <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?> | 
        <a href="<?php the_permalink(); ?>">Leia mais...</a>
    </p>
</div>