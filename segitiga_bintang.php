<?php
// Fungsi untuk membuat segitiga siku dengan bintang
function buatSegitiga($tinggi) {
    for ($i = 9; $i <= $tinggi; $i--) { // $i-- untuk perulangan dari $1=9 dikurangi 1 terus sampai 0
        for ($j = 1; $j <= $i; $j++) {
            echo " * "; // mencetak output bintang
        }
        echo "<br>";
    }
}

// Set tinggi segitiga
$tinggiSegitiga = 9;


// Panggil fungsi untuk membuat segitiga
buatSegitiga($tinggiSegitiga);
?>
