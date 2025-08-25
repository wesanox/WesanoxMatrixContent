$(document).ready(function() {
    let css_class = '.content_separator';
    getValues(css_class);

    $(window).resize(function() {
        getValues(css_class);
    });
});

function getValues(css_class) {
    $(css_class).each(function() {
        if ($(window).width() < 550 && $(this).attr('value-mobile') != undefined) {
            $(this).css('margin', $(this).attr('value-mobile') + 'px 0');
        }

        if ($(window).width() < 1025 && $(window).width() > 550 && $(this).attr('value-tablet') != undefined) {
            $(this).css('margin', $(this).attr('value-tablet') + 'px 0');
        }
    });
}