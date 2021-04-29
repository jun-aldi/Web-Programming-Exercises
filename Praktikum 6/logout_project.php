<?php
                //menghilangkan cookies yang telah terdaftar
                setcookie("username", $username, time()-3*30*24*3600,"/");
                setcookie("password", $password, time()-3*30*24*3600,"/");
                setcookie('namauser', $profile_user[1], time()-3*30*24*3600,"/");
?>