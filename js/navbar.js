/*$('#nav').affix({
    offset: {
        top: $('header').height()
    }
});*/

$('[data-toggle-secondary]').each(function() {
    var $toggle = $(this);
    var originalText = $toggle.text();
    var secondaryText = $toggle.data('toggle-secondary');
    var $target = $($toggle.attr('href'));

    $target.on('show.bs.collapse hide.bs.collapse', function() {
        if ($toggle.text() == originalText) {
            $toggle.text(secondaryText);
        } else {
            $toggle.text(originalText);
        }
    });
});
