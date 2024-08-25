<?php

include "models/add.php";

$query = 'SELECT * FROM todos';

$statement = $pdo->prepare($query);

$statement->execute();

$rows = $statement->fetchAll(mode: PDO::FETCH_ASSOC); // Fetch associative arrays. Keys will be the field names

var_dump($rows);

include "views/index.view.php";
