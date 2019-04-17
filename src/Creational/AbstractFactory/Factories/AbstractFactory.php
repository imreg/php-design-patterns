<?php

namespace Creational\AbstractFactory\Factories;

use Creational\AbstractFactory\Products\AbstractProductA;
use Creational\AbstractFactory\Products\AbstractProductB;

/**
 * The Abstract Factory interface declares a set of methods that return
 * different abstract products. These products are called a family and are
 * related by a high-level theme or concept. Products of one family are usually
 * able to collaborate among themselves. A family of products may have several
 * variants, but the products of one variant are incompatible with products of
 * another.
 */
interface AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA;

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB;
}