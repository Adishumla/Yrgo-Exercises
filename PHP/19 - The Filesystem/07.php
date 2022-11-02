<?php

$files = scandir('files');
//exclude files withouth extension .txt
$files = array_filter($files, function ($file) {
    return pathinfo($file, PATHINFO_EXTENSION) === 'txt';
});

function get_file_content($file)
{
    return file_get_contents('files/' . $file);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-color: #f5f5f5;
            padding: 20px;
        }

        button {
            margin-left: 10px;
            width: 150px;
            height: 50px;
        }

        article {
            display: flex;
        }

        .content {
            margin-left: 30px;
        }
    </style>

</head>

<body>
    <article>
        <div>
            <?php foreach ($files as $file) : ?>
                <button class="btn btn-outline-primary" onclick="showContent('<?= get_file_content($file) ?>')"><?= $file ?></button>
                <br>
            <?php endforeach; ?>
        </div>
        <p class="content"></p>
    </article>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        const showContent = (content) => {
            document.querySelector('.content').innerHTML = content;
        }
        const buttons = document.querySelectorAll('button');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                buttons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
            })
        })
    </script>
</body>

</html>