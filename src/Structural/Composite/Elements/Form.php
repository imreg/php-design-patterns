<?php

namespace Structural\Composite\Elements;

use Structural\Composite\AbstractElements\FieldComposite;

/**
 * And so is the form element.
 */
class Form extends FieldComposite
{
    /**
     * @var string
     */
    protected $url;

    /**
     * Form constructor.
     * @param string $name
     * @param string $title
     * @param string $url
     */
    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $output = parent::render();
        return "<form action=\"{$this->url}\">\n<h3>{$this->title}</h3>\n$output</form>\n";
    }
}
