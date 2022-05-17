<?php get_header(); ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>
        <!-- Page Header -->
        <header class="masthead" style="background-image: url('<?php 
            if(has_post_thumbnail()) {
                echo get_the_post_thumbnail_url($post->ID, 'full');
            }
        ?>')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1><?php the_title(); ?></h1>
                            <?php if(function_exists('the_subtitle')): ?>
                            <h2 class="subheading"><?php do_action('plugins/wp_subtitle/the_subtitle'); ?></h2>
                            <?php endif; ?>
                            <span class="meta"><?php echo __('Posted by', 'segundotema'); ?>
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                                <?php echo __('on', 'segundotema') . ' ' . get_the_date(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </article>

        <!-- <div class="clearfix">
            <div class="btn float-left"><?php previous_post_link('&larr; Anterior'); ?></div>
            <div class="btn float-right"><?php next_post_link('Próximo &rarr;'); ?></div>
        </div> -->

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>