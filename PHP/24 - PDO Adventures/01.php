<?php
// TODO: Implement the database logic here.
$db = new PDO('sqlite:tmdb.db');
$statement = $db->prepare('SELECT * FROM directors');
$statement->execute();
$directors = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>

<body>
    <h1>Directors</h1>
    <p>If you want to read more about a director, please click on their names below:</p>

    <!-- TODO: Implement the directors list logic here. -->
    <ul>
        <?php foreach ($directors as $director) : ?>
            <li>
                <a href="<?= $director['tmdb_url'] ?>">
                    <?= $director['first_name'] . ' ' . $director['last_name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
</body>

</html>