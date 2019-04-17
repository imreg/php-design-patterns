<?php

namespace Creational\FactoryMethod;

/**
 * Concrete Products provide various implementations of the Product interface.
 */
class ConcreteProduct2 implements Product
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return '{Result of the ConcreteProduct2}';
    }
}
