<?php 
    if(post_password_required()) {
        return;
    }

    if(have_comments()){
        foreach($comments as $comment){
            ?>
            <div class="comentario">
                <div class="comentario_foto">
                    <?php echo get_avatar($comment, 60); ?>
                </div>
                <div class="comentario_area">
                    <strong><?php comment_author(); ?></strong>
                    -
                    <?php comment_date('d/m/Y H:i'); ?>
                    <br>
                    <?php comment_text(); ?>
                </div>
            </div>
            <?php
        }

        the_comments_pagination();
    }

    comment_form([
        'comment_field' => "Comentário: <br><textarea name='comment'></textarea><br>",
        'fields' => [
            'author' => __('Nome', 'primeirotema').'*: <input type="text" name="author" placeholder="'.__("Digite seu nome", "primeirotema").'"><br>',
            'email' =>  __('Email', 'primeirotema').'*: <input type="email" name="email" placeholder="'.__("Digite seu email", "primeirotema").'"><br>',
            'url' =>  __('Site', 'primeirotema').': <input type="url" name="url" placeholder="'.__("Digite seu site", "primeirotema").'"><br>',
        ],
        'class_submit' => 'btn_submit',
        'label_submit' => __('Envie seu comentário', 'primeirotema'),
        'title_reply' => __('Deixe um comentário, primeirotema'),
    ]);

?>

