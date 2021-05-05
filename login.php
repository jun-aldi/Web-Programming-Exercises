<?php
    if (isset($_POST['submit'])){
        //ambil data dari form
        $username = $_POST['username'];
        echo $email = $_POST['email'];
        
        //setcookie username dan email
        setcookie("username", $username, time()+3*30*24*3600,"/");
        setcookie("email", $email, time()+3*30*24*3600,"/");

        //menuju awal.php
        header("Location:awal.php");
    }

?>