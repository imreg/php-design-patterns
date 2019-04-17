<?php

namespace Structural\Adapter;

use Structural\Adapter\Notifications\Notification;

class Start
{
    /**
     * @param  Notification $notification
     * @return string
     */
    public function clientCode(Notification $notification)
    {
        return $notification->send('Hello', 'Hi There');
    }
}
