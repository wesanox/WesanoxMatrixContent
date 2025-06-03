<?php
namespace ProcessWire;

include_once $this->config->paths->site . 'modules/BytitMatrixHelper/src/classes/MatrixHelperClass.php';

/**
 *
 *
 * @var string $matrix_helper Represents the MatrixHelperClass
 */

$matrix_helper = new MatrixHelperClass();

$matrix_helper->renderMatrix($field, $page->matrix_content,  $templates->path, 'div');