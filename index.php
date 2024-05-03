<?php
require_once('ViewMusic.php');

$read = ViewMusic::music();
$data = $read->readMusic();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Music Database</h1>
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Lagu</th>
                    <th scope="col">Artis</th>
                    <th scope="col">Genre</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;?>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $value['judul_lagu'] ?></td>
                        <td><?= $value['artis'] ?></td>
                        <td><?= $value['genre'] ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
?>