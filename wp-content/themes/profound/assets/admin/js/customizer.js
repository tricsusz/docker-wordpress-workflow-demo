/**
 * Live Preview Script
 * @todo in future updates
 */
(function($){

    wp.customize('profound[color_site_title]', function (value) {
        value.bind(function (newval) {
            $('#wrapper .site-title a').css('color', newval);
        });
    });
    wp.customize('profound[color_site_desc]', function (value) {
        value.bind(function (newval) {
            $('#wrapper .site-description').css('color', newval);
        });
    });
    wp.customize('profound[color_p_title]', function (value) {
        value.bind(function (newval) {
            $('#wrapper .post-title h1').css('color', newval);
        });
    });
    wp.customize('profound[color_p_meta]', function (value) {
        value.bind(function (newval) {
            $('#wrapper .post-meta').css('color', newval);
        });
    });
    wp.customize('profound[color_p_content]', function (value) {
        value.bind(function (newval) {
            $('#wrapper .post-content').css('color', newval);
        });
    });
    wp.customize('profound[color_p_link]', function (value) {
        value.bind(function (newval) {
            $('.post-template #wrapper .post-content a:link, #wrapper .comment-body a:link').css('color', newval);
        });
    });
    wp.customize('profound[color_p_link_v]', function (value) {
        value.bind(function (newval) {
            $('.post-template #wrapper .post-content a:visited, #wrapper .comment-body a:visited').css('color', newval);
        });
    });
    wp.customize('profound[color_p_link_h]', function (value) {
        value.bind(function (newval) {
            $('.post-template #wrapper .post-content a:hover, #wrapper .comment-body a:hover').css('color', newval);
        });
    });
    wp.customize('profound[color_blog_p_title]', function (value) {
        value.bind(function (newval) {
            $('#wrapper .loop-post-title h1 a').css('color', newval);
        });
    });
    wp.customize('profound[color_blog_p_meta]', function (value) {
        value.bind(function (newval) {
            $('#wrapper .loop-post-meta, #wrapper .loop-post-meta .loop-meta-comments a').css('color', newval);
        });
    });
    wp.customize('profound[color_blog_p_content]', function (value) {
        value.bind(function (newval) {
            $('#wrapper .loop-post-excerpt p').css('color', newval);
        });
    });
    wp.customize('profound[color_bg_blog_style_date]', function (value) {
        value.bind(function (newval) {
            $('#wrapper .loop-stylish-date .loop-stylish-date-month').css('backgroundColor', newval);
        });
    });

})(jQuery);