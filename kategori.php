<?php

// Fungsi menghitung BMI
function hitungBMI($berat, $tinggi) {
    // Konversi tinggi dari cm ke meter
    $tinggiMeter = $tinggi / 100;

    // Hitung BMI
    $bmi = $berat / ($tinggiMeter * $tinggiMeter);

    return $bmi;
}

// Fungsi menentukan kategori BMI
function kategoriBMI($bmi) {
    if ($bmi < 18.5) {
        return "Kurus";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        return "Sedang";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        return "Gemuk";
    } else {
        return "Obesitas";
    }
}

// Contoh penggunaan
$nama = "Intan Nur'aini";
$berat = 50; // dalam kilogram
$tinggi = 155; // dalam centimeter


$bmi = hitungBMI($berat, $tinggi);
$kategori = kategoriBMI($bmi);

echo "Halooo $nama ";
echo "Nilai BMI Anda adalah " . $bmi . "\n";
echo "Anda termasuk $kategori";

?>
