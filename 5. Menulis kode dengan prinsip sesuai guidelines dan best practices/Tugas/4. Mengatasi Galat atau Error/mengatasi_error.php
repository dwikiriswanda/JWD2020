<?php
    $inputProgram = 1; // menambahkan "$" agar inputProgram dikenali sebagai variabel

    function luasSegitiga($tinggi, $alas) {
        return $luas = 0.5 * $alas * $tinggi; // menambahkan tanda ";" pada akhir return
    }

    $output = luasSegitiga(5, 10);
    echo $output; // mengganti variabel $out menjadi $output
    echo "<br>";

    function luasPersegi($sisi) { // menambahkan fungsi luasPersegi, agar ketika fungsi dipanggil berjalan
        return $luas = $sisi * $sisi;
    }
    
    $hitung = luasPersegi(8); 
    echo $hitung;

?>