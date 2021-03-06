<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 main_content">
                <?php if(have_posts()): ?>
                    <div class="postscontents">
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>
                            <?php get_template_part('template_parts/post'); ?>
                        <?php endwhile; ?>
                    </div>
                    <div style="clear: both;"></div>
                    <hr>
                    <div class="paginacao">
                        
                        <div class="pagina_anterior"><?php previous_posts_link('Anterior'); ?></div>

                        <?php 
                            // global $wp_query;
                            // echo paginate_links([
                            //     'current' => max(1, get_query_var('paged')),
                            //     'total' => $wp_query->max_num_pages,
                            //     'show_all' => false,
                            //     'end_size' => 1,
                            //     'mid_size' => 1,
                            //     'prev_next' => true,
                            //     'prev_text' => '<',
                            //     'next_text' => '>',
                            //     'before_page_number' => '[ ',
                            //     'after_page_number' => ' ]',
                            // ]);
                        ?>

                        <div class="proxima_pagina"><?php next_posts_link('Próxima'); ?></div>

                        <!-- Ativar o Botão Carregar mais -->
                        <!-- <div class="loadmorebutton">Carregar mais...</div> -->
                    </div>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
