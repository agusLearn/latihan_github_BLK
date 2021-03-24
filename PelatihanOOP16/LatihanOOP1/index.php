<?php include 'classLingkaran.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $lingkaran = new Lingkaran(5);

        echo 'Keliling Lingkaran : '. $lingkaran->getKeliling();
        echo '<br>';
        echo 'Luas Lingkaran : '.$lingkaran->getLuas();
        
        // Set Jari Jari Lingkaran
        echo '<br>';
        $lingkaran->setJariLingkaran(10);
        echo 'Keliling Lingkaran : '. $lingkaran->getKeliling();
        echo '<br>';
        echo 'Luas Lingkaran : '.$lingkaran->getLuas();
    
    ?>

</body>
</html>