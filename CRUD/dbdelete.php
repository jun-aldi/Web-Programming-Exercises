<?php
    include "dbconfig.php";
    //koneksi
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    //pengecekan koneksi
    if ($conn->connect_error){
        die("koneksi gagal".$conn->connect_error);
    } else {
        //mendapat id karyawan yg akan dihapus
        $id_kar = $_GET['id_kar']; 
        $query = "DELETE FROM `karyawan` WHERE `karyawan`.`id_karyawan` = $id_kar";
        //jalankan query
        $result = $conn->query($query);
        $conn->close();
        //	Redirect kembali ke halaman utama 
        echo "data telah dihapus";
        header("Location: index.php");

    }
?>