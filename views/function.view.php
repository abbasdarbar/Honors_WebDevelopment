<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/pico.min.css">
</head>
<body>
   <main class="container">
    <h2>
        The sum of <?= $num1 ?> & <?= $num2 ?> is <?= add($num1, $num2) ?>.<br>
        The product of <?= $num1 ?> & <?= $num2 ?> is <?= product($num1, $num2) ?>.
    </h2>
    </main>
</body>
</html>
