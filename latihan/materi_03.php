<?php
echo "<h1>Materi Function di PHP</h1>";
echo "<p>Berikut adalah berbagai contoh penggunaan function dalam PHP:</p><br>";

// 1. Function sederhana tanpa parameter
echo "<h2>1. Function Sederhana Tanpa Parameter</h2>";
function sapa() {
    echo "Halo, selamat datang di materi function!<br>";
}

// Memanggil function
sapa();

echo "<br><br>";

// 2. Function dengan parameter
echo "<h2>2. Function Dengan Parameter</h2>";
function sapaNama($nama) {
    echo "Halo, $nama! Selamat belajar PHP.<br>";
}

// Memanggil function dengan parameter
sapaNama("Andi");
sapaNama("Budi");

echo "<br><br>";

// 3. Function dengan return value
echo "<h2>3. Function Dengan Return Value</h2>";
function tambah($a, $b) {
    return $a + $b;
}

// Menggunakan return value
$hasil = tambah(5, 3);
echo "Hasil penjumlahan 5 + 3 = $hasil<br>";

echo "<br><br>";

// 4. Function dengan parameter default
echo "<h2>4. Function Dengan Parameter Default</h2>";
function hitungLuas($panjang, $lebar = 10) {
    return $panjang * $lebar;
}

echo "Luas dengan panjang 5, lebar default = " . hitungLuas(5) . "<br>";
echo "Luas dengan panjang 5, lebar 8 = " . hitungLuas(5, 8) . "<br>";

echo "<br><br>";

// 5. Function rekursif (contoh faktorial)
echo "<h2>5. Function Rekursif (Contoh Faktorial)</h2>";
function faktorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}

echo "Faktorial 5 = " . faktorial(5) . "<br>";

echo "<br><br>";

// 6. Function dengan reference parameter
echo "<h2>6. Function Dengan Reference Parameter</h2>";
function tambahSatu(&$nilai) {
    $nilai++;
}

$x = 10;
echo "Nilai x sebelum: $x<br>";
tambahSatu($x);
echo "Nilai x setelah: $x<br>";

echo "<br><br>";

// 7. Variable scope dalam function
echo "<h2>7. Variable Scope Dalam Function</h2>";
function testScope() {
    $local = "Ini variable lokal";
    echo $local . "<br>";
    global $globalVar;
    echo "Global var: $globalVar<br>";
}

$globalVar = "Ini variable global";
testScope();

echo "<br><br>";

// 8. Anonymous function (closure)
echo "<h2>8. Anonymous Function (Closure)</h2>";
$anonymous = function($nama) {
    return "Halo dari anonymous function, $nama!<br>";
};

echo $anonymous("User");

echo "<br><br>";

// 9. Arrow function (PHP 7.4+)
echo "<h2>9. Arrow Function (PHP 7.4+)</h2>";
$arrow = fn($a, $b) => $a + $b;
echo "Arrow function: 7 + 3 = " . $arrow(7, 3) . "<br>";

echo "<br><br>";

// 10. Function dengan type declarations
echo "<h2>10. Function Dengan Type Declarations</h2>";
function bagi(float $a, float $b): float {
    if ($b == 0) {
        throw new DivisionByZeroError("Tidak bisa dibagi nol");
    }
    return $a / $b;
}

try {
    echo "10 dibagi 2 = " . bagi(10, 2) . "<br>";
    // echo "10 dibagi 0 = " . bagi(10, 0) . "<br>"; // Akan throw error
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

echo "<br><br>";

// 11. Variadic function (parameter bervariasi)
echo "<h2>11. Variadic Function (Parameter Bervariasi)</h2>";
function jumlahkan(...$angka) {
    return array_sum($angka);
}

echo "Jumlah 1+2+3+4+5 = " . jumlahkan(1, 2, 3, 4, 5) . "<br>";

echo "<br><br>";

// 12. Named parameters (PHP 8.0+)
echo "<h2>12. Named Parameters (PHP 8.0+)</h2>";
function buatProfil($nama, $umur = 18, $kota = "Jakarta") {
    return "Nama: $nama, Umur: $umur, Kota: $kota<br>";
}

echo buatProfil(nama: "Siti", kota: "Bandung", umur: 25);
echo buatProfil(nama: "Rudi"); // menggunakan default values

echo "<br><br>";

// 13. Generator function
echo "<h2>13. Generator Function</h2>";
function generateAngka($max) {
    for ($i = 1; $i <= $max; $i++) {
        yield $i;
    }
}

echo "Generator: ";
foreach (generateAngka(5) as $angka) {
    echo $angka . " ";
}
echo "<br>";

echo "<br><br>";

// 14. Callback function
echo "<h2>14. Callback Function</h2>";
function prosesArray($array, $callback) {
    $hasil = [];
    foreach ($array as $item) {
        $hasil[] = $callback($item);
    }
    return $hasil;
}

$data = [1, 2, 3, 4, 5];
$kuadrat = prosesArray($data, function($x) { return $x * $x; });
echo "Kuadrat dari array: " . implode(", ", $kuadrat) . "<br>";

echo "<br><br>";

// 15. Built-in functions examples
echo "<h2>15. Built-in Functions Examples</h2>";
$numbers = [10, 5, 8, 12, 3];
echo "Array asli: " . implode(", ", $numbers) . "<br>";
echo "Max: " . max($numbers) . "<br>";
echo "Min: " . min($numbers) . "<br>";
echo "Sum: " . array_sum($numbers) . "<br>";
echo "Average: " . (array_sum($numbers) / count($numbers)) . "<br>";
echo "Sorted: " . implode(", ", $numbers) . "<br>"; // array_sort mengubah array asli

echo "<br><br>";

// 16. Function dengan static variable
echo "<h2>16. Function Dengan Static Variable</h2>";
function counter() {
    static $count = 0;
    $count++;
    return $count;
}

echo "Counter: " . counter() . "<br>";
echo "Counter: " . counter() . "<br>";
echo "Counter: " . counter() . "<br>";

echo "<br><br>";

// 17. Function overloading simulation dengan func_get_args
echo "<h2>17. Function Overloading Simulation Dengan func_get_args</h2>";
function operasiMatematika() {
    $args = func_get_args();
    $operasi = array_shift($args);

    switch ($operasi) {
        case 'tambah':
            return array_sum($args);
        case 'kurang':
            $hasil = $args[0];
            for ($i = 1; $i < count($args); $i++) {
                $hasil -= $args[$i];
            }
            return $hasil;
        case 'kali':
            $hasil = 1;
            foreach ($args as $arg) {
                $hasil *= $arg;
            }
            return $hasil;
        default:
            return "Operasi tidak dikenal";
    }
}

echo "Tambah 1+2+3 = " . operasiMatematika('tambah', 1, 2, 3) . "<br>";
echo "Kurang 10-3-2 = " . operasiMatematika('kurang', 10, 3, 2) . "<br>";
echo "Kali 2*3*4 = " . operasiMatematika('kali', 2, 3, 4) . "<br>";

echo "<br><br>";

echo "<h2>18. Function Dengan Reference + Form Input</h2>";

echo "<p>Contoh berikut menggunakan parameter reference untuk mengubah nilai variabel input, kemudian menampilkan hasil melalui form POST.</p>";









function tambah(int &$a, int $b) {
    $jumlah = $a + $b;
    return $jumlah;
}

function kali(int &$a, int $b) {
    $jumlah2 = $a * $b;
    return $jumlah2;
}

function kurang(int &$a, int $b) {
    $jumlah3 = $a - $b;
    return $jumlah3;
}

function bagi(int &$a, int $b) {
    $jumlah4 = $a / $b;
    return $jumlah4;
}

echo "<form method=\"POST\">";
echo "<label for=\"angka1\">Angka 1:</label>";
echo "<input type=\"number\" name=\"angka1\" id=\"angka1\" required><br><br>";
echo "<label for=\"angka2\">Angka 2:</label>";
echo "<input type=\"number\" name=\"angka2\" id=\"angka2\" required><br><br>";
echo "<button type=\"submit\" name=\"kirim\">Tambah</button>";
echo "<button type=\"submit\" name=\"kirim2\">Kali</button>";
echo "<button type=\"submit\" name=\"kirim3\">Kurang</button>";
echo "<button type=\"submit\" name=\"kirim4\">Bagi</button>";
echo "</form>";

if (isset($_POST['kirim'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = tambah($angka1, $angka2);
    echo "Hasil penjumlahan: $hasil<br>";
}

if (isset($_POST['kirim2'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = kali($angka1, $angka2);
    echo "Hasil perkalian: $hasil<br>";
}

if (isset($_POST['kirim3'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = kurang($angka1, $angka2);
    echo "Hasil pengurangan: $hasil<br>";
}

if (isset($_POST['kirim4'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    if ($angka2 != 0) {
        $hasil = bagi($angka1, $angka2);
        echo "Hasil pembagian: $hasil<br>";
    } else {
        echo "Error: Tidak bisa dibagi dengan nol.<br>";
    }   
}

?>