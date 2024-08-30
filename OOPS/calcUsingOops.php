<?php 
// Create two different classes
// The first will add
// The second will multiply
// Both classes will take numbers as constructor arguments
// Both classes will have a method called 'calculate'

include "../includes/bootstrap.php";

if(!empty($_POST)){
    if($_POST['operation']=='add'){
$sum = new Add($_POST['num1'], $_POST['num2']);
$r_add = $sum->calculate();
    }
    elseif($_POST['operation']=='multiply'){
$product = new Multiply($_POST['num1'], $_POST['num2']);
$r_product = $product->calculate();
}
}

include '../views/calc.view.php';
