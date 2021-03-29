<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container">
        <div class="card-login">
            <?php if (isset($_SESSION['login'])) : ?>
                <?php

                if ($_SESSION['login'] == 0) {
                ?>
                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                        <?= $_SESSION['pesan_login']; ?>
                    </div>
                <?php } ?>

            <?php endif; ?>




            <h3>Login Buku Tamu</h3>
            <hr>
            <form action="proses_login.php" method="POST">

                <label for="user">Username/Email</label>
                <input type="text" name="username" id="user">
                <label for="pass">Password</label>
                <input type="password" name="password" id="pass">
                <div class="group-show">
                    <input type="checkbox" id="check">
                    <label for="check">Show password</label>
                </div>
                <div class="group-button">
                    <button type="submit">login</button>
                </div>
            </form>





        </div>
    </div>

    <?php 
        unset($_SESSION['login']);
    ?>

    <!-- Library Javascript Online -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    
    <script>
         $('.alert').delay(500).fadeOut(8000);
    </script>

</body>

</html>