<?php

namespace Structural\Adapter\Notifications;

/**
 * The Target interface represents the interface that your application's classes
 * already follow.
 */
interface Notification
{
    /**
     * @param  string $title
     * @param  string $message
     * @return string
     */
    public function send(string $title, string $message): string;
}
