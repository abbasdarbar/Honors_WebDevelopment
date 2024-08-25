<?php

function connectToDatabase()
{
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', 'admin123');
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
}
