<?php

namespace spec\Structural\Bridge;

use Structural\Bridge\Helper\Product;
use Structural\Bridge\Pages\ProductPage;
use Structural\Bridge\Pages\SimplePage;
use Structural\Bridge\Renderers\HTMLRenderer;
use Structural\Bridge\Renderers\JsonRenderer;
use PhpSpec\ObjectBehavior;


class StartSpec extends ObjectBehavior
{
    function it_is_client_code_with_HTML_view_of_a_simple_content_page()
    {
        $this->clientCode(new SimplePage(new HTMLRenderer(), "Home", "Welcome to our website!"))
            ->shouldContain("<div class='text'>Welcome to our website!</div>");
    }

    function it_is_client_code_with_HTML_view_of_a_product_content_page()
    {
        $product = new Product(
            '123',
            'Star Wars, episode1',
            'A long time ago in a galaxy far, far away...',
            '/images/star-wars.jpeg',
            39.95);

        $this->clientCode(new ProductPage(new HTMLRenderer(), $product))
            ->shouldContain("<div class='text'>A long time ago in a galaxy far, far away...</div>");
    }

    function it_is_client_code_with_JSON_view_of_a_simple_content_page()
    {
        $this->clientCode(new SimplePage(new JsonRenderer(), 'Home', 'Welcome to our website!'))
            ->shouldReturn(json_encode([
                json_encode(['title' => 'Home']),
                json_encode(['text' => 'Welcome to our website!'])
            ]));
    }

    function it_is_client_code_with_JSON_view_of_a_product_content_page()
    {
        $product = new Product(
            '123',
            'Star Wars, episode1',
            'A long time ago in a galaxy far, far away...',
            '/images/star-wars.jpeg',
            39.95);

        $this->clientCode(new ProductPage(new JsonRenderer(), $product))
            ->shouldReturn(json_encode([
                json_encode(['title' => 'Star Wars, episode1']),
                json_encode(['text' => 'A long time ago in a galaxy far, far away...']),
                json_encode(['img' => '/images/star-wars.jpeg']),
                json_encode([
                    'link' => [
                        'href' => 'Add to cart',
                        'title' => 'Add to cart',
                    ]
                ])
            ]));
    }
}
