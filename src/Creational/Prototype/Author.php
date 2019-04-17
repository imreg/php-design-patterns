<?php


namespace Creational\Prototype;


class Author
{
    private $name;

    /**
     * @var Page[]
     */
    private $pages = [];

    /**
     * Author constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param Page $page
     */
    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}
