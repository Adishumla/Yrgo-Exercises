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



?>

<!-- form that with input for all fish -->
<form action="fish.php" method="post">
    <?php foreach ($fish as $fish) : ?>
        <div class="fish">
            <input type="submit" name="fish" value="<?= $fish['name']; ?>">
            <?php
            // if the fish bait is the same as the randomly chosen bait reveal the fish otherwise hide it
            if ($fish['bait'] == $random_bait) {
                echo '<img src="images/' . $fish['name'] . '.jpg" alt="' . $fish['name'] . '">';
            } else {
                echo 'Sorry!';
            }




            ?>
            <?php
            ?>
        </div>
    <?php endforeach; ?>
</form>
<?php
// get fish from form and display it
?>