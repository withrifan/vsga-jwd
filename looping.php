<?php
echo "ini adalah while <br>";
// while loop
// melakukan pengecekan kondisi dulu
// sebelum looping
$countdown1 = 10;
while ($countdown1 >= 0) {
    echo $countdown1;
    echo "<br>";
    $countdown1--;
}

echo "ini adalah do while <br>";
// do while
// looping dulu baru pengecekan
$countdown2 = 10;
do {
    echo $countdown2;
    echo "<br>";
    $countdown2--;
} while ($countdown2 >= 0);

echo "ini adalah foreach <br>";
// Foreach
// hanya digunakan untuk setiap
// key atau value pada array,
// dapat membaca dalam bentuk angka
// maupun kata kunci
// (array 1 dimensi, asosiatif, multidimensi)
echo "----ini array satu dimensi----<br>";
$mahasiswa1 = ["Ani", "Ana", "Ane"];
foreach ($mahasiswa1 as $value1) {
    echo $value1 . "<br>";
}
echo "<br>";

echo "----ini array asosiatif----<br>";
$mahasiswa2 = ["Nama" => "Aan", "Umur" => 17, "Jurusan" => "informatika"];
foreach ($mahasiswa2 as $key1 => $value2) {
    echo $key1 . ": " . $value2 . "<br>";
}
echo "<br>";

echo "----ini array asosiatif multidimensi----<br>";
$kampusA = [
    "Mahasiswa 1" => ["Nama" => "Rifan", "Umur" => 17, "Jurusan" => "Informatika"],
    "Mahasiswa 2" => ["Nama" => "Achmad", "Umur" => 18, "Jurusan" => "Sistem informasi"],
    "Mahasiswa 3" => ["Nama" => "Arifan", "Umur" => 17, "Jurusan" => "Teknik komputer"]
];

foreach ($kampusA as $key2 => $value3) {
    echo $key2 . "<br> Nama:" . $value3["Nama"] . "<br> Umur:" . $value3["Umur"] . "<br>Jurusan:" . $value3["Jurusan"] . "<br> <br>";
}
?>
