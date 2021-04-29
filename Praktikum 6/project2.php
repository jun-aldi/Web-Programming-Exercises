<?php
    echo "Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!";
    $hasil = rand(0,100);
    setcookie("hasil", $hasil, time()+3*30*24*3600,"/");
    echo $hasil;
    echo "bilangan tebakan anda.....";

    

?>
	<form method="post" action="tebakan.php">
		<input type="text" name="tebakan">
		<input type="submit" name="submit" value="Submit">
    </form>