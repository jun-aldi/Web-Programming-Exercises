<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="main.css">
    <link type="text/css" rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="asset/jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
	<title>MID GAME</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 text-center">
                <?php
                session_start();
                include 'cek.php';
                //variabel lives dan skor
                $lives=5;
                $score = 0;
                //set sesion
                $_SESSION['lives']=$lives;
                $_SESSION['score']=$score;
                echo "<h1> Hallo " .$_COOKIE['username']." Selamat datang kembali ke permainan ini</h1>";
                ?>
                <br>
                <a href="hitung.php"  class="btn btn-primary" style="margin-top: 3rem;">Start Game</a>
                <br>
                <p style="margin-top: 3rem;">Bukan anda ? <a href="logout.php">Klik disini</a></p>
            </div>
            <div class="col-lg-2"></div>
        </div>
    
    </div>
</body>
</html>