<?php
$width = 200;
$height = 50;
$colors = ['blue', 'green', 'purple'];
?>
<?php foreach ($colors as $color) : ?>
    <div style="width: <?php echo $width ?>px; height: <?php echo $height ?>px; background-color: <?php echo $color ?>;"></div>
<?php endforeach; ?>