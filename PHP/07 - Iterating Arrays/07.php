<?php

$quotes = [
    'Do you ever have déjà vu, Mrs. Lancaster?',
    'Phil? Hey, Phil? Phil! Phil Connors? Phil Connors, I thought that was you!',
    'Well, what if there is no tomorrow? There wasn\'t one today.',
];
?>
<ol>
    <?php
    for ($i = 0; $i < count($quotes); $i++) echo <<<ITEM
    <li>$quotes[$i]</li>
ITEM;


    ?>
</ol>