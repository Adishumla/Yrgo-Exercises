<?php

$db = new PDO('sqlite:tmdb.db');
$statement = $db->prepare('SELECT * FROM movies');
$statement->execute();
$movies = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05</title>
</head>

<body>
    <form method="post">
        <input type="text" name="search" placeholder="Search for a movie">
        <button type="submit">Search</button>
    </form>
    <?php
    if (isset($_POST['search'])) {
        $search = filter_var($_POST['search'], FILTER_UNSAFE_RAW);
        $search = '%' . $_POST['search'] . '%';
        $statement = $db->prepare('SELECT * FROM movies WHERE title LIKE :search');
        $statement->bindParam(':search', $search, PDO::PARAM_STR);
        $statement->execute();
        $movies = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($movies as $movie) {
            $title = htmlspecialchars($movie['title']);
            echo "<h1>$title</h1>";
        }
    }

    ?>
</body>

</html>