<footer>
    <div class="footer_widgets">
        <div class="row">
            <?php 
                if(is_active_sidebar('gm_sidebar_rodape')) {
                    dynamic_sidebar('gm_sidebar_rodape');
                }
            ?>
        </div>
    </div>
    <div class="main_footer">
        <div class="main_footer_scroll">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-up.png" alt="seta up">
        </div>
        <div class="main_footer_left">Todos os direitos reservados. <?php if(get_theme_mod("gm_privacy")): ?> - <a href="<?php the_permalink(get_theme_mod("gm_privacy")); ?>">Política de Privacidade</a> <?php endif; ?> </div>
        <div class="main_footer_right">Criado por <a href="htts://globalsitepro.com" target="_blank">Global Site Pro</a></div>
        
    </div>
</footer>
<script>
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>"
</script>
<?php wp_footer(); ?>
</body>
</html>