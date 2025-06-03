<?php

namespace classes;

class ContentLinkHelper
{
    protected string $link;
    protected string $link_text;
    protected string $link_title;
    protected string $target;
    protected string $btn_style;

    public function __construct($page)
    {
        $this->link = $this->getLink($page);
        $this->link_text = $this->getLinkText($page);
        $this->link_title = $this->getLinkTitle($page);
        $this->target = $this->getLinkTarget($page);
        $this->btn_style = $this->getLinkStyle($page);
    }

    /**
     *
     */
    public function renderLink() : string
    {
        return '<a' . $this->btn_style . ' href="' . $this->link . '" aria-label="' . $this->link_title . '" title="' . $this->link_title . '"' . $this->target . '>' . $this->link_text . '</a>';
    }

    /**
     * @param $page
     * @return string
     */
    private function getLink($page) : string
    {
        return ($page->link_intern->id !== 0) ? $page->link_intern->url : (($page->link_extern) ? $page->link_extern : '');
    }

    /**
     * @param $page
     * @return string
     */
    private function getLinkText($page) : string
    {
        switch ( true )
        {
            case $page->link_text:
                $link_text = $page->link_text;
                break;
            case $page->link_intern->id !== 0:
                $link_text = $page->link_intern->title;
                break;
            default:
                $link_text = 'mehr erfahren';
                break;
        }

        return $link_text;
    }

    /**
     * @param $page
     * @return string
     */
    private function getLinkTitle($page) : string
    {
        if ( $page->link_text || $page->link_intern ) {
            $link_title = $page->link_aria ?: $page->link_text;
        } else {
            $link_title = $page->link_aria ?: $this->title;
        }

        return $link_title;
    }

    /**
     * @param $page
     * @return string
     */
    private function getLinkTarget($page) : string
    {
        return ($page->link_new_tab) ? ' target="_blank"' : '';
    }

    /**
     * @param $page
     * @return string
     */
    private function getLinkStyle($page) : string
    {
        switch ($page->select_button_style) {
            case "1" :
                $btn_style = ' class="btn btn-primary"';
                break;
            case "2" :
                $btn_style = ' class="btn btn-secondary"';
                break;
            case "3" :
                $btn_style = ' class="btn btn-link"';
                break;
            default:
                $btn_style = '';
        }

        return $btn_style;
    }
}