<?php
// TODO: Implement the database logic here.
$dir = 'startrek.db';
$db = new PDO('sqlite:' . $dir);
$characters = $db->query('SELECT name FROM characters');
$characters_array = $characters->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>

<body>
    <!-- TODO: Implement the ordered list here. -->
    <ol>
        <?php foreach ($characters_array as $character) : ?>
            <li>
                <?= $character['name'] ?>
            </li>
        <?php endforeach; ?>
    </ol>
</body>

</html>