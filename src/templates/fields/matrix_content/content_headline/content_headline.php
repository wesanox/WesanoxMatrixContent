<?php
namespace fields;

use classes\ContentHeadlineHelper;

include_once $this->config->paths->site . 'modules/BytitMatrixHelper/src/classes/ContentHeadlineHelper.php';

$content_headline_helper = new ContentHeadlineHelper;

echo $content_headline_helper->getHeader($page->edit('headline'), $page->headline_tags, $page->headline_class, $page->headline_align);