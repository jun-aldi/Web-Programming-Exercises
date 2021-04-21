<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Lingkaran</title>
</head>
<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
     border: 1px solid #dddddd;
    text-align: left;
    padding: 2px;
    }
</style>
<body>
<?php
        $file="datatabung.dat";
        $myfile = fopen($file, "r") or die("Tidak bisa buka file!");
        echo  "<table border: '1px solid black'>
        <tr>
            <th>NAMA TABUNG</th>
            <th>DIAMETER</th>
            <th>TINGGI</th>
            <th>LUAS</th>
        </tr>";
        $i= count(file($file));
        for ($x = 1; $x <= $i; $x++) {
            $line = fgets($myfile);
            $textparr = explode (",", $line);
            $link ="http://localhost/praktikum%205/hitungluas.php?n=$textparr[0]&d=$textparr[1]&t=$textparr[2]";
            echo "<tr>
            <td >$textparr[0]</td>";
            echo "<td>$textparr[1] </td>";
            echo "<td>$textparr[2] </td>";
            echo '<td><a href='.$link.'>view</a></td>';
            //echo "<td>$textparr[3] </td>";
         }
        
    echo "</table>";
    ?>
    
</body>
</html>