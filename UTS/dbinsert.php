    <?php
        include "dbconfig.php";
        //koneksi
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        //pengecekan koneksi
        if ($conn->connect_error){
            die("koneksi gagal".$conn->connect_error);
        } else {
            //membaca input dari form
            $username = $_COOKIE['username']; 
            $email = $_COOKIE['email'];
            $score=$_SESSION['score'];
            // query sql untuk insert data
            $query = "INSERT INTO midgame (username, email, score)
                    VALUES('$username', '$email', '$score')";

            //jalankan query
            $result = $conn->query($query);

        }

        //menutup koneksi 
        $conn->close();
    ?>