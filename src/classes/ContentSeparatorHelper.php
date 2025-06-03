<?php

namespace classes;

class ContentSeparatorHelper
{
    /**
     * function for the content_separator and maybe for the basic_separator
     *
     * @param $matrix
     * @param $class
     * @param $mobile
     * @param $tablet
     * @param $desktop
     * @param $separator
     *
     * @return string
     */
    public function getSeparatorDifference($matrix, $class, $mobile, $tablet, $desktop, $separator) : string
    {
        $html = '';

        if ( $matrix == 'basic_separator' ) {
            $tag = 'section';
            $container = ' class="container"';
        } else {
            $tag = 'div';
            $container = '';
        }

        $c = ($class) ? ' ' . $class : '';
        $m = ($mobile != '') ? ' value-mobile="' . $mobile . '"' : ' value-mobile="30"';
        $t = ($tablet != '') ? ' value-tablet="' . $tablet . '"' : ' value-tablet="50"';

        switch (true) {
            case $separator && $desktop != '' :
                $html .= '
                    <' . $tag . ' class="' . $matrix . $c . '" style="margin: ' . $desktop . 'px 0px;"' . $m . $t . ' data-aos="fade-up" data-aos-duration="1000">
                        <div' . $container . '>
                            <hr>
                        </div>
                    </' . $tag . '>';
                break;
            case $separator :
                $html .= '
                    <' . $tag . ' class="' . $matrix . $c . '" style="margin: 50px 0px"' . $m . $t . ' data-aos="fade-up" data-aos-duration="1000">
                        <div' . $container . '>
                            <hr>
                        </div>
                    </' . $tag . '>';
                break;
            case $desktop != '' :
                $html .= '
                    <' . $tag . ' class="' . $matrix . $c . '" style="margin: ' . $desktop . 'px 0px;"' . $m . $t . ' data-aos="fade-up" data-aos-duration="1000"></' . $tag . '>';
                break;
            default :
                $html .= '
                    <' . $tag . ' class="' . $matrix . $c . '" style="margin:  50px 0px; "' . $m . $t . ' data-aos="fade-up" data-aos-duration="1000"></' . $tag . '>';
        }

        return $html;
    }
}