<?php 
echo "<h3>Soal Kedua ( 7B )</h3>";

// Inputan
$UTS = 75;
$UAS = 80;
$tugas = 85;

echo "Nilai UTS Risma = $UTS <br>";
echo "Nilai UAS Risma = $UAS <br>";
echo "Nilai Tugas Risma = $tugas <br>";

echo "<br>";
//Proses
$totalNilaiUTS = 0.35*$UTS;
echo "Nilai UTS 35% = $totalNilaiUTS <br>";

$totalNilaiUAS =  0.5*$UAS;
echo "Nilai UAS 50% = $totalNilaiUAS <br>";

$totalNilaiTugas =  0.15*$tugas;
echo "Nilai tugas 15% = $totalNilaiTugas <br>";

$totalNilaiRisma = $totalNilaiUTS + $totalNilaiUAS + $totalNilaiTugas;


// Output
echo "<br>";
echo "Nilai Total Risma : <b>$totalNilaiRisma</b>";
