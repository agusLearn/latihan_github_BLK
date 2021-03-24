<?php 
    include 'myClass.php';
?>
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
        // Object Class / Instansiasi Class 
        $pesawatA = new PesawatTerbang('abu-abu');
        echo "Warna Pesawat Awal : ".$pesawatA->getWarna();

        echo "<br>";  
        
        // Proses pemanggilan method pertama pada Class pesawat di Myclass
        echo "Warna Pesawat : ".$pesawatA->gantiWarna('merah');

        echo "<br>"; 
            
        // melakukan set warna pada method set yang ada di file myClass.php
        $pesawatA->setWarna('Biru');
        echo "Warna Pesawat Baru : ". $pesawatA->getWarna();

        echo "<hr>";


        // Class Mobil
        $mobil = new Mobil('Hitam');
        echo "Warna Mobil Sekarang : ".$mobil->getWarna();
        echo "<br>";
        echo "Kecepatan Mobil A Sekarang : ".$mobil->getKecepatanMobil();
        
        echo "<br>";
        //Merubah warna Mobil dan Kecepatan Mobil menjadi 20km/jam
        $mobil->setWarna('Biru');
        $mobil->tambahKecepatan(20);
        echo "Perubahan Warna Mobil A : ".$mobil->getWarna();
        echo "<br>";
        echo "Kecepatan Mobil A Sekarang : ".$mobil->getKecepatanMobil()."  Km/j";

        echo "<br>";
        // Menambah Kecepatan mobil menjadi 50km/jam
        $mobil->tambahKecepatan(30);
        echo "Kecepatan Mobil A Sekarang : ".$mobil->getKecepatanMobil()."  Km/j";


        // Class Mobil Balap menggunakan Method yang ada di Class Mobil.
        echo '<br> <hr>';
        $mobilBalap = new MobilBalap("Biru");
        echo "Warna Mobil B : ". $mobilBalap->getWarna();
        echo '<br>';
        echo 'Kecepatan Mobil B : '. $mobilBalap->getKecepatanMobil();

        // Menambah Kecepatan Mobil B menggunakan method tambahKecepatan yang ada di Class Mobil
        echo '<br>';
        $mobilBalap->tambahKecepatan(20);

        echo 'Kecepatan Mobil B, Sekarang jadi : '.$mobilBalap->getKecepatanMobil();

        echo '<br>';
        $mobilBalap->tambahKecepatan(20);
        $mobilBalap->tambahKecepatan(30);
        echo 'Kecepatan Mobil B, Sekarang jadi : '.$mobilBalap->getKecepatanMobil();
        

    ?>
</body>
</html>