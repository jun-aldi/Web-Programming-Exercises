<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <style>
    table, th, td {
    border: 1px solid black;
    }
    </style>
</head>
<body>
    <h1>Data Karyawan</h1><br>
    <?php
       include 'dbconfig.php' ;
        //koneksi ke db
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        //melakukan pengecekan koneksi
        if ($conn->connect_error){
            die("koneksi gagal :".$conn->connect_error);
        }

        $query = "SELECT * FROM  karyawan ORDER BY id_karyawan";

        //menjalankan query
        $result= $conn->query($query);

        // pengecekan ada tidaknya hasil query
        if ($result->num_rows > 0){
            echo "<table class='table table-bordered'>";
            echo "<tr>
                    <th>NO</th>
                    <th>ID KARYAWAN</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>TELEPON</th>
                    <th>ALAMAT</th>
                    <th>GENDER</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ACTIONS</th>
                </tr>";
            //Menampilka semua baris data
            while ($data = $result->fetch_assoc()){
                settype($no, "integer");
                $no = ++$no;
                echo "<tr>
                        <td>".$no."</td>
                        <td>".$data['id_karyawan']."</td>
                        <td>".$data['nama']."</td>
                        <td>".$data['email']."</td>
                        <td>".$data['telepon']."</td>
                        <td>".$data['alamat']."</td>
                        <td>".$data['jenis_kelamin']."</td>
                        <td>".$data['tempat_lahir']."</td>
                        <td>".$data['tanggal_lahir']."</td>
                        <td><a href='dbedit.php?id_kar=$data[id_karyawan]'>Edit</a> | <a href='dbdelete.php?id_kar=$data[id_karyawan]'>Delete</a></td></tr>
                    </tr>";
            }
                echo "</table>";
        }else {
            echo "<p>data tidak ditemukan </p>";
        }
        //menutup koneksi mysql
        $conn->close();
    ?>
    <br>
    <a href="form.html">Tambah Data</a>
</body>
</html>