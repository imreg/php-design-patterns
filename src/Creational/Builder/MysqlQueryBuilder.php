<?php

namespace Creational\Builder;


/**
 * Each Concrete Builder corresponds to a specific SQL dialect and may implement
 * the builder steps a little bit differently from the others.
 *
 * This Concrete Builder can build SQL queries compatible with MySQL.
 */
class MysqlQueryBuilder implements SQLQueryBuilder
{
    /**
     * @var object
     */
    protected $query;

    protected function reset(): void
    {
        $this->query = new \stdClass;
    }

    /**
     * Build a base SELECT query.
     *
     * @param  string $table
     * @param  array  $fields
     * @return SQLQueryBuilder
     */
    public function select(string $table, array $fields): SQLQueryBuilder
    {
        $this->reset();
        $this->query->base = 'SELECT ' . implode(', ', $fields) . ' FROM ' . $table;
        $this->query->type = 'select';

        return $this;
    }

    /**
     * Add a WHERE condition.
     *
     * @param  string $field
     * @param  string $value
     * @param  string $operator
     * @return SQLQueryBuilder
     * @throws \Exception
     */
    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        if (!in_array($this->query->type, ['select', 'update'])) {
            throw new \Exception('WHERE can only be added to SELECT OR UPDATE');
        }

        $this->query->where[] = "$field $operator '$value'";

        return $this;
    }

    /**
     * Add a LIMIT constraint.
     *
     * @param  int $start
     * @param  int $offset
     * @return SQLQueryBuilder
     * @throws \Exception
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        if (!in_array($this->query->type, ['select'])) {
            throw new \Exception('LIMIT can only be added to SELECT');
        }
        $this->query->limit = ' LIMIT ' . $start . ', ' . $offset;

        return $this;
    }

    /**
     * Get the final query string.
     *
     * @return string
     */
    public function getSQL(): string
    {
        $query = $this->query;
        $sql = $query->base;
        if (!empty($query->where)) {
            $sql .= ' WHERE ' . implode(' AND ', $query->where);
        }
        if (isset($query->limit)) {
            $sql .= $query->limit;
        }
        $sql .= ';';
        return $sql;
    }
}
