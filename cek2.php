<?php
if($_SESSION['lives']<=0){
	echo "<p><a href='logout.php'>Permainan sudah usai login lagi yah</p>";
	exit();
}
?>