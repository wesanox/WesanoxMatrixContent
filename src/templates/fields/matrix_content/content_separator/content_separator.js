$(document).ready(function() {
    let css_class = '.content_separator';
    getValues(css_class);

    $(window).resize(function() {
        getValues(css_class);
    });
});