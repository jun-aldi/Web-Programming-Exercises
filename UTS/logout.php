<?php
                $_COOKIE['username'] = $username;
                $_COOKIE['email'] = $email;
                session_start();
                //hapus cookies
                session_destroy();
                //menghilangkan cookies yang telah terdaftar
                setcookie("username", $username, time()-3*30*24*3600,"/");
                setcookie("email", $email, time()-3*30*24*3600,"/");
                header("Location:index.html");
?>