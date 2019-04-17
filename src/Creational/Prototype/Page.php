<?php

namespace Creational\Prototype;


/**
 * Prototype.
 */
class Page
{
    private $title;

    private $body;

    /**
     * @var Author
     */
    private $author;

    /**
     * @var array
     */
    private $comments = [];

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * Page constructor.
     *
     * @param  string $title
     * @param  string $body
     * @param  Author $author
     * @throws \Exception
     */
    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime;
    }

    /**
     * @param string $comment
     */
    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    /**
     * You can control what data you want to carry over to the cloned object.
     *
     * For instance, when a page is cloned:
     * - It gets a new "Copy of ..." title.
     * - The author of the page remains the same. Therefore we leave the
     * reference to the existing object while adding the cloned page to the list
     * of the author's pages.
     * - We don't carry over the comments from the old page.
     * - We also attach a new date object to the page.
     */
    public function __clone()
    {
        $this->title = 'Copy of ' . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime;
    }
}
