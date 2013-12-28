(function($) {
    // Class toggle meant for showing and hiding content
    $('.view').click(function() {
    // Uncomment the following line to limit one show at a time.
    //    $('.view.show').removeClass('show');
        $(this).toggleClass('show');
        return false;
    });
})(jQuery);