<?php
if(!empty($page->file_video)) :
    $background = ( $page->image ) ? ' style="background-image: url(\'' . $page->image->url .'\')"' : '';
    ?>
    <div class="video-box position-relative">
        <div class="position-absolute top-50 start-50 z-1 d-flex justify-content-center align-items-center h-100 w-100 video-button"<?php echo $background; ?>>
            <img class="play-icon" src="<?php echo $config->urls->templates; ?>/fields/matrix_content/content_video/images/play-button.png" alt="Video Play">
        </div>
        <video class="w-100 video-container" controls>
            <source src="<?php echo $page->file_video->url; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
<?php endif;