<?php

$houses = [
    'Greyjoy',
    'Lannister',
    'Mormont',
    'Seaworth',
    'Snow',
    'Stark',
    'Targaryen',
];

$characters = [
    'Arya Stark',
    'Bran Stark',
    'Cersei Lannister',
    'Daenerys Targaryen',
    'Davos Seaworth',
    'Jaime Lannister',
    'Jon Snow',
    'Jorah Mormont',
    'Sansa Stark',
    'Theon Greyjoy',
    'Tyrion Lannister',
];

// TODO: Implement the filter script here.

// check if house is set and not empty
if (isset($_GET['house']) && !empty($_GET['house'])) {
    // filter house
    $house = filter_var($_GET['house'], FILTER_UNSAFE_RAW);
    // filter characters
    $characters = array_filter($characters, function ($character) use ($house) {
        $nameParts = explode(" ", $character);
        return $nameParts[1] === $house;
    });
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>

<body>
    <form action="10.php" method="get">
        <label for="house">House</label>
        <select name="house">
            <option>All</option>
            <?php foreach ($houses as $name) : ?>
                <option value="<?php echo $name; ?>" <?php echo isset($house) && $house === $name ? 'selected' : ''; ?>>
                    <?php echo $name; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>

    <ol>
        <?php foreach ($characters as $character) : ?>
            <li><?php echo $character; ?></li>
        <?php endforeach; ?>
    </ol>

    <script>
        // TODO: Implement the submission script here.

        const form = document.querySelector('form');
        const select = document.querySelector('select');
        select.addEventListener('change', function() {
            form.submit();
        });
    </script>
</body>

</html>