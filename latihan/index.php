<?php
// Menandai awal script PHP

echo "Hello, World!"; // Menampilkan teks Hello, World! ke browser

echo "<br>Welcome to my website."; // Menampilkan teks Welcome to my website.

// Deklarasi variabel dan pemberian nilai
$nama = "Mahardi"; // Variabel string untuk menyimpan nama
$umur = 25; // Variabel integer untuk menyimpan umur
$tinggi = 175.5; // Variabel float/desimal untuk menyimpan tinggi badan
$kelas = "XII RPL 1"; // Variabel string untuk menyimpan kelas

// Menampilkan kalimat lengkap dengan isi variabel
echo "<br>Nama saya $nama,<br> umur saya $umur tahun, <br>tinggi saya $tinggi cm,<br> dan saya berada di kelas $kelas.";

// Akhir script PHP
echo "<br> <br>=================================================================<br>";
$nilai1 = 82; // Nilai pertama
$nilai2 = 90; // Nilai kedua
$nilai3 = 78; // Nilai ketiga


$hasil_total = ($nilai1 + $nilai2 + $nilai3); // Menghitung total nilai
echo "<br>Total nilai: $hasil_total"; // Menampilkan hasil total nilai

$hasil_akhir = ($nilai1 * 0.3) + ($nilai2 * 0.4) + ($nilai3 * 0.3); // Menghitung nilai akhir dengan bobot
echo "<br>Nilai akhir: $hasil_akhir"; // Menampilkan hasil nilai akhir

$hasil_rata = ($nilai1 + $nilai2 + $nilai3) / 3; // Menghitung rata-rata nilai
echo "<br>Rata-rata nilai: $hasil_rata <br>"; // Menampilkan hasil rata-rata nilai

// Kondisi jika hasil rata-rata lebih dari 100 dengan keadaan ganjil dan genap
if ($hasil_total > 100) {
    $rata_int = round($hasil_total); // Membulatkan rata-rata ke integer
    if ($rata_int % 2 == 0) {
        echo "<br>Rata-rata lebih dari 100 dan genap: $rata_int";
    } else {
        echo "<br>Rata-rata lebih dari 100 dan ganjil: $rata_int";
    }
}

echo"<br><br>Nilai rata-rata: $hasil_rata"; 
if ($hasil_rata >= 90) {
    echo "<br>Grade: A"; // Menampilkan grade A jika nilai rata-rata 90 atau lebih
} elseif ($hasil_rata >= 80) {
    echo "<br>Grade: B"; // Menampilkan grade B jika nilai rata-rata 80 atau lebih
} elseif ($hasil_rata >= 70) {
    echo "<br>Grade: C"; // Menampilkan grade C jika nilai rata-rata 70 atau lebih
} elseif ($hasil_rata >= 60) {
    echo "<br>Grade: D"; // Menampilkan grade D jika nilai rata-rata 60 atau lebih
} else {
    echo "<br>Grade: E"; // Menampilkan grade E jika nilai rata-rata kurang dari 60
}

echo "<br><br>nilai akhir :$hasil_akhir";
if ($hasil_akhir >= 90) {
    echo "<br>Grade: A"; // Menampilkan grade A jika nilai akhir 90 atau lebih
} elseif ($hasil_akhir >= 80) {
    echo "<br>Grade: B"; // Menampilkan grade B jika nilai akhir 80 atau lebih
} elseif ($hasil_akhir >= 70) {
    echo "<br>Grade: C"; // Menampilkan grade C jika nilai akhir 70 atau lebih
} elseif ($hasil_akhir >= 60) {
    echo "<br>Grade: D"; // Menampilkan grade D jika nilai akhir 60 atau lebih
} else {
    echo "<br>Grade: E"; // Menampilkan grade E jika nilai akhir kurang dari 60
}

?>