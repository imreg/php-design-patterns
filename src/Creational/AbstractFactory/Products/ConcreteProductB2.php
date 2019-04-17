<?php

namespace Creational\AbstractFactory\Products;


class ConcreteProductB2 implements AbstractProductB
{
    /**
     * @return string
     */
    public function usefulFunctionB(): string
    {
        return 'The result of the product B2.';
    }

    /**
     * The variant, Product B2, is only able to work correctly with the variant,
     * Product A2. Nevertheless, it accepts any instance of AbstractProductA as
     * an argument.
     *
     * @param  AbstractProductA $collaborator
     * @return string
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return 'The result of the B2 collaborating with the '.$result;
    }
}
