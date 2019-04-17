<?php

namespace Creational\FactoryMethod;

class Start
{
    /**
     * @param  Creator $creator
     * @return string
     */
    public function clientCode(Creator $creator)
    {
        return $creator->someOperation();
    }
}
