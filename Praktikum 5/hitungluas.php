<?php
    $nama = $_GET['n'];
    $diameter = $_GET['d'];
    $tinggi = $_GET['t'];
    $phi = 22/7;


    $luasTabung = round(((pi() * $diameter) * $tinggi) + ((pi() * ($diameter ** 2)) / 4), 2);

    echo "luas tabung " .$nama. " dengan diamter " .$diameter. " dan tinggi " .$tinggi. " adalah " .$luasTabung. " satuan luas.";
?>