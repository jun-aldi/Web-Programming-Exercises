<?php
    include "dbconfig.php";
    //koneksi
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    //pengecekan koneksi
    if ($conn->connect_error){
        die("koneksi gagal".$conn->connect_error);
    } else {
        //membaca input dari form
        $id_kar=$_POST['id_kar'];
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $telepon=$_POST['telepon'];
        $alamat=$_POST['alamat'];
        $gender=$_POST['gender'];
        $tempat_lahir=$_POST['tempat_lahir'];
        $tanggal_lahir=$_POST['tanggal_lahir'];
        // query sql untuk insert data
        $query = "INSERT INTO karyawan(id_karyawan, nama, email, telepon, alamat, jenis_kelamin, tempat_lahir, tanggal_lahir)
                VALUES('$id_kar', '$nama', '$email', '$telepon', '$alamat', '$gender', '$tempat_lahir', '$tanggal_lahir')";

        //jalankan query
        $result = $conn->query($query);
        if ($result){
            echo "Insert data sukses";
            header("Location: index.php");

        }else{
            echo "Insert data gagal ".$conn->error;
        }

    }

    //menutup koneksi 
    $conn->close();
?>