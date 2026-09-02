<?php

namespace App\Repository;

abstract class BaseRepository
{
    private  \PDO $instance;

    protected function __construct(\PDO $pdo)
    {
        $this->instance = $pdo;
    }

    protected function query(string $sql, bool $single = true): mixed
    {
        $query = $this->instance
            ->query($sql);
        return $single ? $query->fetch(\PDO::FETCH_OBJ) : $query->fetchAll(\PDO::FETCH_OBJ);
    }

    private function prepare(string $sql, array $datas = []): \PDOStatement
    {
        $prepare = $this->instance
            ->prepare($sql);
        $prepare->execute($datas);
        return $prepare;
    }

    protected function executeQuery(string $sql, array $datas = [], bool $single = true): mixed
    {
        $statement = self::prepare($sql, $datas);
        return $single ? $statement->fetch(\PDO::FETCH_OBJ) : $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    protected function executeUpdate(string $sql, array $datas = []): int|string
    {
        $statement = self::prepare($sql, $datas);
        return (str_starts_with(strtoupper(trim($sql)), 'INSERT')) ? $this->instance
            ->lastInsertId() : $statement->rowCount();
    }

    protected function getAllData(string $tableName): array
    {
        $sql = "SELECT * FROM $tableName";
        return self::query($sql, false);
    }
}
