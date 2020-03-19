(function($){
    $(document).ready(function (e) {
        $('#customize-controls .preview-notice').append('<a class="profound-pro-link" href="http://www.mudthemes.com/showcase/profound-theme" title="Upgrade to Premium" target="_blank">Upgrade to Premium</a>');
        $('.profound-pro-link').click(function (e) {
            e.stopPropagation();
        });
    });
})(jQuery);