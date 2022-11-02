<?php

if (isset($_POST)) {
    $filename = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $filename = "files/" . $filename . ".txt";
    //$contents = file_get_contents($filename);
    $contents = $_POST['content'];
    file_put_contents($filename, $contents);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5 justify-content-md-center">
            <div class="col-md-6 ml-center">
                <form action="06.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="dana-scully.txt" class="form-control" required>
                        <small class="form-text">Please provide a filename without an extension.</small>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" rows="8" cols="80" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Note</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>