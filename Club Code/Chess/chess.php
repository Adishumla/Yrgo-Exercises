<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chess</title>
</head>

<body>
    <!-- chessboard with numbers and letters on side with unicode chess pices php loop -->
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
        for ($i = 8; $i > 0; $i--) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 0; $j < 8; $j++) {
                if ($i % 2 == 0) {
                    if ($j % 2 == 0) {
                        echo "<td style='background-color: black;'></td>";
                    } else {
                        echo "<td style='background-color: white;'></td>";
                    }
                } else {
                    if ($j % 2 == 0) {
                        echo "<td style='background-color: white;'></td>";
                    } else {
                        echo "<td style='background-color: black;'></td>";
                    }
                }
            }
            echo "</tr>";
        }
        ?>

</html>