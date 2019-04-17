<?php


namespace Creational\Builder;


/**
 * The Builder interface declares a set of methods to assemble an SQL query.
 *
 * All of the construction steps are returning the current builder object to
 * allow chaining: $builder->select(...)->where(...)
 */
interface SQLQueryBuilder
{
    /**
     * @param  string $table
     * @param  array  $fields
     * @return SQLQueryBuilder
     */
    public function select(string $table, array $fields): SQLQueryBuilder;

    /**
     * @param  string $field
     * @param  string $value
     * @param  string $operator
     * @return SQLQueryBuilder
     */
    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;

    /**
     * @param  int $start
     * @param  int $offset
     * @return SQLQueryBuilder
     */
    public function limit(int $start, int $offset): SQLQueryBuilder;

    /**
     * @return string
     */
    public function getSQL(): string;
}
