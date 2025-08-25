$(document).ready(function() {
    // play btn
    $('.video-box').each(function() {
        let videoBox = $(this);
        let video = videoBox.find('video');

        $(this).on('click', function () {
            video.on('play', function() {
                // Pause alle anderen Videos
                $('.video-box video').not(this).each(function() {
                    this.pause();
                });
            });

            if($('video', this)[0].paused) {
                $('.video-button', this).addClass('d-none');
                $('video', this).trigger('play');
            } else {
                $('.video-button', this).removeClass('d-none');
                $('video', this).trigger('pause');
            }
        });
    });
});