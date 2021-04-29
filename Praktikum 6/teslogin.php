<?php

// daftar users
$users = array(
			array("username1", "Rosihan Ari Yuana", "123456"),
			array("username2", "Dwi Amalia Fitriani", "654321"),
			array("username3", "Faza Fauzan Khosyiyarrohman", "112233")
		 );

// jika form login sudah submitted
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	foreach ($users as $profile_user) {
		if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
			// jika ada yg match maka bikin cookies untuk simpan nama user
            setcookie("username", $username, time()+3*30*24*3600,"/");
            setcookie("password", $password, time()+3*30*24*3600,"/");
            setcookie('namauser', $profile_user[1], time()+3*30*24*3600,"/");
            header("Location:halaman1.php");
		}
	}

	// jika tidak ada username dan password yg match
	echo "<h3>Login gagal</h3>";
	echo "<p>Silakan <a href='form.html'>login kembali</a></p>";
}

?>
