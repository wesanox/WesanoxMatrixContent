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

        <video controls width="100%" preload="none" class="position-absolute" aria-describedby="video-transkript-<?php echo $item->id ?>" tabindex="-1">
            <source src="<?php echo $item->file_video->url; ?>" type="video/mp4">
            <?php if ($item->file_video_subtitle) : ?>
                <track src="<?php echo $item->file_video_subtitle->url; ?>" kind="subtitles" srclang="de" label="Deutsch" default>
            <?php endif; ?>
            Ihr Browser unterstützt dieses Video-Element nicht.
        </video>
        <div id="video-transkript-<?php echo $item->id ?>" class="sr-only">
            <h2>Transkript des Videos</h2>
            <p><strong>Sprecher:</strong><?php echo $item->text_video_speaker; ?></p>
            <p><strong>Beschreibung:</strong> <?php echo $item->text_video_description; ?></p>
        </div>
        <div class="position-absolute end-0 top-0 w-100 h-100 video-button" style="background-image: url('<?php echo $item->image_story->url; ?>')">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle position-absolute end-50 top-50" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
            </svg>
        </div>
    </div>
<?php endif;