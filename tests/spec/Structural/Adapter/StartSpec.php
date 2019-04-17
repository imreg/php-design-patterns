<?php

namespace spec\Structural\Adapter;

use Structural\Adapter\Notifications\EmailNotification;
use Structural\Adapter\Notifications\SlackNotification;
use Structural\Adapter\SlackApi;
use PhpSpec\ObjectBehavior;


class StartSpec extends ObjectBehavior
{

    function it_is_client_code_with_email_notification()
    {
        $this->clientCode(new EmailNotification('developers@example.com'))
            ->shouldReturn('Sent email with title `$title` to `developers@example.com` that says `Hi There`.');
    }

    function it_is_client_code_with_slack_notification()
    {
        $slackApi = new SlackApi('example.com', 'XXXXXXXX');
        $this->clientCode(new SlackNotification($slackApi, 'Example.com Developers'))
            ->shouldReturn('Posted following message into the Example.com Developers chat: #Hello# Hi There.');
    }
}
