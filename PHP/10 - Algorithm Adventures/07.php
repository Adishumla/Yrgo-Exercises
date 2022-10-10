<?php
$people = [
    'Christopher Læssø' => true,
    'Ruben Östlund' => false,
    'Elisabeth Moss' => true,
];
?>
<ol>
    <!-- TODO: Implement the foreach loop logic here. -->
    <?php foreach ($people as $name => $isActor) : ?>
        <?php if ($isActor == true) : ?>
            <li><?= $name ?> is an actor</li>
        <?php else : ?>
            <li><?= $name ?> is not an actor.</li>
        <?php endif; ?>
    <?php endforeach; ?>
</ol>