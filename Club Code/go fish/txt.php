<div class="container">
    <div class="fish">
        <?php
        // loop through the fish array
        foreach ($fish as $fish) {
            // display the fish
            echo '<div class="fish ' . $fish['color'] . ' ' . $fish['size'] . '"></div>';
        }
        ?>
    </div>



    // function that randomly selects a fish
    function get_fish($fish)
    {
    // get a random fish
    $random_fish = $fish[rand(0, count($fish) - 1)];
    // return the fish
    return $random_fish;
    }
    ?>
    <h1>Go Fish</h1>
    <div class="fish">
        <?= 'You cought a ' . get_fish($fish)['name'] . get_fish($fish)['color'] . ' ' . get_fish($fish)['size']; ?>
    </div>
    <!-- input selectable bait php -->
    <form action="" method="post">
        <select name="bait">
            <?php foreach ($bait as $bait) : ?>
                <option value="<?= $bait; ?>"><?= $bait; ?></option>
            <?php endforeach; ?>
        </select>
    </form>


    <!-- form that reveals the fish on click if bait is correct fish -->
    <form action="" method="post">
        <?php if (isset($_POST['bait'])) : ?>
            <?php if ($_POST['bait'] == get_fish($fish)['bait']) : ?>
                <div class="fish">
                    <?= 'You cought a ' . get_fish($fish)['name'] . get_fish($fish)['color'] . ' ' . get_fish($fish)['size']; ?>
                </div>
            <?php else : ?>
                <div class="fish">
                    <?= 'You cought a ' . get_fish($fish)['name'] . get_fish($fish)['color'] . ' ' . get_fish($fish)['size']; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </form>

    <!-- Form that reveals a fish on click -->
    <form class="fishing-form" action="fish.php" method="post">
        <?php foreach ($fish as $fish) : ?>
            <div class="fish <?php echo $fish['color'] . ' ' . $fish['size']; ?>"> <input type="submit" value="Click to fish"></div>
        <?php endforeach; ?>