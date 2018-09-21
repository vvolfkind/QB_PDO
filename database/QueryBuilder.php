<?php

class QueryBuilder
{  
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $class);
        //return $statement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, $model);
    }

}