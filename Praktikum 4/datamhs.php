<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

td,th{
  border: 1px solid #dddddd;
  text-align: center;
  padding: 4px;
}
</style>
<body>
    <?php
        $file="datamhs.dat";
        $myfile = fopen($file, "r") or die("Tidak bisa buka file!");
        echo  "<table border: '1px solid black'>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mhs</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Usia (Thn)<th>
        </tr>";
        $i= count(file($file));
        for ($x = 1; $x <= $i; $x++) {
            $line = fgets($myfile);
            $textparr = explode ("|", $line);
            echo "<tr>
            <td >$x</td>";
            echo "<td>$textparr[0] </td>";
            echo "<td>$textparr[1] </td>";
            echo "<td>$textparr[2] </td>";
            echo "<td>$textparr[3] </td>";
            $birthDate =explode ("-",$textparr[2]);
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md") ? ((date("Y")-$birthDate[0])-1):(date("Y")-$birthDate[0]));
            echo "<td>$age</td>";
        }
        
    echo "</table>";
    ?>

</body>
</html>