<?php
// ?? is the shorthand for an if statement with an isset check. If the ID value
// doesn't exist we give it a default value `1`.
$id = $_GET['id'] ?? 1;

// TODO: Implement the database logic here.
$db = new PDO('sqlite:tmdb.db');
$statement = $db->prepare('SELECT * FROM directors WHERE id = :id');
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();
$director = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>

<body>
    <!-- TODO: Implement the director data presentation here. -->
    <h1><?= ($director) ?  $director['first_name'] : 'not found' ?></h1>
    <p> <?= ($director) ? $director['biography'] : "The director wasn't found in the database."  ?> </p>
</body>

</html>