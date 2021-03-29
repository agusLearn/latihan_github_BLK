<?php 
include 'MySQL_connection.php';
session_start();


$user = $_POST['username'];
$pass = $_POST['password'];

$cekDataUser = "SELECT * FROM tb_users WHERE name_user = '$user' OR email_user = '$user' AND pass_user = '$pass' ";


$result = $conn->query($cekDataUser);

if ($result->num_rows > 0) {
    $_SESSION['login'] = 1;
    $_SESSION['pesan_login'] = 'Selamat Datang Admin. Ingat Program Jokowi, KERJA KERJA KERJA, selamat kerja :D ';
    header("location: Halaman_buku_tamu.php");
}else{
    $_SESSION['login'] = 0;
    $_SESSION['pesan_login'] = 'Gagal Login Kamu Bro, Login Ulang Sana Gih';
    header("location: halamanLogin.php");
}
