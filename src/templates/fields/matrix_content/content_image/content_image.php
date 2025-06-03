<?php if ($page->image) :
    $desc = ($page->image->description) ? $page->image->description : $page->getForPageRoot()->title;
    ?>
    <div class="d-flex justify-content-center">
        <picture>
            <?php if ($page->select_image_size->id === 1) : ?>
                <?php if ($page->image_mobile) : ?>
                    <source media="(max-width: 767px)" srcset="<?php echo $page->image_mobile->url; ?>">
                <?php endif; ?>

                <img class="img-fluid" src="<?php echo $page->image->url; ?>" alt="<?php echo $desc; ?>">
            <?php elseif($page->select_image_size->id === 2) : ?>
                <source media="(min-width: 991px)" srcset="<?php echo $page->image->getCrop("desktop")->url; ?>">
                <source media="(min-width: 768px)" srcset="<?php echo $page->image->getCrop("tablet")->url; ?>">
                <source media="(max-width: 767px)" srcset="<?php echo $page->image->getCrop("mobile")->url; ?>">

                <img class="img-fluid" src="<?php echo $page->image->getCrop("desktop")->url; ?>" alt="<?php echo $desc; ?>">
            <?php elseif($page->select_image_size->id === 3) : ?>
                <img class="img-fluid" src="<?php echo $page->image->getCrop("quadratisch")->url; ?>" alt="<?php echo $desc; ?>">
            <?php elseif($page->image_mobile) : ?>
                <source media="(max-width: 767px)" srcset="<?php echo $page->image_mobile->url; ?>">

                <img class="img-fluid" src="<?php echo $page->image->getCrop("desktop")->url; ?>" alt="<?php echo $desc; ?>">
            <?php else : ?>
                <source media="(min-width: 991px)" srcset="<?php echo $page->image->getCrop("desktop")->url; ?>">
                <source media="(min-width: 768px)" srcset="<?php echo $page->image->getCrop("tablet")->url; ?>">
                <source media="(max-width: 767px)" srcset="<?php echo $page->image->getCrop("mobile")->url; ?>">

                <img class="img-fluid" src="<?php echo $page->image->getCrop("desktop")->url; ?>" alt="<?php echo $desc; ?>">
            <?php endif; ?>
        </picture>
    </div>
<?php endif;