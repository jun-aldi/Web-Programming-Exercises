<html>
 	<head>Headings</head>
 	<body>
        <?php
            $baris = 4;
            $kolom = 5;
            $k = 1;
            echo "<table border='1'>";
            for($i =0; $i < $baris; $i++){
                echo "<tr>";
                for ($j = 0; $j < $kolom; $j++){
                    if ($k % 2 ==0) {
                        echo '<td style="color:white;background-color:red;">'.$k.'</td>'; //genap
                      } else {
                        echo '<td style="color:red;backgrond-color:white;">'.$k.'</td>'; //ganjil
                      }
                    $k++;
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
 	</body>
</html>