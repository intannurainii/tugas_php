<?php

// Fungsi untuk menghitung luas persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

// Fungsi untuk menghitung luas lingkaran
function luasLingkaran($jariJari) {
    return M_PI * pow($jariJari, 2);
}

// Fungsi untuk menghitung luas segitiga
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Fungsi untuk menghitung luas jajar genjang
function luasJajarGenjang($alas, $tinggi) {
    return $alas * $tinggi;
}

// Fungsi untuk menghitung luas trapesium
function luasPersegi($a) {
    return $a * $a;
}

// penggunaan fungsi-fungsi di atas
$panjangPersegiPanjang = 9;
$lebarPersegiPanjang = 4;
echo "Luas Persegi Panjang " . luasPersegiPanjang($panjangPersegiPanjang, $lebarPersegiPanjang) . "<br>";

$jariJariLingkaran = 14;
echo "Luas Lingkaran: " . luasLingkaran($jariJariLingkaran) . "<br>";

$alasSegitiga = 7;
$tinggiSegitiga = 11;
echo "Luas Segitiga: " . luasSegitiga($alasSegitiga, $tinggiSegitiga) . "<br>";

$alasJajarGenjang = 6;
$tinggiJajarGenjang = 8;
echo "Luas Jajar Genjang: " . luasJajarGenjang($alasJajarGenjang, $tinggiJajarGenjang) . "<br>";

$aPersegi = 5;
echo "Luas Persegi: " . luasPersegi($aPersegi) . "<br>";

?>
