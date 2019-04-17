<?php

namespace spec\Structural\Composite;

use Structural\Composite\AbstractElements\FormElement;
use Structural\Composite\Elements\Form;
use PhpSpec\ObjectBehavior;

class StartSpec extends ObjectBehavior
{

    function it_is_a_complex_tree_structures()
    {
        $product = $this->productForm();
        $product->shouldReturnAnInstanceOf(FormElement::class);
        $product->getName()
            ->shouldReturn('product');
    }

    function it_is_the_form_structure_with_filled_data()
    {
        $formElement = new Form('Name', 'Title', 'Url');
        $this->loadProductData($formElement)
            ->render()
            ->shouldContain('<h3>Title</h3>');
    }
}
