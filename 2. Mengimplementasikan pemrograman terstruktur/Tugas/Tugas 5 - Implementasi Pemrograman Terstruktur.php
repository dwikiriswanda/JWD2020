<?php

$bilangan1 = 9;
$bilangan2 = 3;

function penjumlahan($bilangan1, $bilangan2) {
    $jumlah = $bilangan1 + $bilangan2; // menambahkan bilangan ke-1 dengan bilangan ke-2
    echo "hasil penjumlahan adalah : " . $jumlah;
}

function pengurangan($bilangan1, $bilangan2) {
    $kurang = $bilangan1 - $bilangan2; // mengurangi bilangan ke-1 dengan bilangan ke-2
    echo "hasil pengurangan adalah : " . $kurang;
}

function perkalian($bilangan1, $bilangan2) {
    $kali = $bilangan1 * $bilangan2; // mengalikan bilangan ke-1 dengan bilangan ke-2
    echo "hasil perkalian adalah : " . $kali;
}

function pembagian($bilangan1, $bilangan2) {
    $bagi = $bilangan1 / $bilangan2; // membagi bilangan ke-1 dengan bilangan ke-2
    echo "hasil pembagian adalah : " . $bagi;
}

echo "bilangan 1 : " . $bilangan1;
echo "<br>";
echo "bilangan 2 : " . $bilangan2;
echo "<hr> <hr>";
penjumlahan($bilangan1, $bilangan2); // memanggil fungsi penjumlahan dengan parameter bilangan1 dan bilangan2
echo "<br>";
pengurangan($bilangan1, $bilangan2); // memanggil fungsi pengurangan dengan parameter bilangan1 dan bilangan2
echo "<br>";
perkalian($bilangan1, $bilangan2); // memanggil fungsi perkalian dengan parameter bilangan1 dan bilangan2
echo "<br>";
pembagian($bilangan1, $bilangan2); // memanggil fungsi pembagian dengan parameter bilangan1 dan bilangan2

?>