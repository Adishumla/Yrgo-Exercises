<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="05.php" method="post">
        <input type="email" name="email" id="">
        <input type="password" name="password" id="">
        <button type="submit">Submit</button>
    </form>
    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($_POST['email'], $_POST['password'])) {
        echo "Hello " . $email . " your password is " . $password;
    }
    ?>
</body>

</html>