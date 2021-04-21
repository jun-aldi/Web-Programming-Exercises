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
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tgllhr = $_POST['tgllhr'];
    $tmptlhr = $_POST['tmptlhr'];

    echo "NIM : " .$nim. "<br> NAMA : " .$nama. "<br> TANGGAL LAHIR : " .$tgllhr. "<br> TEMPAT LAHIR : " .$tmptlhr ; 
    $namaFile = "datamhs.dat";
    $myfile = fopen($namaFile, "a") or die("Tidak bisa buka file!");
    fwrite($myfile,$nim."|".$nama."|".$tgllhr."|".$tmptlhr."\n");
    fclose($myfile);

?>
</body>
</html>

