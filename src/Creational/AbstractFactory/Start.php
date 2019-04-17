<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Factories\AbstractFactory;

class Start
{
    /**
     * @param  AbstractFactory $factory
     * @return array
     */
    public function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        return [
            $productB->usefulFunctionB(),
            $productB->anotherUsefulFunctionB($productA)
        ];
    }


}