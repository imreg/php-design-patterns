<?php

namespace Creational\AbstractFactory\Factories;

use Creational\AbstractFactory\Products\AbstractProductA;
use Creational\AbstractFactory\Products\AbstractProductB;
use Creational\AbstractFactory\Products\ConcreteProductA2;
use Creational\AbstractFactory\Products\ConcreteProductB2;

/**
 * Concrete Factories produce a family of products that belong to a single
 * variant. The factory guarantees that resulting products are compatible. Note
 * that signatures of the Concrete Factory's methods return an abstract product,
 * while inside the method a concrete product is instantiated.
 */
class ConcreteFactory2 implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}
