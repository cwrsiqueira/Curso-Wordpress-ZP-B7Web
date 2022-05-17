<div class="post-preview">
<a href="<?php the_permalink(); ?>">

    <h2 class="post-title">
    <?php the_title(); ?>
    </h2>
    
    <?php if(function_exists('the_subtitle')): ?>
    <h3 class="post-subtitle">
    <?php do_action('plugins/wp_subtitle/the_subtitle'); ?>
    </h3>
    <?php endif; ?>
</a>
<p class="post-meta"><?php echo __('Posted by', 'segundotema'); ?>
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    <?php echo __('on', 'segundotema') . ' ' . get_the_date(); ?></p>
</div>
<hr>