<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 main_content">

                <h1>Pesquisou por: <?php echo get_search_query(); ?></h1>

                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <?php get_template_part('template_parts/post'); ?>
                    <?php endwhile; ?>
                    <div style="clear: both;"></div>
                    <hr>
                    <div class="paginacao">
                        <div class="pagina_anterior"><?php previous_posts_link('Anterior'); ?></div>
                        <div class="proxima_pagina"><?php next_posts_link('Próxima'); ?></div>
                    </div>
                <?php else: ?>
                    Nenhum item encontrado
                    <hr>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
