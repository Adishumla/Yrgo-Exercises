<?php
// function table with 7 rows with random numbers from 1 to 35 and no duplicates
function lotto()
{
    // create array with 35 numbers
    $lotto = array();
    for ($i = 0; $i < 7; $i++) {
        $lotto[$i] = rand(1, 35);
        for ($j = 0; $j < $i; $j++) {
            if ($lotto[$i] == $lotto[$j]) {
                $i--;
            }
        }
    }
    return $lotto;
}
// function to display the lotto table
function displayLotto($lotto)
{
    echo "<table border=1 width=294>";
    echo "<tr><th colspan=7> Lotto </th></tr>";
    echo "<tr><td width=42>1</td><td width=42>2</td><td width=42>3</td><td width=42>4</td><td width=42>5</td><td width=42>6</td><td width=42>7</td></tr>";
    echo "<tr>";
    for ($i = 0; $i < 7; $i++) {
        echo "<td> $lotto[$i] </td>";
    }
    echo "</tr>";
    echo "</table>";
}
$lotto = lotto();
?>
<!-- form where user can change 2 numbers from the lotto array and remove 1 number from the array-->
<form action="lotto.php" method="post">
    Favorite number: <input type="text" name="num1" value="<?php echo $lotto[0]; ?>" size="2" maxlength="2" />
    Favorite number: <input type="text" name="num2" value="<?php echo $lotto[1]; ?>" size="2" maxlength="2" />
    Least favorite number<input type="text" name="num3" value="<?php echo $lotto[2]; ?>" size="2" maxlength="2" />
    <input type="submit" name="submit" value="Change" />
</form>

<?php
// if user has submitted the form then change the lotto array and display the new lotto table
if (isset($_POST['submit'])) {
    $favoriteNum1 = $_POST['num1'];
    $favoritenNum2 = $_POST['num2'];
    $leastFavoriteNum = $_POST['num3'];
    if ($favoriteNum1 >= 1 && $favoriteNum1 <= 35 && $favoritenNum2 >= 1 && $favoritenNum2 <= 35 && $leastFavoriteNum >= 1 && $leastFavoriteNum <= 35) {
        $lotto[0] = $favoriteNum1;
        $lotto[1] = $favoritenNum2;
        // in array search for the number that the user wants to remove and remove it and replace it with a new random number
        if (($key = array_search($leastFavoriteNum, $lotto)) !== false) {
            unset($lotto[$key]);
            $lotto[$key] = rand(1, 35);
            for ($j = 0; $j < $key; $j++) {
                if ($lotto[$key] == $lotto[$j]) {
                    $lotto[$key] = rand(1, 35);
                }
            }
        }
        displayLotto($lotto);
    }
}
