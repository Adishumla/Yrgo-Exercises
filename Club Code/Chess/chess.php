<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chess</title>
</head>
<?php
// unicode chess pieces
$pieces = [
    'wking' => '&#9812;',
    'wqueen' => '&#9813;',
    'wbishop' => '&#9815;',
    'wknight' => '&#9816;',
    'wrook' => '&#9814;',
    'wpawn' => '&#9817;',
    'bking' => '&#9818;',
    'bqueen' => '&#9819;',
    'bbishop' => '&#9821;',
    'bknight' => '&#9822;',
    'brook' => '&#9820;',
    'bpawn' => '&#9823;'
];
?>

<body>
    <table>
        <tr>
            <th></th>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
            <th>F</th>
            <th>G</th>
            <th>H</th>
        </tr>
        <?php
        for ($i = 8; $i > 0; $i--) { // loop through the rows
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 0; $j < 8; $j++) { // loop through the columns
                if ($i % 2 == 0) { // if the row is even
                    if ($j % 2 == 0) { // if the column is even
                        echo "<td style='background-color: grey;'></td>";
                    } else {
                        echo "<td style='background-color: white;'></td>";
                    }
                } else { // if the row is odd
                    if ($j % 2 == 0) { // if the column is even
                        echo "<td style='background-color: white;'></td>";
                    } else {
                        echo "<td style='background-color: grey;'></td>";
                    }
                }
            }
            echo "</tr>";
        }


        ?>



</html>