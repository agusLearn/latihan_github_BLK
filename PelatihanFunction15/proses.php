<?php


// Proses Halaman Login
function cekLogin($nama, $password)
{
    if ($nama == "admin" && $password == "passwordpengguna") 
    {
        header("location:halamanPenjualan.php");
    } 
    else 
    {
        echo "<script>
                alert('Username dan Password Anda Masih Salah!!');
            </script>";
    }
}


// Proses Halaman Penjualan

$harga = 9000;
$diskon = 0.05;

function totalHarga($jumlahBeli){
    global $harga;

    $jmlTotalHarga = $harga * $jumlahBeli;
    
    return $jmlTotalHarga;
}

function totalDiskon($totalHarga, $jumlahBeli){
    global $diskon;
    if ($jumlahBeli > 36) {
        $jmlTotalDiskon = $totalHarga * $diskon;
    }else{
        $jmlTotalDiskon = $totalHarga * 0;
    }
   
    return $jmlTotalDiskon;
}

function totalBayar($totalHarga, $totalDiskon){
    $totalBayar = $totalHarga - $totalDiskon;
    return $totalBayar;
}