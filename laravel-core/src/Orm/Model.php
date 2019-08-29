<?php

namespace LaravelCore\Orm;

class Model
{
    protected $wheres;
    protected $limit;
    protected $columns;

    public function getTable()
    {
        if (!isset($this->table)) {
            return str_replace(
                // 此处基于 laravel 的 帮助类和帮助函数。
                '\\', '', Str::snake(Str::plural(class_basename($this)))  
            );
        }
        return $this->table;
    }

    public function toSql()
    {
        $sql = '';

        return $sql;
    }

    public function get($columns = ['*'])
    {
        $this->columns = $columns;

        $results = \mysql_query($this->toSql());

        return $results;
    }

    public function take($value)
    {
        return $this->limit = $value;
    }

    public function first($columns)
    {
        return $this->take(1)->get($columns);
    }

    public function where($column, $operator = null, $value = null)
    {
        $this->wheres[] = compact(
            'type', 'column', 'operator', 'value'
        );

        return $this;
    }

    public function __call($method, $parameters)
    {
        return $this->$method(...$parameters);
    }

    public function __callStatic($name, $arguments)
    {
        return (new static)->$name(...$arguments);
    }
}