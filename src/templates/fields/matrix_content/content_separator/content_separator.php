<?php
namespace fields;

use classes\ContentSeparatorHelper;

include_once $this->config->paths->site . 'modules/BytitMatrixHelper/src/classes/ContentSeparatorHelper.php';

$content_separator_helper = new ContentSeparatorHelper;

echo $content_separator_helper->getSeparatorDifference($page->matrix('type'), $page->text_class, $page->text_difference_mobile, $page->text_difference_tablet, $page->text_difference_desktop, $page->checkbox_separator);