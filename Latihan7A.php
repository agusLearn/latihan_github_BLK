<?php 

// Input data Irwan
$buku = 25;
$harga = 12500;

echo "<h3>Soal Pertama ( 7A ) </h3>";

echo "Buku yang di beli : $buku <br>";
echo "Jumlah Harga Per-Buku : Rp.$harga <br>";

// Proses Data

// mendapatkan Total Harga
$totalHarga = $buku * $harga;
echo "Total Harga Buku  = Rp.<b>$totalHarga</b>";

echo "<br>";
// Diskon
if ($buku > 20) 
{
	$hargaPemebelian = $totalHarga - ($totalHarga*0.05);

	echo "Biaya Pembelian dengan Harga Diskon(%5)  = Rp.<b>$hargaPemebelian</b>";
}else{
	echo "Total Harga Buku  = Rp.<b>$totalHarga</b>";
}
