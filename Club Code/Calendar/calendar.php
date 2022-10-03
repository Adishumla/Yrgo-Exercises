<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calandar</title>
</head>

<body>
    <!-- display calendar with saturday and sunday red and what day the month starts as -->
    <?php
    $month = date('m');
    $year = date('Y');
    $day = date('d');
    $first_day = mktime(0, 0, 0, $month, 1, $year);
    $title = date('F', $first_day);
    $day_of_week = date('D', $first_day);

    switch ($day_of_week) {

        case "Mon":
            $blank = 0;
            break;
        case "Tue":
            $blank = 1;
            break;
        case "Wed":
            $blank = 2;
            break;
        case "Thu":
            $blank = 3;
            break;
        case "Fri":
            $blank = 4;
            break;
        case "Sat":
            $blank = 5;
            break;
        case "Sun":
            $blank = 6;
            break;
    }
    $days_in_month = cal_days_in_month(0, $month, $year);
    echo "<table border=1 width=294>";
    echo "<tr><th colspan=7> $title $year </th></tr>";
    echo "<tr><td width=42>Mon</td><td width=42>Tue</td><td width=42>Wed</td><td width=42>Thu</td><td width=42>Fri</td><td width=42>Sat</td><td width=42>Sun</td></tr>";
    $day_count = 1;
    echo "<tr>";
    while ($blank > 0) {
        echo "<td></td>";
        $blank = $blank - 1;
        $day_count++;
    }
    $day_num = 1;
    /* while ($day_num <= $days_in_month) {
        echo "<td> $day_num </td>";
        $day_num++;
        $day_count++;
        if ($day_count > 7) {
            echo "</tr><tr>";
            $day_count = 1;
        }
    } */
    while ($day_num <= $days_in_month) {
        if ($day_num == $day) {
            echo "<td><b> $day_num </b></td>";
        }
        // if day is saturday or sunday make it red
        else if ($day_count == 1 || $day_count == 7) {
            echo "<td><font color=red> $day_num </font></td>";
        } else {
            echo "<td> $day_num </td>";
        }
        $day_num++;
        $day_count++;
        if ($day_count > 7) {
            echo "</tr><tr>";
            $day_count = 1;
        }
    }
    while ($day_count > 1 && $day_count <= 7) {
        echo "<td> </td>";
        $day_count++;
    }
    echo "</tr></table>";
    ?>
</body>

</html>