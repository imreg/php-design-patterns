<?php

namespace Creational\FactoryMethod;


/**
 * The Product interface declares the operations that all concrete products must
 * implement.
 */
interface Product
{
    /**
     * @return string
     */
    public function operation(): string;
}
