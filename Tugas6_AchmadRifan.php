<?php
//mendeklarasikan variabel awal
$bilangan1 = "";
$bilangan2 = "";
$tambah = "";
$kurang = "";
$kali = "";
$bagi = "";

//mengecek submit dan mendeklarasikan bilangan1 dan bilangan2 yang menerima data dari bil1 dan bil2
if(isset($_POST['submit'])) {
	$bilangan1 = $_POST["bil1"];
	$bilangan2 = $_POST["bil2"];		
}

//mendeklarasikan variabel $tambah & memasukkan bilangan1 dan bilangan2 ke function TAMBAH
if (isset($_POST['submit'])) {
	$tambah = TAMBAH ($bilangan1, $bilangan2);
}

//mendeklarasikan variabel $kurang & memasukkan bilangan1 dan bilangan2 ke function KURANG
if (isset($_POST['submit'])) {
	$kurang = KURANG ($bilangan1, $bilangan2);
}

//mendeklarasikan variabel $kali & memasukkan bilangan1 dan bilangan2 ke function KALI
if (isset($_POST['submit'])) {
	$kali = KALI ($bilangan1, $bilangan2);
}

//mendeklarasikan variabel $bagi & memasukkan bilangan1 dan bilangan2 ke function BAGI
if (isset($_POST['submit'])) {
	$bagi = BAGI ($bilangan1, $bilangan2);
}

//funsi TAMBAH dengan mengembalikan bilangan1 + bilangan2
function TAMBAH ($bilangan1, $bilangan2) {
	return $bilangan1 + $bilangan2;
}

//funsi KURANG dengan mengembalikan bilangan1 + bilangan2
function KURANG ($bilangan1, $bilangan2) {
	return $bilangan1 - $bilangan2;
}

//funsi KALI dengan mengembalikan bilangan1 + bilangan2
function KALI ($bilangan1, $bilangan2) {
	return $bilangan1 * $bilangan2;
}

//funsi BAGI dengan mengembalikan bilangan1 + bilangan2
function BAGI ($bilangan1, $bilangan2) {
	return $bilangan1 / $bilangan2;
}
?>

</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas6_AchmadRifan</title>
	<link rel="stylesheet" href="Tugas6_AchmadRifan.css">
</head>
<body>
	<div class="head">
		<h2>Kalkulator Sederhana</h2>
	</div>
		<!--membuat form dengan method POST-->
		<div class="bag-input">
			<form action="" method="post">
				Bilangan 1 : <input type="number" name="bil1" placeholder="Input 1st number"><br>
				Bilangan 2 : <input type="number" name="bil2" placeholder="Input 2nd number"><br>
				<input type="submit" name="submit" value="SUBMIT" id="submit" >
			</form>
		</div>
		<div class="bag-output-pertama">
			<!--menampilkan variabel bilangan1 dan bilangan2-->
			Bilangan 1 : <?php echo $bilangan1 ?> <br />
			Bilangan 2 : <?php echo $bilangan2 ?>
		</div>
		<div><hr class="garis"></div>
		<div class="bag-output-kedua">
			<!--menampilkan hasil penjumlahan dengan memanggil variabel $tambah-->
			Hasil penjumlahan adalah : <?php echo $tambah;?><br>
			<!--menampilkan hasil pengurangan dengan memanggil variabel $kurang-->
			Hasil pengurangan adalah : <?php echo $kurang;?><br>
			<!--menampilkan hasil perkalian dengan memanggil variabel $kali-->
			Hasil perkalian adalah : <?php echo $kali;?><br>
			<!--menampilkan hasil pemabagian dengan memanggil variabel $bagi-->
			Hasil pembagian adalah : <?php echo $bagi;?>
		</div>
		<footer><p class="foot">Tugas6_AchmadRifan</p></footer>
</body>
</html>
