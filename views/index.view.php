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
    <?php foreach($people as $information): ?>
    <details>
        <summary><strong>Name: </strong> <?php echo $information['name']; ?><br></summary>
        <p><strong>Age: </strong> <?php echo $information['age']; ?> <br></p>
        <p><strong>Localite: </strong> <?php echo $information['localite'] ? 'Yes' : 'No'; ?> <br><p>
    </details>
    <hr>
    <?php endforeach; ?>
    </main>
</body>
</html>
