<?php

namespace spec\Creational\Builder;

use Creational\Builder\MysqlQueryBuilder;
use Creational\Builder\PostgresQueryBuilder;
use PhpSpec\ObjectBehavior;

class StartSpec extends ObjectBehavior
{
    function it_is_client_code_with_mysql()
    {
        $this->clientCode(new MysqlQueryBuilder())
            ->shouldReturn("SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10, 20;");
    }

    function it_is_client_code_with_postresql()
    {
        $this->clientCode(new PostgresQueryBuilder())
            ->shouldReturn("SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10 OFFSET 20;");
    }
}
