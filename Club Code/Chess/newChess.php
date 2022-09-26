<?php
// arrays for each piece

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
    'bpawn' => '&#9823;',
    'none' => ''
];

$board = [
    8 => [
        'a' => [$pieces['brook'], 'grey'],
        'b' => [$pieces['bknight'], 'white'],
        'c' => [$pieces['bbishop'], 'grey'],
        'd' => [$pieces['bqueen'], 'white'],
        'e' => [$pieces['bking'], 'grey'],
        'f' => [$pieces['bbishop'], 'white'],
        'g' => [$pieces['bknight'], 'grey'],
        'h' => [$pieces['brook'], 'white'],
    ],
    7 => [
        'a' => [$pieces['bpawn'], 'white'],
        'b' => [$pieces['bpawn'], 'grey'],
        'c' => [$pieces['bpawn'], 'white'],
        'd' => [$pieces['bpawn'], 'grey'],
        'e' => [$pieces['bpawn'], 'white'],
        'f' => [$pieces['bpawn'], 'grey'],
        'g' => [$pieces['bpawn'], 'white'],
        'h' => [$pieces['bpawn'], 'grey'],
    ],
    6 => [
        'a' => [$pieces['none'], 'grey'],
        'b' => [$pieces['none'], 'white'],
        'c' => [$pieces['none'], 'grey'],
        'd' => [$pieces['none'], 'white'],
        'e' => [$pieces['none'], 'grey'],
        'f' => [$pieces['none'], 'white'],
        'g' => [$pieces['none'], 'grey'],
        'h' => [$pieces['none'], 'white'],
    ],
    5 => [
        'a' => [$pieces['none'], 'white'],
        'b' => [$pieces['none'], 'grey'],
        'c' => [$pieces['none'], 'white'],
        'd' => [$pieces['none'], 'grey'],
        'e' => [$pieces['none'], 'white'],
        'f' => [$pieces['none'], 'grey'],
        'g' => [$pieces['none'], 'white'],
        'h' => [$pieces['none'], 'grey'],
    ],
    4 => [
        'a' => [$pieces['none'], 'grey'],
        'b' => [$pieces['none'], 'white'],
        'c' => [$pieces['none'], 'grey'],
        'd' => [$pieces['none'], 'white'],
        'e' => [$pieces['none'], 'grey'],
        'f' => [$pieces['none'], 'white'],
        'g' => [$pieces['none'], 'grey'],
        'h' => [$pieces['none'], 'white'],
    ],
    3 => [
        'a' => [$pieces['none'], 'white'],
        'b' => [$pieces['none'], 'grey'],
        'c' => [$pieces['none'], 'white'],
        'd' => [$pieces['none'], 'grey'],
        'e' => [$pieces['none'], 'white'],
        'f' => [$pieces['none'], 'grey'],
        'g' => [$pieces['none'], 'white'],
        'h' => [$pieces['none'], 'grey'],
    ],
    2 => [
        'a' => [$pieces['wpawn'], 'grey'],
        'b' => [$pieces['wpawn'], 'white'],
        'c' => [$pieces['wpawn'], 'grey'],
        'd' => [$pieces['wpawn'], 'white'],
        'e' => [$pieces['wpawn'], 'grey'],
        'f' => [$pieces['wpawn'], 'white'],
        'g' => [$pieces['wpawn'], 'grey'],
        'h' => [$pieces['wpawn'], 'white'],
    ],
    1 => [
        'a' => [$pieces['wrook'], 'white'],
        'b' => [$pieces['wknight'], 'grey'],
        'c' => [$pieces['wbishop'], 'white'],
        'd' => [$pieces['wqueen'], 'grey'],
        'e' => [$pieces['wking'], 'white'],
        'f' => [$pieces['wbishop'], 'grey'],
        'g' => [$pieces['wknight'], 'white'],
        'h' => [$pieces['wrook'], 'grey'],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

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
        foreach ($board as $row => $cols) {
            echo "<tr>";
            echo "<th>$row</th>";
            foreach ($cols as $col => $piece) {
                echo "<td style='background-color:{$piece[1]};'>{$piece[0]}</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>