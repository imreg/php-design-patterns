<?php

namespace Creational\AbstractFactory\Products;


class ConcreteProductA2 implements AbstractProductA
{
    /**
     * @return string
     */
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}
