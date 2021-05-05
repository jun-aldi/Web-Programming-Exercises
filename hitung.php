<?php
                    session_start();
                    include "cek.php";
                    $bil1 = rand(0,20);
                    $bil2 = rand(0,20);
                    $hasil = $bil1 + $bil2;
                    $_SESSION['hasil'] = $hasil; 
                    $_SESSION['bil1'] = $bil1;
                    $_SESSION['bil2'] = $bil2;
                    header("Location:game.php");
?>