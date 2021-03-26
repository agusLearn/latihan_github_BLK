<?php include 'classLingkaran.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 30px;
            text-align: center;
        }

        .container {
            width: 30%;
            margin: auto;
        }

        .card {
            width: 100%;
            border: 1px solid #ccc;
            padding: 14px 16px;
            margin: auto;
            margin-top: 30px;
            box-shadow: 2px 2px 6px #ccc;
        }

        input[type=number] {
            width: 100%;
            margin-bottom: 15px;
            margin-top: 20px;
            padding: 6px 10px;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 6px #ccc;
        }

        button[type=submit] {
            padding: 10px 13px;
            color: white;
            background-color: teal;
            border: none;
        }

        .jawabannya {
            margin-top: 30px;
            background-color: sandybrown;
            width: 100%;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <h1>Form Hitung Keliling dan Luas Lingkaran</h1>
            <form action="" method="post">
                <input type="number" name="jari-jari" min="0" required>
                <button type="submit" name="hitungKeliling">Hitung Keliling</button>
                <button type="submit" name="hitungLuas">Hitung Luas</button>
                <button type="submit" name="kelilingLuas">Hitung Keliling dan Luas</button>
            </form>

            <div class="jawabannya">
               <p>
                   Nilai Jari - Jarinya : 
                    <?php if (isset($_POST['jari-jari'])) {
                       echo $_POST['jari-jari'];
                    }  ?>
                </p>

                <?php  
                    if (isset($_POST['jari-jari'])) {
                        $lingkaran = new Lingkaran($_POST['jari-jari']);
                    }
                ?>

                <?php if(isset($_POST['hitungKeliling'])): ?>
                    Jumlah Keliling Lingkaran : <?php echo $lingkaran->getKeliling(); ?>
                <?php endif ?>

                <?php if(isset($_POST['hitungLuas'])): ?>
                    Jumlah Luas Lingkaran : <?php echo $lingkaran->getLuas(); ?>
                <?php endif ?>

                <?php if(isset($_POST['kelilingLuas'])): ?>
                    Jumlah Keliling Lingkaran : <?php echo $lingkaran->getKeliling(); ?><br>
                    Jumlah Luas Lingkaran : <?php echo $lingkaran->getLuas(); ?>
                <?php endif ?>
            </div>
        </div>
    </div>


</body>

</html>