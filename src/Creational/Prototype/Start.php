<?php

namespace Creational\Prototype;

class Start
{
    /**
     * @return Page
     */
    public function clientCode(): Page
    {
        $author = new Author('John Smith');
        $page = new Page('Tip of the day', 'Keep calm and carry on.', $author);

        $page->addComment('Nice tip, thanks!');

        return clone $page;
    }
}
