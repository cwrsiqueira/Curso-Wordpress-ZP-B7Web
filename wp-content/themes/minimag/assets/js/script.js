document.querySelector('.main_footer_scroll').addEventListener('click', function () {
    window.scrollTo({top: 0, behavior: 'smooth'});
});

jQuery(function(){

    // jQuery(window).on('scroll', function(){
    //     if (jQuery(window).scrollTop() + jQuery(window).height() >= jQuery(document).height()) {
    //         jQuery('.loadmorebutton').show();
    //         offset = jQuery('.postscontents article').length;
    //         jQuery.ajax({
    //             type:"post",
    //             url:ajaxUrl,
    //             data:{action:'LoadMorePosts', offset},
    //             success:function(html){
    //                 if(html != ''){
    //                     jQuery('.postscontents').append(html)
    //                 }
    //                 jQuery('.loadmorebutton').hide()
    //             }
    //         })
    //     }
    // })

    jQuery('.loadmorebutton').on('click', function(){
        jQuery('.loadmorebutton').hide();
        offset = jQuery('.postscontents article').length;
        jQuery.ajax({
            type:"post",
            url:ajaxUrl,
            data:{action:'LoadMorePosts', offset},
            success:function(html){
                if(html != ''){
                    jQuery('.postscontents').append(html)
                    jQuery('.loadmorebutton').show()
                } else {
                    jQuery('.loadmorebutton').hide()
                }
            }
        })
    })
})