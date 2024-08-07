<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=my_app;user=root;charset=utf8mb4";

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }
    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }

    public function getTableName($query)
    {
        if (preg_match('/\bfrom\s+`?(\w+)`?/i', $query, $matches)) {
            $tableName = $matches[1];
            return $tableName;
        }
        return null;
    }

    public function getTableKey($query)
    {
        if (preg_match('/\bfrom\s+`?(\w+)`?/i', $query, $matches)) {
            $tableName = $matches[1];
            return rtrim($tableName, 's');
        }
        return null;
    }
}