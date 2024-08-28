
<?php

include 'models/function.php';

$pdo = connectToDatabase();

$query = 'SELECT * FROM todos';

$statement = $pdo->prepare($query);

$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);


include 'views/index.view.php';