<?php  


    // Perhitungan Luas dan Keliling Segitiga
    function luasSegi_tiga($panjangAlas, $tinggi){
        $luas_tiga = 0.5 * $panjangAlas * $tinggi;
        return $luas_tiga;
    }

    function keliling_segiTiga($a, $b, $c){
        $keliling_tiga = $a + $b + $c;
        return $keliling_tiga;
    }

    // Perhitungan Luas dan Keliling Lingkaran
    function luas_lingkaran($r){
       $lu_lingkaran = 3.14 * $r *$r;
       return $lu_lingkaran;
    }

    function keliling_lingkaran($r){
        $kel_lingkaran = 2*3.14*$r;

        return $kel_lingkaran;
    }


    // Perhitungan Jajaran Genjang
    function luas_jajaranGenjang($a, $t){
        $lu_jajarangGenjang = $a * $t;
        return $lu_jajarangGenjang;
    }

    function keliling_jajaranGenjang($a, $b){
        $kel_jajaranGenjang = (2 * $a) + (2 * $b);
        return $kel_jajaranGenjang;
    }


    // echo "Luas Segitiga             = ". luasSegi_tiga(10, 6). "</br>";
    // echo "Keliling Segitiga         = ". keliling_segiTiga(10, 6, 4). "</br>";
    // echo "Luas Lingkaran            = ". luas_lingkaran(10). "</br>";
    // echo "keliling Lingkaran        = ". keliling_lingkaran(10). "</br>";
    // echo "Luas Jajaran Genjang      = ". luas_jajaranGenjang(10, 20). "</br>";
    // echo "Keliling Jajarang Genjang = ". keliling_jajaranGenjang(10, 20);

