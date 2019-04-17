<?php

namespace Structural\Bridge\Renderers;

/**
 * This Concrete Implementation renders a web page as JSON strings.
 */
class JsonRenderer implements Renderer
{
    /**
     * @param string $title
     * @return string
     */
    public function renderTitle(string $title): string
    {
        return json_encode(['title' => $title]);
    }

    /**
     * @param string $text
     * @return string
     */
    public function renderTextBlock(string $text): string
    {
        return json_encode(['text' => $text]);
    }

    /**
     * @param string $url
     * @return string
     */
    public function renderImage(string $url): string
    {
        return json_encode(['img' => $url]);
    }

    /**
     * @param string $url
     * @param string $title
     * @return string
     */
    public function renderLink(string $url, string $title): string
    {
        return json_encode(['link' => ['href' => $title, 'title' => $title]]);
    }

    /**
     * @return string
     */
    public function renderHeader(): string
    {
        return '';
    }

    /**
     * @return string
     */
    public function renderFooter(): string
    {
        return '';
    }

    /**
     * @param array $parts
     * @return string
     */
    public function renderParts(array $parts): string
    {
        return json_encode(array_values(array_filter($parts)));
    }
}
