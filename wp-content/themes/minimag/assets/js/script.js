document.querySelector('.main_footer_scroll').addEventListener('click', function () {
    window.scrollTo({top: 0, behavior: 'smooth'});
});

window.morePostsLoading = false;
function loadMorePosts() {
    
    if(!window.norePostsLoading) {
        window.norePostsLoading = true;

        jQuery('.loadmorebutton').hide();
        offset = jQuery('.postscontents article').length;
        jQuery.ajax({
            type:"post",
            url:ajaxUrl,
            data:{action:'LoadMorePosts', offset},
            success:function(html){
                jQuery('.loadmorebutton').show()
                if(html != ''){
                    jQuery('.postscontents').append(html)
                } else {
                    jQuery('.loadmorebutton').hide()
                }

                window.norePostsLoading = false;
            }
        })
    }

}

jQuery(function(){

    jQuery('.loadmorebutton').on('click', loadMorePosts)

    jQuery(window).on('scroll', function(){
        var porcent = (window.scrollY / document.body.scrollHeight) * 100;
        console.log(porcent)
        if(porcent >= 50) {
            loadMorePosts();
        }
    })


})