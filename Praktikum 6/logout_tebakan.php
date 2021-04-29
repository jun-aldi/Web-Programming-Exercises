<?php
                //menghilangkan cookies yang telah terdaftar
                setcookie("hasil", $hasil, time()-3*30*24*3600,"/");
                setcookie("tebakan", $tebakan, time()-3*30*24*3600,"/");
                header("Location:project2.php");
?>