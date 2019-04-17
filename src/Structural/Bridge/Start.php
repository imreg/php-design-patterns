<?php

namespace Structural\Bridge;

use Structural\Bridge\Pages\Page;

class Start
{
    public function clientCode(Page $page)
    {
        return $page->view();
    }
}
