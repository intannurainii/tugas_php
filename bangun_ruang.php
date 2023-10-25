<?php

// Fungsi menghitung volume kubus
function volumeKubus($sisi) {
    return $sisi * $sisi * $sisi;
}

// Fungsi menghitung volume balok
function volumeBalok($panjang, $lebar, $tinggi) {
    return $panjang * $lebar * $tinggi;
}

// Fungsi menghitung volume tabung
function volumeTabung($jariJari, $tinggi) {
    return M_PI * pow($jariJari, 2) * $tinggi;
}

// penggunaan fungsi
$sisiKubus = 6;
$panjangBalok = 7;
$lebarBalok = 4;
$tinggiBalok = 6;
$jariJariTabung = 7;
$tinggiTabung = 13;

echo "Volume Kubus dengan sisi $sisiKubus: " . volumeKubus($sisiKubus) . "<br>";
echo "Volume Balok dengan panjang $panjangBalok, lebar $lebarBalok, dan tinggi $tinggiBalok: " . volumeBalok($panjangBalok, $lebarBalok, $tinggiBalok) . "<br>";
echo "Volume Tabung dengan jari-jari $jariJariTabung dan tinggi $tinggiTabung: " . volumeTabung($jariJariTabung, $tinggiTabung) . "<br>";

?>
