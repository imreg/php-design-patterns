<?php

namespace Creational\AbstractFactory\Products;


/**
 * Each distinct product of a product family should have a base interface. All
 * variants of the product must implement this interface.
 */
interface AbstractProductA
{
    /**
     * @return string
     */
    public function usefulFunctionA(): string;
}
