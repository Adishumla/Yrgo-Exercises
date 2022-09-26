<?php require_once 'header.php'; ?>
<main>

    <?php
    $actors = [
        1 => ['name' => 'Kristen Bell', 'character' => 'Anna', 'img' => 'https://image.tmdb.org/t/p/w1280/zPDp7jfqwiesn7R3ygKufwjMLDU.jpg'],
        2 => ['name' => 'Idina Menzel', 'character' => 'Elsa', 'img' => 'https://image.tmdb.org/t/p/w1280/l2N0xOzHqZ75bKXBCciKwBdwxcN.jpg'],
        3 => ['name' => 'Jonathan Groff', 'character' => 'Kristoff', 'img' => 'https://image.tmdb.org/t/p/w1280/3kmnYKAzSc3Lp7iK5pcj97Hx9Cm.jpg'],
        4 => ['name' => 'Josh Gad', 'character' => 'Olaf', 'img' => 'https://image.tmdb.org/t/p/w1280/17iKlfWZBDTAucqjkhRKHr9xjIz.jpg'],
        5 => ['name' => 'Santino Fontana', 'character' => 'Hans', 'img' => 'https://image.tmdb.org/t/p/w1280/5wo0D9drLtLwdyZyDqNZRejgzoM.jpg'],
    ];
    foreach ($actors as $actor) {
        echo "<article>";
        echo "<img src='" . $actor['img'] . "' alt=''>";
        echo "<h2>" . $actor['name'] . "</h2>";
        echo "<p>" . $actor['character'] . "</p>";
        echo "</article>";
    }
    ?>

</main>
<?php require_once 'footer.php'; ?>