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
                    echo "<td>$k</td>";
                    $k++;
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
 	</body>
</html>