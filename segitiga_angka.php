<?php
$rows = 8; // Jumlah baris segitiga

// Looping untuk membuat segitiga siku
for ($i = 0; $i <= $rows; $i++) { // perulangan $i++ untuk menambah satu secara berulang dari 0 sampai 8
    for ($j = 0; $j <= $i; $j++) {
        echo $j . " "; // output segitiga supaya angka
    }
    echo "<br>"; // break agar setiap perulangan ada enternya
}
?>
