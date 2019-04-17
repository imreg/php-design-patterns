<?php

namespace Structural\Adapter;

/**
 * The Adaptee is some useful class, incompatible with the Target interface. You
 * can't just go in and change the code of the class to follow the Target
 * interface, since the code might be provided by a 3rd-party library.
 */
class SlackApi
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * SlackApi constructor.
     *
     * @param string $login
     * @param string $apiKey
     */
    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function logIn(): string
    {
        // Send authentication request to Slack web service.
        return 'Logged in to a slack account ' . $this->login . PHP_EOL;
    }

    /**
     * @param string $chatId
     * @param string $message
     * @return string
     */
    public function sendMessage(string $chatId, string $message): string
    {
        return 'Posted following message into the ' . $chatId . ' chat: ' . $message . '.';
    }
}
