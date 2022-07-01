<?php

//array kosong
$buah = array();
$sayuran = [];


//array sekaligus isinya
$buah = array("apel", "mangga", "jeruk");
$sayuran = ["bayam", 'kangkung', 'wortel'];


//array dengan mengisi index tertentu
$siswa[2] = "Dian";
$siswa[1] = "Ani";
$siswa[0] = "Yoga";


//array dapat diisi tipe data apa saja
$item = ["Bunga", 12, 23.32, true];
$barang = ['buku', 'pensil', 'spidol'];


//menampilkan isi array
echo "<pre>";
print_r($buah);
echo "</pre><br />";
echo $buah[0]."<br />";
echo $buah[2]."<br /><br />";


echo "<pre>";
print_r($sayuran);
echo "</pre><br />";
echo $sayuran[1]."<br />";
echo $sayuran[2]."<br /><br />";


echo $siswa[0]."<br />";
echo $siswa[1]."<br />";
echo $siswa[2]."<br />";
unset($siswa[2]); //menghapus isi array
echo "<pre>";
print_r($siswa);
echo "</pre><br /><br />";


echo $item[3]."<br />";
echo $item[2]."<br />";
echo $item[1]."<br />";
echo $item[0]."<br />";
$item[4] = "olahraga"; //manambahkan isi array
$item[] = "menulis";
echo "<pre>";
print_r($item);
echo "</pre><br /><br />";


echo "<pre>";
print_r($barang);
echo "</pre><br />";
//menampilkan isi array dgn perulangan for
for($i=0; $i < count($barang); $i++){
	echo $barang[$i]."<br />";
}
//menampilkan array dengan perulangan
foreach ($barang as $barangku) {
	echo $barangku."<br />";
}
echo "<br />";


//mengurutkan array
$colors = array('red', 'blue', 'white');
sort($colors);
//terbalik rsort($colors);
foreach($colors as $value) {
	echo "$value <br />";
}


//array asosiatif tipe1
$artikel = [
	"judul" => "Belajar pemrograman PHP",
	"penulis" => "rifan",
	"view" => 1200
];
//mencetak isi array asosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>oleh ".$artikel["penulis"]."</p>";
echo "<p>View: ".$artikel["view"]."</p>";


//array asosiatif tipe2
$email["subjek"] = "apa kabar";
$email["pengirim"] = "rani@gmail.com";
$email["isi"] = "Apa kabar kamu yang ada di sana";
//mencetak isi array asosiatif
echo "<pre>";
print_r($email);
echo "</pre>";


//array 2 dimensi
$matrik = [
	[2,3,4],
	[1,5,6],
	[9,8,7],
];
echo $matrik[2][1]."<br /><br />"; //hasilnya 8


//array multidimensi
$cars = array(
	array("Volvo",22,18),
	array("BMW",14,12),
	array("Saab",26,10),
	array("Land Rover",16,11),
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2]."<br />";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2]."<br />";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2]."<br />";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2]."<br />";

//menampilkan array multidimensi
for ($row = 0; $row < 4; $row++) {
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
	for ($col=0; $col < 3; $col++) { 
		echo "<li>".$cars[$row][$col]."</li>";
	}
	echo "</ul>";
}


?>