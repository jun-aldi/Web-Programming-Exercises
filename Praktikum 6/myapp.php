<?php

// bagian yang dieksekusi ketika pengunjung submit nama
if (isset($_POST['submit'])){
	// mengeset cookie username dari namanya, lama cookie 3 bulan
	setcookie("username", $_POST['username'], time()+3*30*24*3600,"/");
	// mengeset cookie jumlah kunjungan -> 0 (mula-mula)
	setcookie("visits", 0, time()+3*30*24*3600,"/");
	// mengeset cookie kunjungan terakhir
	setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600,"/");
    $vistcount= 1;
	// setelah mengeset cookie awal di atas, redirect ke halaman depan myapp.php
	header("Location:myapp.php");
}

// jika sudah ada cookie username
if (isset($_COOKIE['username'])){
	// tampilkan nama user, baca dari cookie
	echo "<p>Hallo selamat datang ".$_COOKIE['username']."</p>";
	// tampilkan jumlah kunjungan saat ini = jumlah visit sebelumnya + 1
    $visitcount = ++$_COOKIE['visits'];

	echo "<p>Ini kunjungan Anda yang ke-".($_COOKIE['visits'])."</p>";
	// tampilkan datetime kunjungan sebelumnya, baca dari cookie
	echo "<p>Kunjungan Anda sebelumnya adalah pada tanggal ".$_COOKIE['lastvisit']."</p>";

	// setelah cookie sebelumnya dibaca, lakukan update cookie yang baru
    setcookie("visits", $visitcount); 
	setcookie("username", $_COOKIE['username'], time()+3*30*24*3600,"/");
	setcookie("visits", $_COOKIE['visits'], time()+3*30*24*3600,"/");
	setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600,"/");
} else {
	// jika cookie username belum ada, munculkan form
?>
	<h1>Welcome to my site</h1>
	<p>Ini kunjungan Anda pertama kali di situs ini ya?</p>
	<p>Kita kenalan dulu ya, silakan masukkan nama Anda</p>
	<form method="post" action="myapp.php">
		Nama Anda <input type="text" name="username">
		<input type="submit" name="submit" value="Submit">
	</form>	
<?php	
}

?>
