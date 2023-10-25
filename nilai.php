<?php

// Fungsi menentukan kategori nilai
function kategoriNilai($nilai) {
    if ($nilai >= 90 && $nilai <= 100) {
        return "A";
    } elseif ($nilai >= 80 && $nilai < 90) {
        return "B";
    } elseif ($nilai >= 70 && $nilai < 80) {
        return "C";
    } else {
        return "D";
    }
}

// Variabel Nama dan Nilai
$nama = "Intan Nur'aini";
$nilai = 91;

// Tentukan kategori nilai
$kategorinilai = kategoriNilai($nilai);

// Tampilkan hasil
echo "Nama: $nama" ."<br>";
echo "Nilai: $nilai" . "<br>";
echo "Kategori Nilai: $kategorinilai";

?>
