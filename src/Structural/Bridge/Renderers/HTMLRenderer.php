<?php

namespace Structural\Bridge\Renderers;

/**
 * This Concrete Implementation renders a web page as HTML.
 */
class HTMLRenderer implements Renderer
{
    /**
     * @param string $title
     * @return string
     */
    public function renderTitle(string $title): string
    {
        return "<h1>$title</h1>";
    }

    /**
     * @param string $text
     * @return string
     */
    public function renderTextBlock(string $text): string
    {
        return "<div class='text'>$text</div>";
    }

    /**
     * @param string $url
     * @return string
     */
    public function renderImage(string $url): string
    {
        return "<img src='$url'>";
    }

    /**
     * @param string $url
     * @param string $title
     * @return string
     */
    public function renderLink(string $url, string $title): string
    {
        return "<a href='$url'>$title</a>";
    }

    /**
     * @return string
     */
    public function renderHeader(): string
    {
        return "<html><body>";
    }

    /**
     * @return string
     */
    public function renderFooter(): string
    {
        return "</body></html>";
    }

    /**
     * @param array $parts
     * @return string
     */
    public function renderParts(array $parts): string
    {
        return implode("\n", $parts);
    }
}
