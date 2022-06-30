<?php
echo "===============CETAK BILANGAN GANJIL GENAP 1-100===============<br>";

//variabel $bil pada perulangan for berfungsi sebagai counter yang menghitung berapa kali $bil akan mengulang
//$bil = 1 hitungan dimulai dari angka 1
//perulangan akan diulang selama $bil lebih kecil dari 101, artinya akan mengulang sebanyak 100 kali
//$bil++ artinya akan ditambah 1 setiap kali melakukan perulangan 
for($bil = 1; $bil < 101; $bil++) {
	//$bil % 2 == 0 artinya variabel $bil akan dibagi 2 jika hasilnya 0 maka akan mencetak $bil adalah Bilangan Genap 
	if ($bil % 2 == 0) {
		echo "$bil adalah Bilangan Genap<br>";
	} 
	//Namun jika hasilnya tidak 0 maka $bil adalah Bilangan Ganjil
	else {
		echo "$bil adalah Bilangan Ganjil.<br>";
	}
};
?>