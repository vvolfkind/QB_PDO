<?php

class Connection
{
    public static function make()
    {
        try {
            return $pdo = new PDO('mysql:host=127.0.0.1;dbname=movies_db', 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}