<?php

namespace Structural\Composite\Elements;

use Structural\Composite\AbstractElements\FieldComposite;

/**
 * The fieldset element is a Concrete Composite.
 */
class Fieldset extends FieldComposite
{
    /**
     * @return string
     */
    public function render(): string
    {
        // Note how the combined rendering result of children is incorporated
        // into the fieldset tag.
        $output = parent::render();

        return "<fieldset><legend>{$this->title}</legend>\n$output</fieldset>\n";
    }
}
