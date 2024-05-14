<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/Models/Movie.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Movies</title>
</head>

<body class="bg-info-subtle">
    <?php require __DIR__ . '/partials/header.php' ?>

    <main>
        <?php require __DIR__ . '/partials/movies.php' ?>
    </main>



</body>

</html>