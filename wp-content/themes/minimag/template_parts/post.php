<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="post_item">
            <div class="post_coment_area">
                <?php comments_number('0', '1', '%'); ?>
            </div>
            <div class="post_info">
                <?php 
                    if(get_post_format() == "video") {
                        $content = apply_filters("the_content", get_the_content());
                        $video = get_media_embedded_in_content(
                            $content,
                            ["iframe", "embed", "object", "video"]
                        );
                        if($video) {
                            echo "<div class='post_media'>".$video[0]."</div>";
                        }
                    } elseif(get_post_format() == "audio") {
                        $content = apply_filters("the_content", get_the_content());
                        $audio = get_media_embedded_in_content(
                            $content,
                            ["iframe", "audio"]
                        );
                        if($audio) {
                            echo "<div class='post_media'>".$audio[0]."</div>";
                        }
                    } elseif(has_post_thumbnail()) {
                        the_post_thumbnail('medium', [
                            'class' => 'post_thumb'
                        ]);
                    }
                ?>
                <div class="post_date"><?php echo get_the_date('d M Y H:i') ?></div>
                <div class="post_title"><?php the_title(); ?></div>
                <div class="post_excerpt"><?php the_excerpt(); ?></div>
            </div>
        </div>
    </a>
</article>