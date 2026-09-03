<?php

namespace App\Repository;

class Database
{
    private static ?\PDO $instance = null;

    private function __construct() {}

    public static function getConnection(): \PDO
    {
        if (self::$instance === null) {
            $host = $_ENV['DB_HOST'];
            $db   = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $pass = $_ENV['DB_PASS'];

            $dsn = "pgsql:host=$host;dbname=$db";

            self::$instance = new \PDO($dsn, $user, $pass, [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
            ]);
        }

        return self::$instance;
    }

    public static function closeConnection(): void
    {
        self::$instance = null;
    }
}
