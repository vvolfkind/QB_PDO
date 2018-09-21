<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Movie.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);


$movies = $query->selectAll('movies', 'Movie');
die(var_dump($movies));






require 'index.view.php';