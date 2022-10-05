<style>
    .invaider {
        background-color: black;
        height: 50px;
        width: 50px;
    }

    .no-invaider {
        background-color: white;
        height: 50px;
        width: 50px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        width: 554px;
    }
</style>

<?php

$map = [
    [0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0],
    [0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0],
    [0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0],
    [0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1],
    [1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1],
    [0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0],
];
?>
<!-- <div class="container">
<?php
/* // print each row on a new line
foreach ($map as $row) {
    // print each column on a new line
    foreach ($row as $column) {
        if ($column == 1) {
            echo '<div class="invaider"></div>';
        } else {
            echo '<div class="no-invaider"></div>';
        }
    }
    echo '</br>';
} */
?>
</div> -->
<!-- short hand version -->
<div class="container">
    <?php
    foreach ($map as $row) {
        foreach ($row as $column) {
            echo '<div class="' . ($column == 1 ? 'invaider' : 'no-invaider') . '"></div>';
        }
        echo '</br>';
    }
    ?>