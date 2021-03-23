<?php include 'proses.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjualan</title>

    <style>
        * {
            font-family: sans-serif;
        }

        .card {
            width: 500px;
            height: 35  0px;
            border: 1px solid #ccc;
            padding: 40px;
            margin: auto;
            margin-top: 15%;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
        }

        input[type=number] {
            padding: 5px 0;
            padding-left: 10px;
            border: 1px solid #ccc;
            width: 100%;
            border-radius: 4px;
            box-shadow: 3px 3px 6px #ccc;
        }

        button[type=submit] {
            margin-top: 2px;
            padding: 8px 20px;
            background-color: rgba(0, 0, 255, 0.9);
            border: none;
            color: white;
            font-weight: bold;
            text-align: right;
        }

        button[type=submit]:hover {
            background-color: rgba(0, 0, 200, 1);
        }

        .card-hargaPenjualan{
            display: inline-block;
            margin-top: 10px;
        }

        a{
            text-decoration: none;
        }

        a button{
            display: block;
            padding: 7px 10px;
            background-color: rgba(0, 0, 255, 0.9);
            color: white;
            border: none;
        }
    </style>
</head>

<body>

    <?php

    if (isset($_POST['prosesPembelian'])) {
        $jumlahBeli = $_POST['jmlBeli'];

        $totalHarga = totalHarga($jumlahBeli);
        $totalDiskon = totalDiskon($totalHarga, $jumlahBeli);
        $totalBayar = totalBayar($totalHarga, $totalDiskon);
    }
    ?>


    <div class="card">
        <h1>Halaman Penjualan</h1>
        <form action="" method="post">
            <label for="pb">Jumlah Pembelian</label>
            <input type="number" min="0" name="jmlBeli">
            <br><br>
            <button type="submit" name="prosesPembelian">Pembelian</button>
        </form>


        <div class="card-hargaPenjualan">
            <p>Total Harga :
                <?php
                if (isset($totalHarga)) {
                    echo "Rp. " . number_format($totalHarga, 2, ',', '.');
                }
                ?>
            </p>
            <p>Dapat Diskon :
                <?php
                if (isset($totalDiskon)) {
                    echo  "Rp. " . number_format($totalDiskon, 2, ',', '.');
                }
                ?>
            </p>
            <p>Total Bayar :
                <?php
                if (isset($totalBayar)) {
                    echo "Rp. <b>" . number_format($totalBayar, 2, ',', '.') . "</b>";
                }
                ?>
            </p>
        </div>
        <a href="halamanLogin.php"><button>Kembali ke Halaman Login</button></a>
    </div>
</body>

</html>