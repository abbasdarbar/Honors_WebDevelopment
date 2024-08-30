<?php 
// Define the add and product functions
function add($num1, $num2) {
    return $num1 + $num2;
}

function product($num1, $num2) {
    return $num1 * $num2;
}

// Check if the form has been submitted
if (!empty($_POST)) {
    $r_add = add($_POST['num1'], $_POST['num2']);
    $r_product = product($_POST['num1'], $_POST['num2']);
}

// Include the view template
include "../views/calc.view.php";
?>
