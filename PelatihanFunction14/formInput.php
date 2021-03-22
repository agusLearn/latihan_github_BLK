<?php
include 'functionSegitiga.php';
// var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Input untuk proses pada File FunctionSegitiga.php</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        input[type=number] {
            padding: 3px 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-control{
            width: 500px;
        }
        .tampilan {
            margin-top: 50px;
            width: 500px;
            background-color: rgba(120, 120, 120, 0.5);
            padding: 30px;
            border-radius: 10px;
            color: white;
        }

        button {
            padding: 3px 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button:hover {
            background-color: #3C415C;
            color: white;
        }
        #pilihHitungan {
            margin-bottom: 20px;
        }
        #lingkaran_, #jajaran_genjang_, #segiTiga_{
            display: none;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <h2>Form Input Perhitungan</h2>

        <select id="pilihHitungan" class="form-control" onchange="opsi()">
            <option value="rumus">Pilih Rumus Untuk Menghitunh Luas dan Keliling</option>
            <option value="lingkaran">Menghitung Luas dan Keliling Lingkaran</option>
            <option value="JajaranGenjang">Menghitung Luas dan Keliling Jajaran Genjang</option>
            <option value="SegiTiga">Menghitung Luas dan Keliling Segi Tiga</option>
        </select>

        <form action="" method="post">
            <div id="lingkaran_">
                <input type="number" name="r" min="0">
                <button type="submit" name="hitungLuasLingkaran">Hitung Luas Lingkaran</button>
                <button type="submit" name="hitungKelilingLingkaran">Hitung Keliling Lingkaran</button>
            </div>

            <div id="jajaran_genjang_">
                <input type="number" name="a" min="0">
                <input type="number" name="t" min="0">
                <button type="submit" name="luasJajaranGenjang">Hitung Luas Jajaran Genjang</button>
                <button type="submit" name="kelilingJajaranGenjang">Hitung Keliling Jajaran Genjang</button>
            </div>

            <div id="segiTiga_">
                <input type="number" name="panjangAlas" min="0">
                <input type="number" name="tinggi" min="0">
                <input type="number" name="c" min="0">
                <button type="submit" name="luasSegiTiga">Hitung Luas Segi Tiga</button>
                <button type="submit" name="kelilingSegiTiga">Hitung Keliling Segi Tiga</button>
            </div>

        </form>

        <div class="tampilan">
            <?php
            if (isset($_POST['hitungLuasLingkaran'])) {
                $r = $_POST['r'];
                echo "Luas Lingkaran Dengan Jajari $r Adalah = " . luas_lingkaran($r);
            } 
            else if (isset($_POST['hitungKelilingLingkaran'])) {
                $r = $_POST['r'];
                echo "Luas Lingkaran Dengan Jajari $r Adalah = " . keliling_lingkaran($r);
            } 
            else if (isset($_POST['luasJajaranGenjang'])) {
                $a = $_POST['a'];
                $t = $_POST['t'];
                echo "Luas Jajaran Genjang Dengan Nilai A : $a dan Nilai t : $t Adalah = " . luas_jajaranGenjang($a, $t);
            } 
            else if (isset($_POST['kelilingJajaranGenjang'])) {
                $a = $_POST['a'];
                $t = $_POST['t'];
                echo "Keliling Jajaran Genjang Dengan Nilai A : $a dan Nilai Tinggi : $t Adalah = " . keliling_jajaranGenjang($a, $t);
            } 
            else if (isset($_POST['luasSegiTiga'])) {
                $panjangAlas = $_POST['panjangAlas'];
                $tinggi = $_POST['tinggi'];
                echo "Luas Segi Tiga Dengan Nilai Panjang Alas : $panjangAlas dan Nilai Tinggi : $tinggi Adalah = " . luasSegi_tiga($panjangAlas, $tinggi);
            } 
            else if (isset($_POST['kelilingSegiTiga'])) {
                $panjangAlas = $_POST['panjangAlas'];
                $tinggi = $_POST['tinggi'];
                $c = $_POST['c'];
                echo "Keliling Segi Tiga Dengan Nilai Panjang Alas-nya : $panjangAlas, Tinggi-nya : $tinggi, dan Jari - Jarinya : $c Adalah = " . keliling_segiTiga($panjangAlas, $tinggi, $c);
            }
            ?>
        </div>
    </div>

    <script>

        function opsi() {

            var testing = document.getElementById('pilihHitungan').value;

            if (testing == 'lingkaran') {
                document.getElementById("lingkaran_").style.display = "block";
                document.getElementById("jajaran_genjang_").style.display = "none";
                document.getElementById("segiTiga_").style.display = "none";
            } 
            else if(testing == 'JajaranGenjang'){
                document.getElementById("lingkaran_").style.display = "none";
                document.getElementById("jajaran_genjang_").style.display = "block";
                document.getElementById("segiTiga_").style.display = "none";
            }else if(testing == 'SegiTiga'){
                document.getElementById("lingkaran_").style.display = "none";
                document.getElementById("jajaran_genjang_").style.display = "none";
                document.getElementById("segiTiga_").style.display = "block";
            } 
        }
    </script>


</body>

</html>