<?php
if (isset($_POST['quote'])) {
    $quote = filter_var($_POST['quote'], FILTER_UNSAFE_RAW);
    $file = 'quotes.txt';
    file_put_contents($file, $quote . PHP_EOL, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action='06.php' , method='post' , enctype="multipart/form-data">
        <textarea name="quote" id="quote" cols="30" rows="10"></textarea>
        <input type='submit' value='Submit'>
    </form>
</body>

</html>