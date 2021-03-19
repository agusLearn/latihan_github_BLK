<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body{
            width: 100%;
        }
        h5{
           text-align: center;
        }
        .tombol-Tengah {
            margin-top: 20px;
            margin-left: 100px;
            
        }
    </style>
    <title>Calculator</title>
</head>

<body>

    <h5>Cara Membuat Calculator Menggunakan javascript dan Tag Input,Button</h5>
    <div class="card" style="width: 30rem;">

        <div class="card-body">
            <div class="form-row align-items-center card-title">
                <!-- Form Angka Pertama -->
                <div class="col-auto">
                    <input type="number" class="form-control mb-2" id="angka1">
                </div>
                <!-- Operator -->
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div id="jenisOperator"></div>
                        </div>
                    </div>
                </div>
                <!-- Form Angka Kedua -->
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <input type="number" class="form-control" id="angka2">
                    </div>
                </div>
            </div>
            <input class="form-control card-subtitle mb-2 text-muted" type="text" id="Hasilnya" readonly>

            <div class="form-row align-items-center tombol-Tengah">

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2" id="operator" onclick="tambah()">+</button>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2" id="operator" onclick="kurang()">-</button>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2" id="operator" onclick="kali()">x</button>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2" id="operator" onclick="bagi()">/</button>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2" id="operator" onclick="hapus()">C</button>
                </div>
            </div>
        </div>
    </div>

    </div>



    <!-- JavaScript Buatan Sendiri -->

    <script>
        function tambah() {
            var angka1 = document.getElementById('angka1').value;
            var angka2 = document.getElementById('angka2').value;

            var HasilPerhitungan;

            HasilPerhitungan = parseInt(angka1) + parseInt(angka2);
            document.getElementById('jenisOperator').innerHTML = '+';

            document.getElementById('Hasilnya').value = HasilPerhitungan;
        }


        function kurang() {
            var angka1 = document.getElementById('angka1').value;
            var angka2 = document.getElementById('angka2').value;

            var HasilPerhitungan;
            HasilPerhitungan = parseInt(angka1) - parseInt(angka2);
            document.getElementById('jenisOperator').innerHTML = '-';

            document.getElementById('Hasilnya').value = HasilPerhitungan;
        }

        function kali() {
            var angka1 = document.getElementById('angka1').value;
            var angka2 = document.getElementById('angka2').value;

            var HasilPerhitungan;
            HasilPerhitungan = parseInt(angka1) * parseInt(angka2);
            document.getElementById('jenisOperator').innerHTML = '*';

            document.getElementById('Hasilnya').value = HasilPerhitungan;
        }

        function bagi() {
            var angka1 = document.getElementById('angka1').value;
            var angka2 = document.getElementById('angka2').value;

            var HasilPerhitungan;
            HasilPerhitungan = parseInt(angka1) / parseInt(angka2);
            document.getElementById('jenisOperator').innerHTML = '/';

            document.getElementById('Hasilnya').value = HasilPerhitungan;
        }

        function hapus() {
            document.getElementById('angka1').value = '';
            document.getElementById('angka2').value = '';
            document.getElementById('jenisOperator').innerHTML = '';
            document.getElementById('Hasilnya').value = '';
        }
    </script>


    <!-- Library Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>