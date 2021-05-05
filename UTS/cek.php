<?php

// mengecek keberadaan session 'namauser'
// ket: session 'namauser' akan tercreate ketika proses login sukses
// silakan cek kembali di script proses.php


if (!isset($_COOKIE['username'])){
	echo "<p><a href='index.html'>Login</a> dulu ya..</p>";

	// setelah memunculkan pesan di atas, selanjutnya dibreak dg exit()
	exit();
} 

?>
