<?php 
    function hitungDenda(string $tglHaruskembali, string $tglKembali){
        $tglHaruskembali = strtotime($tglHaruskembali);
        $tglKembali = strtotime($tglKembali);
        $Denda = (($tglKembali - $tglHaruskembali)/60/60/24)*3000;
        return $Denda;
    }
    echo "Besarnya denda adalah: Rp ".hitungDenda("2021-01-03", "2021-01-05");
?>