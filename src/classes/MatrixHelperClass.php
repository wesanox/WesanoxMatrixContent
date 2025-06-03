<?php

namespace ProcessWire;

use ProcessWire\RepeaterMatrixPageArray;

class MatrixHelperClass
{
    /**
     * Renders a matrix field with its styles, scripts, and corresponding HTML tags.
     *
     * @param object $field The field object containing the matrix field's information.
     * @param RepeaterMatrixPageArray $matrix An array representing the matrix items to be rendered.
     * @param string $matrix_dir The directory path for the matrix field assets.
     * @param string $tags The HTML tag wrapper for the matrix items.
     *
     * @return void
     */
    public function renderMatrix(object $field, RepeaterMatrixPageArray $matrix, string $matrix_dir, string $tags) : void
    {
        $files_dir  = $matrix_dir . 'fields/' . $field->name . '/';

        foreach ($matrix as $item) {
            $files_path     = wire()->config->urls->templates . 'fields/' . $field->name . '/';

            $this->getMatrixStyles($files_dir, $files_path, $item->type);
            $this->getMatrixScripts($files_dir, $files_path, $item->type);

            echo '<' . $tags . ' class="' . $item->type . '" data-aos="fade-up" data-aos-duration="1000">' .  $item->render() . '</' . $tags . '>';
        }
    }

    /**
     * Add matrix styles to the configuration.
     *
     * @param string $files_dir The directory path where the style files are located.
     * @param string $files_path The public path to the style files.
     * @param string $type_name The specific type name used to locate the style file.
     *
     * @return void
     */
    private function getMatrixStyles(string $files_dir, string $files_path, string $type_name) : void
    {
        if (file_exists($files_dir . $type_name . '/' . $type_name . '.scss')) {
            wire()->config->styles->add($files_path . $type_name . '/' . $type_name . '.scss');
        }
    }

    /**
     * Add matrix scripts to the configuration if the specified script file exists.
     *
     * @param string $files_dir Directory path where the script files are located.
     * @param string $files_path Base web-accessible path to the script files.
     * @param string $type_name Name of the type used to locate the script file.
     *
     * @return void
     */
    private function getMatrixScripts(string $files_dir, string $files_path, string $type_name) : void
    {
        if (file_exists($files_dir . $type_name . '/' . $type_name . '.js')) {
            wire()->config->scripts->add($files_path . $type_name . '/' . $type_name . '.js');
        }
    }
}