<?php
echo "ini adalah while <br>";
/* while loop
melakukan pengecekan kondisi dulu
sebelum looping */
$cobawhile1 = 10;
while ($cobawhile1 >= 0) {
    echo $cobawhile1;
    echo "<br>";
    $cobawhile1--;
}

$cobawhile2 = 0;
while ($cobawhile2 <= 10) {
    echo "The number is: $cobawhile2 <br>";
    $cobawhile2++;
}
$cobawhile3 = 0;
while ($cobawhile3 < 100) {
    echo "Angka puluhan: $cobawhile3<br>";
    $cobawhile3 += 10;
}
echo "<br>";


echo "ini adalah do while <br>";
/* do while
looping dulu baru pengecekan*/
$cobadowhile1 = 10;
do {
    echo $cobadowhile1;
    echo "<br>";
    $cobadowhile1--;
} while ($cobadowhile1 >= 0);
/* do while akan melakukan perulangan setidaknya sekali
meskipun kondisinya false */
$cobadowhile2 = 6;
do {
    echo "ini adalah angka: $cobadowhile2<br>";
    $cobadowhile2++;
} while ($cobadowhile2 <= 5);
echo "<br>";


echo "ini adalah for<br>";
/*for loop
looping dijalankan 
dengan ditentukan berapa kali*/
for ($cobafor1 = 0; $cobafor1 <= 10; $cobafor1++) {
    echo "ini adalah for loop, angka: $cobafor1 <br>";
}
for ($cobafor2 = 4; $cobafor2 <= 4; $cobafor2++) {
    echo "ini adalah cobafor2-satukaliloop<br>";
}
for ($cobafor3 = 3; $cobafor3 >= -2; $cobafor3--) {
    echo "ini adalah cobafor3 angka: $cobafor3 <br>";
}
echo "<br><br>";


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
$color = ["red", "green", "blue", "white"];
foreach ($color as $warna) {
    echo "$warna <br>";
}
echo "<br>";


echo "----ini array asosiatif----<br>";
$mahasiswa2 = ["Nama" => "Aan", "Umur" => 17, "Jurusan" => "informatika"];
foreach ($mahasiswa2 as $key1 => $value2) {
    echo $key1 . ": " . $value2 . "<br>";
}
echo "<br>";
$siswa = ["Dani" => 15, "Dono" => 18, "Deno" => 19];
foreach ($siswa as $namasiswa => $umur) {
    echo "$namasiswa = $umur<br>";
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
echo "<br>";
$kampusB = [
    "guru1" => ["Nama" => "Yani", "Umur" => 24, "Jurusan" => "Teknik Sipit"],
    "guru2" => ["Nama" => "Yeni", "Umur" => 30, "Jurusan" => "Teknik komputer"],
    "guru3" => ["Nama" => "Yono", "Umur" => 28, "Jurusan" => "Kedokteran"]
];
foreach ($kampusB as $keyguru => $daftarguru) {
    echo "Nama" . $daftarguru["Nama"] . " Umur: " . $daftarguru["Umur"] . "Jurusan: " . $daftarguru["Jurusan"] . "<br>";
}
echo "<br>";
?>
