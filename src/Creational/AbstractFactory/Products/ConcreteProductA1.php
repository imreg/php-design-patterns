<?php

namespace Creational\AbstractFactory\Products;

/**
 * Concrete Products are created by corresponding Concrete Factories.
 */
class ConcreteProductA1 implements AbstractProductA
{
    /**
     * @return string
     */
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}
