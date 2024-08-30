<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="/css/pico.min.css">
</head>
<body>
   <main class="container">
        <form method="post">
            <label for="num1">Number 1</label>
            <input type="text" id="num1" name="num1" value="<?= !empty($_POST)? $_POST['num1'] : ''?>">
            
            <label for="num2">Number 2</label>
            <input type="text" id="num2" name="num2" value="<?= !empty($_POST)? $_POST['num2'] : '' ?>">

            <input type="radio" name="operation" id="option_add" value="add" <?= isset($r_add)? 'checked' :'' ?>> 
            <label for="option_add">Add</label>
            
            <input type="radio" name="operation" id="option_multiply" value="multiply" <?= isset($r_product)? 'checked' :'' ?>>
            <label for="option_multiply">Multiply</label>
            
            <button type="submit">Submit</button>
        </form>
        
        <?php if (!empty($_POST)) { 
    if ($_POST['operation'] == 'add') { ?>
        <p>The sum of <?= $_POST['num1'] ?> & <?= $_POST['num2'] ?> is <?= $r_add ?>.</p>
    <?php } elseif ($_POST['operation'] == 'multiply') { ?>
        <p>The product of <?= $_POST['num1'] ?> & <?= $_POST['num2'] ?> is <?= $r_product ?>.</p>
    <?php } 
}  ?>

    </main>
</body>
</html>
