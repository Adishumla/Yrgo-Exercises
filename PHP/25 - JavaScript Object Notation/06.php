<?php
// TODO: Implement the JSON logic here.
if (isset($_POST['submit'])) {
    $show = [
        "name" => filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS),
        "tmdb_url" => filter_var($_POST['tmdb_url'], FILTER_SANITIZE_SPECIAL_CHARS)
    ];
    $encoded = json_encode($show);
    $location = 'actors.json';

    $actors = [];

    if (file_exists($location)) {
        $file = file_get_contents($location);
        $actors = json_decode($file, true);
    }

    $actors[] = $show;

    file_put_contents($location, json_encode($actors));
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
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
                <form action="06.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Lena Dunham">
                        <small class="form-text">Please provide the actor's full name.</small>
                    </div>

                    <div class="mb-3">
                        <label for="tmdb_url">TMDb URL</label>
                        <input class="form-control" type="url" name="tmdb_url" id="tmdb_url" placeholder="https://www.themoviedb.org/person/139135-lena-dunham">
                        <small class="form-text">Please provide the actor's TMDb URL.</small>
                    </div>

                    <button name="submit" type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>