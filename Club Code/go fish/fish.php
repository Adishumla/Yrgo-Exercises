<link rel="stylesheet" href="style.css">
<?php

// 3 dimensional array with fish name, bait fly or worm and depth surface, mid, deep
$fish = [
    ['name' => 'Bass', 'bait' => 'fly', 'depth' => 'surface'],
    ['name' => 'Trout', 'bait' => 'worm', 'depth' => 'mid'],
    ['name' => 'Salmon', 'bait' => 'fly', 'depth' => 'deep'],
    ['name' => 'Catfish', 'bait' => 'worm', 'depth' => 'deep'],
    ['name' => 'Bluegill', 'bait' => 'worm', 'depth' => 'surface'],
    ['name' => 'Crappie', 'bait' => 'fly', 'depth' => 'mid'],
    ['name' => 'Pike', 'bait' => 'worm', 'depth' => 'deep'],
    ['name' => 'Perch', 'bait' => 'fly', 'depth' => 'surface'],
    ['name' => 'Walleye', 'bait' => 'worm', 'depth' => 'mid'],
    ['name' => 'Tuna', 'bait' => 'fly', 'depth' => 'deep'],
    ['name' => 'Swordfish', 'bait' => 'worm', 'depth' => 'deep'],
    ['name' => 'Marlin', 'bait' => 'fly', 'depth' => 'surface'],
    ['name' => 'Shark', 'bait' => 'worm', 'depth' => 'mid'],
    ['name' => 'Sailfish', 'bait' => 'fly', 'depth' => 'deep'],
    ['name' => 'Mackerel', 'bait' => 'worm', 'depth' => 'deep'],
    ['name' => 'Snapper', 'bait' => 'fly', 'depth' => 'surface'],
    ['name' => 'Cod', 'bait' => 'worm', 'depth' => 'mid'],
    ['name' => 'Haddock', 'bait' => 'fly', 'depth' => 'deep'],
    ['name' => 'Herring', 'bait' => 'worm', 'depth' => 'deep'],
    ['name' => 'Mullet', 'bait' => 'fly', 'depth' => 'surface']
];

// randomly choose a bait from the array dynamically
$random_bait = $fish[array_rand($fish)]['bait'];
// randomly choose a depth from the array dynamically
$random_depth = $fish[array_rand($fish)]['depth'];

?>

<h1>Go Fish</h1>
<h3>Your bait is <?= $random_bait ?></h3>
<h3>Your depth is <?= $random_depth ?></h3>
<!-- form that with input for all fish -->
<form action="fish.php" method="post">
    <?php foreach ($fish as $fish) : ?>
        <div class="fish">
            <input type="submit" name="fish" value="<?= $fish['name']; ?>">
        </div>
    <?php endforeach; ?>
</form>
<?php
if (isset($_POST['fish'])) {
    if ($fish['bait'] == $random_bait && $fish['depth'] == $random_depth) {
        // display the fish name
        echo "<h2>You caught a " . $_POST['fish'] . "</h2>";
        // break out of the loop
    }
    if ($fish['bait'] != $random_bait && $fish['depth'] != $random_depth) {
        // display the fish name
        echo "<h2> You did not have the right bait and it was the wrong depth</h2>";
        // break out of the loop
    }
    if ($fish['bait'] != $random_bait && $fish['depth'] == $random_depth) {
        // display the fish name
        echo "<h2> You did not have the right bait</h2>";
        // break out of the loop
    }
    if ($fish['bait'] == $random_bait && $fish['depth'] != $random_depth) {
        // display the fish name
        echo "<h2> It was the wrong depth</h2>";
        // break out of the loop
    }
}
