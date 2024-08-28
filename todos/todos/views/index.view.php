<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOS</title>
    <link rel="stylesheet" href="/css/pico.min.css">
</head>

<body>
    <header class="container">
        <nav>
            <h3>To add todos to database</h3>
            <ul>
                <li><a href="models/add.php">Add Todos</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <h1>My Todos</h1>

        <table>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Due Date</th>
                <th>Is Completed</th>
            </tr>

            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["title"]; ?></td>
                    <td>
                        <?php
                        $date = $row["due_date"]; // Empty date string

                        if (!empty($date)) {
                            $dateObject = new DateTime($date);
                            $formattedDate = $dateObject->format('d F Y');
                        } else {
                            $formattedDate = ""; // Empty string
                        }

                        echo $formattedDate; // Output: (empty string)
                        ?>
                    </td>
                    <td>
                        <?php
                        $booleanValue = $row["is_completed"]; // or 0

                        if ($booleanValue) {
                            echo "Yes";
                        } else {
                            echo "No";
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>

</html>
