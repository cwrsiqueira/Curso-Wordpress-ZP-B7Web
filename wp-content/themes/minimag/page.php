<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 main_content">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <?php 
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('medium', [
                                    'class' => 'post_thumb_single'
                                ]);
                            }
                        ?>
                        <div class="post_title_single"><?php the_title(); ?></div>
                        <div class="post_excerpt"><?php the_content(); ?></div>

                    <?php endwhile; ?>
                    <div style="clear: both;"></div>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
