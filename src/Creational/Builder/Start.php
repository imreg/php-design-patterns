<?php

namespace Creational\Builder;

class Start
{
    /**
     * @param  SQLQueryBuilder $queryBuilder
     * @return string
     */
    public function clientCode(SQLQueryBuilder $queryBuilder)
    {
        $query = $queryBuilder
            ->select('users', ['name', 'email', 'password'])
            ->where('age', 18, '>')
            ->where('age', 30, '<')
            ->limit(10, 20)
            ->getSQL();

        return $query;
    }
}
