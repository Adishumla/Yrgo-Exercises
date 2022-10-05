<?php
$stars = [
    ['color' => 'aqua', 'size' => 2],
    ['color' => 'aquamarin', 'size' => 3],
    ['color' => 'hotpink', 'size' => 1],
    ['color' => 'white', 'size' => 2],
    ['color' => 'yellow', 'size' => 1],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
    <style>
        body {
            background-color: #111;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        div {
            animation: fade-in 1s;
        }
    </style>
</head>

<body>
    <!-- TODO: Implement the space logic here. -->
    <?php
    /* foreach ($stars as $star) {
        echo '<div style="background-color: ' . $star['color'] . '; height: ' . $star['size'] . 'px; width: ' . $star['size'] . 'px; border-radius: 50%;"></div>';
    } */
    // position randomly in the viewport
    /* foreach ($stars as $star) {
        echo '<div style="background-color: ' . $star['color'] . '; height: ' . $star['size'] . 'px; width: ' . $star['size'] . 'px; border-radius: 50%; position: absolute; top: ' . rand(0, 100) . '%; left: ' . rand(0, 100) . '%;"></div>';
    } */
    for ($i = 0; $i < 256; $i++) {
        echo '<div style="background-color: ' . $stars[rand(0, 4)]['color'] . '; height: ' . $stars[rand(0, 4)]['size'] . 'px; width: ' . $stars[rand(0, 4)]['size'] . 'px; border-radius: 50%; position: absolute; top: ' . rand(0, 100) . '%; left: ' . rand(0, 100) . '%;"></div>';
    }
    ?>
</body>

</html>