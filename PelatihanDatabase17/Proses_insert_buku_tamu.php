<?php
require_once "MySQL_connection.php";
session_start();

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];



$sqlCek = "SELECT * FROM tb_tamu WHERE email_tamu = '$email' ";
$result = $conn->query($sqlCek);

// Cek Email Sudah ada Atau Belum
if ($result->num_rows >= 1)
{
    $_SESSION['email_cek'] = 3;
    $_SESSION['email_message'] = "<strong>Email</strong> Sudah ada yang menggunakannya";
    header("location:Halaman_buku_tamu.php");
} else {

    //Perintah SQL
    $sql = "INSERT INTO tb_tamu VALUES('','$nama', '$email', '$pesan')";

    //Eksekusi Perintah
    if ($conn->query($sql) === true) {
        // header("location:Halaman_buku_tamu.php");
        $_SESSION['insert_alert'] = 1;
        $_SESSION['insert_message'] = "<strong>Berhasil!!!</strong> Data Sudah Disimpan";
        header("location:Halaman_buku_tamu.php");
    } else {
        $_SESSION['insert_alert'] = 0;
        $_SESSION['insert_message'] = "<strong>Gagal!!!</strong> Data Tidak Tersimpan";
        header("location:Halaman_buku_tamu.php");
    }
}
