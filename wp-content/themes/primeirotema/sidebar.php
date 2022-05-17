<sidebar>
    <?php 
        if(is_active_sidebar('gp_sidebar')) {
            get_search_form();
            dynamic_sidebar('gp_sidebar');
        }
    ?>
</sidebar>