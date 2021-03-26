<?php
    require_once "MySQL_connection.php";

$id = $_GET['idTamu'];

    //Perintah SQL
    $sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

    //Eksekusi Perintah
    if($conn->query($sql) === true){
        // header("location:Halaman_buku_tamu.php");
        header("location:Halaman_buku_tamu.php");
    }else {
        header("location:Halaman_buku_tamu.php");
    }

?>