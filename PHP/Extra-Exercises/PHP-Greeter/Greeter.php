<?php
function greet()
{
    $name = $_REQUEST['name']; // $_REQUEST is a superglobal variable that contains all the data from the form
    $time = (int) $_REQUEST['time']; // (int) casts the value to an integer
    switch ($time) {
        case $time >= 0 && $time <= 11:
            echo "Good morning, $name!";
            break;
        case $time >= 12 && $time <= 17:
            echo "Good afternoon, $name!";
            break;
        case $time >= 18 && $time <= 24:
            echo "Good evening, $name!";
            break;
        default:
            echo "Hello, $name!";
            break;
    }
}
?>
<form action="Greeter.php" method="post">
    <label for="name">What is your name?</label>
    <input type="text" name="name" id="name">
    <label for="time">What time of day is it?</label>
    <input type="text" name="time" id="time">
    <input type="submit" value="Submit">
</form>
<?php greet() ?>