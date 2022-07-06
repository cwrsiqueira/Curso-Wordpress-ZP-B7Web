<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div id="post-<?php the_ID(); ?>" <?php post_class("col-sm-8 main_content") ?>>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <div class="post_title_single"><?php the_title(); ?></div>
                        <!-- <div class="post_date"><?php echo get_the_date('d M Y H:i') ?></div> -->
                        <div style="height: 20px;"></div>
                        <div class="post_excerpt"><?php the_content(); ?></div>

                    <?php endwhile; ?>
                    <div style="clear: both;"></div>
                    <hr>
                    <div class="paginacao">
                        <div class="pagina_anterior"><?php previous_post_link(); ?></div>
                        <div class="proxima_pagina"><?php next_post_link(); ?></div>
                    </div>
                    <hr>
                    <div class="comments_area">
                        <?php
                            if (comments_open()) {
                                comments_template();
                            }
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
