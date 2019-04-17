<?php

namespace spec\Creational\FactoryMethod;

use Creational\FactoryMethod\ConcreteCreator2;
use PhpSpec\ObjectBehavior;

class StartSpec extends ObjectBehavior
{
    function it_is_client_code_with_concreteCreator1()
    {
        $this->clientCode(new ConcreteCreator2())
            ->shouldReturn('Creator: {Result of the ConcreteProduct2}');
    }

    function it_is_client_code_with_concreteCreator2()
    {
        $this->clientCode(new ConcreteCreator2())
            ->shouldReturn('Creator: {Result of the ConcreteProduct2}');
    }
}
