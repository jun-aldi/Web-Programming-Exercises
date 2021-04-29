<?php
    
    if (isset($_POST['submit'])){
        $tebakan = $_POST['tebakan'];
        setcookie("tebakan", $tebakan, time()+3*30*24*3600,"/");
        header("Location:tebakan.php");
    }

    if (isset($_COOKIE['tebakan'])){
        if ($_COOKIE['tebakan']==$_COOKIE['hasil']){
            echo "Selamat ya… Anda benar, saya telah memilih bilangan".$_COOKIE['hasil'];
            echo "<p><a href='logout_tebakan.php'>Ulangi</a></p>";
        }
        if($_COOKIE['tebakan']>$_COOKIE['hasil']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
            echo "bilangan tebakan anda....."
            ?>
                <form method="post" action="tebakan.php">
		            <input type="text" name="tebakan">
		            <input type="submit" name="submit" value="Submit">
                </form>
            <?php	
        }
        if($_COOKIE['tebakan']<$_COOKIE['hasil']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu kecil.";
            echo "bilangan tebakan anda....."
            ?>
                <form method="post" action="tebakan.php">
		            <input type="text" name="tebakan">
		            <input type="submit" name="submit" value="Submit">
                </form>
            <?php	
        }          
        }


?>