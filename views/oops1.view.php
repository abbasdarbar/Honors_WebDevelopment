<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
    <link rel="stylesheet" href="/css/pico.min.css">
</head>
<body>

<?php foreach ($people as $information => $person): ?>
    <details>
        <summary> <strong>Name:</strong><?php echo $person->name; ?></summary>
        <ul>
            <li><strong>Age:</strong><?php echo $person->age; ?></li>
            <li><strong>Localite:</strong><?php echo $person->isLocal ? 'Yes' : 'No'; ?></li>
        </ul>
    </details>
    <hr />
<?php endforeach; ?>

</body>
</html>