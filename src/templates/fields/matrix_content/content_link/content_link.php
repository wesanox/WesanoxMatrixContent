<?php
namespace fields;

use classes\ContentLinkHelper;

include_once $this->config->paths->site . 'modules/BytitMatrixHelper/src/classes/ContentLinkHelper.php';

$content_link_helper = new ContentLinkHelper($page);

echo $content_link_helper->renderLink();