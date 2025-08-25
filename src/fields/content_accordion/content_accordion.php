<div class="accordion" id="accordion-<?php echo $page->id; ?>">
    <?php foreach ( $page->repeater_accordion AS $key => $accordion ) : ?>
        <?php
        $collapsed = ($key == 0) ? ' collapse show' : ' collapsed collapse';
        $collapsed_button = ($key != 0) ? ' collapsed' : '';
        $expanded = ($key == 0) ? 'true' : 'false';
        ?>
        <div class="accordion-item">
            <div class="accordion-header">
                <button class="accordion-button<?php echo $collapsed_button; ?> bg-red rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $accordion->id; ?>" aria-expanded="<?php echo $expanded; ?>" aria-controls="collapse-<?php echo $accordion->id; ?>">
                    <?php echo $accordion->headline; ?>
                </button>
            </div>
            <div id="collapse-<?php echo $accordion->id; ?>" class="accordion-collapse<?php echo $collapsed; ?>" data-bs-parent="#accordion-<?php echo $page->id; ?>">
                <div class="accordion-body">
                    <?php echo $accordion->text; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
