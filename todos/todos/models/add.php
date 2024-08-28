<?php 

include "models/function.php";
if (isset($_POST['title'])) {

    $title = $_POST['title'];
    $dueDate = $_POST['due_date'];

    $pdo = connectToDatabase();

    $query = "INSERT INTO todos SET title='$title', due_date='$dueDate'";
    $statement = $pdo->prepare($query);

    $statement->execute();

    header('Location: index.php');
    exit;

}

include "views/add.view.php";
