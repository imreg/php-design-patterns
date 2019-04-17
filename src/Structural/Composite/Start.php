<?php

namespace Structural\Composite;

use Structural\Composite\AbstractElements\FormElement;
use Structural\Composite\Elements\Fieldset;
use Structural\Composite\Elements\Form;
use Structural\Composite\Elements\Input;

class Start
{
    /**
     * @return FormElement
     */
    public function productForm(): FormElement
    {
        $form = new Form('product', "Add product", "/product/add");
        $form->add(new Input('name', "Name", 'text'));
        $form->add(new Input('description', "Description", 'text'));

        $picture = new Fieldset('photo', "Product photo");
        $picture->add(new Input('caption', "Caption", 'text'));
        $picture->add(new Input('image', "Image", 'file'));
        $form->add($picture);
        return $form;
    }

    /**
     * @param  FormElement $form
     * @return FormElement
     */
    public function loadProductData(FormElement $form): Form
    {
        $data = [
            'name' => 'Apple MacBook',
            'description' => 'A decent laptop.',
            'photo' => [
                'caption' => 'Front photo.',
                'image' => 'photo1.png',
            ],
        ];

        $form->setData($data);

        return $form;
    }
}
