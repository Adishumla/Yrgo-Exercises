<?php
function greet()
{
    $name = $_POST['name']; // $_REQUEST is a superglobal variable that contains all the data from the form
    $time = (int) $_POST['time']; // (int) casts the value to an integer
    $greetings = ([
        [0, 11, "Good morning"], // between 0 and 11 say "Good morning"
        [12, 17, "Good afternoon"], // between 12 and 17 say "Good afternoon"
        [18, 24, "Good evening"], // between 18 and 24 say "Good evening"
    ]);
    foreach ($greetings as $greeting) { // loop through the greetings array
        if ($time >= $greeting[0] && $time <= $greeting[1]) { // checks if the time is between the first and second value in the array
            echo $greeting[2] . ", $name!"; // echo the third value in the array and the name
            break;
        }
        if ($time > 24 || $time < 0) { // if the time is greater than 24 or less than 0
            echo "Invalid time, $name!"; // echo "Invalid time!" and the name
            break;
        }
    }
}
?>
<form action="newGreeter.php" method="post">
    <!-- action is the file that the form is sent to, method is the method used to send the form data -->
    <label for="name">What is your name?</label> <!-- label is the text that is displayed next to the input -->
    <input type="text" name="name" id="name"> <!-- input is the form element, type is the type of input, name is the name of the input, id is the id of the input -->
    <label for="time">What time of day is it?</label>
    <input type="text" name="time" id="time">
    <input type="submit" value="Submit"> <!-- submit is the type of input, value is the text that is displayed on the button -->
</form>
<?php greet() ?>