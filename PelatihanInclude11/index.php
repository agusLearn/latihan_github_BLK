<?php
if (isset($_GET['page'])) {
    $halaman = $_GET['page'];
} else {
    $halaman = 'beranda.php';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS sendiri -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>

<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="?">Pelatihan Include</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="?">Beranda <span class="sr-only"></span></a>
                <a class="nav-link active" href="?page=gallery.php">Gallery<span class="sr-only"></span></a>
                <a class="nav-link active" href="?page=profile.php">Profile<span class="sr-only"></span></a>
                <a class="nav-link active" href="?page=fasilitas.php">Fasilitas<span class="sr-only"></span></a>
            </div>
        </div>
    </nav>

    <!-- Kontent -->
    <?php
    include $halaman;
    ?>

</body>

</html>