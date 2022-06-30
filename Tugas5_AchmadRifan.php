<?php
//fungsi untuk menampilkan bilangan
function bilangan($bil1, $bil2) {
	echo "bilangan 1 : ".$bil1."<br />";
	echo "bilangan 2 : ".$bil2."<br />";
}
bilangan(9, 3); //memanggil fungsi bilangan
echo "<hr><hr>";

//fungsi untuk melakukan penjumlahan
function penjumlahan($plus1, $plus2) {
	$hasiljumlah = $plus1 + $plus2; //penjumlahan dari argument plus1, plus2
	echo "hasil penjumlahan adalah : " .$hasiljumlah. "<br />";
}
penjumlahan(9, 3); //memanggil fungsi penjumlahan

//fungsi untuk melakukan pengurangan
function pengurangan($min1, $min2){
	$hasilpengurangan = $min1 - $min2; //pengurangan dari argument min1, min2
	echo "hasil pengurangan adalah : " .$hasilpengurangan. "<br />";
}
pengurangan(9, 3); //memanggil fungsi pengurangan

//fungsi untuk melakukan perkalian
function perkalian($kali1, $kali2) {
	$hasilkali = $kali1 * $kali2; //perkalian dari argument kali1, kali2
	echo "hasil perkalian adalah : " .$hasilkali. "<br />";
}
perkalian(9, 3); //memanggil fungsi perkalian

//fungsi untuk melakukan pembagian
function pembagian($bagi1, $bagi2) {
	$hasilbagi = $bagi1 / $bagi2; //pembagian dari argument bagi1, bagi2
	echo "hasil pembagian adalah : " .$hasilbagi. "";
}
pembagian(9, 3); //memanggil fungsi pembagian
?>