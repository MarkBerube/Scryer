<?php

namespace AppBundle\Utils;

/**
 * Uses Parsedown to create a service that returns Markdown as HTML
 */
class Markdown
{
    /**
     * @var Parsedown
     */
    private $parser;

    public function __construct()
    {
        $this->parser = new \Parsedown();
    }

    /**
     * Returns Markdown as HTML
     * @param $text Markdown text input
     * @return string|null returns HTML of Markdown input
     */
    public function toHtml($text)
    {
        $html = $this->parser->text($text);

        return $html;
    }
}