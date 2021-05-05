<?php
session_start();
include 'cek.php';
include 'cek2.php';
if (isset($_POST['submit'])){
    $jawaban = $_POST['jawaban'];
    //if jawaban benar
    if($jawaban == $_SESSION['hasil'] && $_SESSION['lives']>0){
        //penambahan skore dan lives
        $_SESSION['score']=10+$_SESSION['score'];
        header("Location:benar.php");
        //if jawaban salah
    }else if ($jawaban != $_SESSION['hasil']) {
        //pengurangan skore dan lives
        $_SESSION['score']=$_SESSION['score']-5;
        $_SESSION['lives']=$_SESSION['lives']-1;
            if($_SESSION['lives']==0){
                header("Location:gameover.php");      
            }else {
                header("Location:salah.php");      
            } 

            }
} 
?>