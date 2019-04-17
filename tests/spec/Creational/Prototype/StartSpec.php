<?php

namespace spec\Creational\Prototype;

use Creational\Prototype\Page;
use PhpSpec\ObjectBehavior;

class StartSpec extends ObjectBehavior
{
    function it_is_client_code_with_clone()
    {
        $this->clientCode()
            ->shouldReturnAnInstanceOf(Page::class);
    }
}
