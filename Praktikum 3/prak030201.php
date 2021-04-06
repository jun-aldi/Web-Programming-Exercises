<?php
function hitungGaji(string $gol, int $masaKerja){
    if ($gol == "a"){
         if ($masaKerja < 10) {
            $gaji = 5000000;
         } else {
             $gaji = 7000000;
         }
    } else if ($gol == "b"){
            if ($masaKerja < 10) {
                $gaji = 6000000;
             } else {
                 $gaji = 8000000;
             }
         }
return $gaji;
}
echo hitungGaji("a",8);
?>