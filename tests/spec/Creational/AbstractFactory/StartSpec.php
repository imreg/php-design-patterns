<?php

namespace spec\Creational\AbstractFactory;

use Creational\AbstractFactory\Factories\ConcreteFactory1;
use Creational\AbstractFactory\Factories\ConcreteFactory2;
use PhpSpec\ObjectBehavior;


class StartSpec extends ObjectBehavior
{
    function it_is_client_code_with_concreteFactory1()
    {
        $this->clientCode(new ConcreteFactory1())
            ->shouldReturn([
                'The result of the product B1.',
                'The result of the B1 collaborating with the The result of the product A1.',
            ]);
    }

    function it_is_client_code_with_concreteFactory2()
    {
        $this->clientCode(new ConcreteFactory2())
            ->shouldReturn([
                'The result of the product B2.',
                'The result of the B2 collaborating with the The result of the product A2.',
            ]);
    }
}
