<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <script>
        const director = "wes andersson";
        const maxAge = 60 * 60;
        const expires = new Date(Date.now() + maxAge);

        document.cookie = `director=${director};max-age=${maxAge};expires=${expires.toUTCString()}`;
    </script>
</body>

</html>