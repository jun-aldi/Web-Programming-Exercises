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
            <div class="col-lg-8">
            <?php
            session_start();
            include 'cek.php';
            include 'cek2.php';
            echo "<p> Hello, ".$_COOKIE['username'].", sayang jawaban Anda salah… tetap semangat ya !!! </p>";
            echo "<p> Lives : ".$_SESSION['lives']." | Skor : " .$_SESSION['score']."</p> <br>";
            echo "<a href='hitung.php'>Soal Selanjutnya</a>"; 
            ?>
            </div>
            <div class="col-lg-4 text-center">
            <h1 class="text-center">Hall of Fame</h1>
                        <br>
                        <?php
                        include 'dbconfig.php';
                        
                        //koneksi ke db
                        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

                        //melakukan pengecekan koneksi
                        if ($conn->connect_error){
                            die("koneksi gagal :".$conn->connect_error);
                        }

                        $query = "SELECT * FROM  midgame ORDER BY score DESC LIMIT 10";

                        //menjalankan query
                        $result= $conn->query($query);

                        // pengecekan ada tidaknya hasil query
                        if ($result->num_rows > 0){
                            echo "<table class='table table-bordered'>";
                            echo "<tr>
                                    <th>Rank</th>
                                    <th>Username</th>
                                    <th>Score</th>
                                </tr>";

                            //Menampilka semua baris data
                            while ($data = $result->fetch_assoc()){
                                settype($rank, "integer");
                                $rank = ++$rank;
                                echo "<tr>
                                        <td>".$rank."</td>
                                        <td>".$data['username']."</td>
                                        <td>".$data['score']."</td>
                                    </tr>";
                            }
                                echo "</table>";
                        }else {
                            echo "<p>data tidak ditemukan </p>";
                        }
                        echo "<a href='logout.php' class='text-center'>LOGOUT</a>";
                        //menutup koneksi mysql
                        $conn->close();
                    ?>
            </div>
        </div>
    </div>
</body>
</html>