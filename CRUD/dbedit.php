<?php
    include "dbconfig.php";
    //koneksi
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    //pengecekan koneksi
    if ($conn->connect_error){
        die("koneksi gagal".$conn->connect_error);
    } else {
if(isset($_POST['update']))
 
{
    $id_kar=$_POST['id_kar'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $telepon=$_POST['telepon'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
// update	data

$query = "UPDATE karyawan SET id_karyawan='$id_kar', nama='$nama',email='$email',telepon='$telepon',alamat='$alamat',jenis_kelamin='$gender',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir' WHERE id_karyawan=$id_kar";
$result= $conn->query($query);
$conn->close();
//	Redirect kembali ke halaman utama 
header("Location: index.php");
}


//	Mengambil ID dan menampilkan data berdasarkan ID yang didapat 
$id_kar = $_GET['id_kar'];

//	Fetch user data

$query ="SELECT * FROM karyawan WHERE id_karyawan=$id_kar";
$result= $conn->query($query);
while($data = $result->fetch_assoc())

{
    $id_kar=$data['id_karyawan'];
    $nama=$data['nama'];
    $email=$data['email'];
    $telepon=$data['telepon'];
    $alamat=$data['alamat'];
    $gender=$data['jenis_kelamin'];
    $tempat_lahir=$data['tempat_lahir'];
    $tanggal_lahir=$data['tanggal_lahir'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form name="update_user" method="post" action="dbedit.php"> >
        <table width="25%" border="0">
            <tr>
                <td><label for="id_kar">ID Karyawan</label></td>
                <td><input type="number" id="id_kar" name="id_kar" required value=<?php echo $id_kar ?>> </td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" id="nama" name="nama" required value=<?php echo $nama ?>></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" id="email" name="email" required value=<?php echo $email ?>></td>
            </tr>
            <tr>
                <td><label for="telepon">Telepon</label></td>
                <td><input type="number" id="telepon" name="telepon" value=<?php echo $telepon ?>></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><textarea type="text" id="alamat" name="alamat" required> <?php echo $alamat ?></textarea></td>
            </tr>
            <tr>
                <td><p>Jenis Kelamin</p></td>
                <td>
                    <input type="radio" id="male" name="gender" value=<?php echo $gender ?>>
                    <label for="male">Pria</label>
                    <input type="radio" id="female" name="gender" value=<?php echo $gender  ?>>
                    <label for="female">Wanita</label>
                </td>
            </tr>
            <tr>
                <td><label for="tempat_lahir">Tempat Lahir</label></td>
                <td><input type="text" id="tempat_lahir" name="tempat_lahir" required value=<?php echo $tempat_lahir ?>></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" required value=<?php echo $tanggal_lahir?>></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>                            
      </form>
</body>
</html>
<?php
}
?>