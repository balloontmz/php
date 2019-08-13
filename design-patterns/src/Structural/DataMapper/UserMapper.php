<?php

namespace DesignPatterns\Structural\DataMapper;

class UserMapper
{
    private $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("User #$id not find");
        }
        return $this->mapRowToUser($result);
    }

    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}