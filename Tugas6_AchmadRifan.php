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

body {
	background-color: #F8F5F1;
	display: grid;
	justify-content: center;
	align-items: center;
}

@media only screen and (min-width: 550px) {
.head {
	font-family: sans-serif;
	font-size: 20px;
	width: 500px;
	height: 80px;
	padding: 10px;
	margin-bottom: 18px;
	background-color: #5AA897;
	color: #F8F5F1;
	text-align: center;
	font-variant: small-caps;
	border: ridge;
	border-radius: 10px;
	border-width: 10px;
	border-color: #45526C;
}

.bag-input {
	width: 300px;
	height: 90px;
	padding: 10px;
	background-color: #5AA897;
	font-family: sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #F8F5F1;
	border: solid;
	border-color: #45526C;
	background-color: #5AA897;
	border-width: 6px;
	border-radius: 4px;
	margin-bottom: 5px;
}

#submit {
	color: #F8F5F1;
	font-family: sans-serif;
	font-size: 14px;
	background-color: #45526C;
	width: 80px;
	height: 30px;
	margin-top: 14px;
	margin-left: 95px;
}

.bag-output-pertama {
	width: 300px;
	height: 40px;
	padding: 10px;
	background-color: #5AA897;
	font-family: sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #F8F5F1;
	border: solid;
	border-color: #45526C;
	background-color: #5AA897;
	border-width: 6px;
	border-radius: 4px;
	margin-bottom: 10px;
}

.garis {
	color: #45526C;
	width: 520px;
	margin-bottom: 20px;
	border-width: 4px;
}

.bag-output-kedua {
	width: 504px;
	height: 75px;
	padding: 10px;
	background-color: #5AA897;
	font-family: sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #F8F5F1;
	border: solid;
	border-color: #45526C;
	background-color: #5AA897;
	border-width: 6px;
	border-radius: 4px;
}



.foot {
	width: 520px;
	height: 18px;
	padding: 8px;
	color: #F8F5F1;
	background-color: #45526C;
	font-family: sans-serif;
	font-size: 12px;
	font-style: italic;
	font-weight: bold;
	text-align: center;
	font-variant: small-caps;
}
}

@media only screen and (max-width: 551px) {
.head {
	font-family: sans-serif;
	font-size: 14px;
	width: 400px;
	height: 40px;
	padding-bottom: 16px;
	margin: 10px;
	margin-bottom: 6px;
	background-color: #5AA897;
	color: #F8F5F1;
	text-align: center;
	font-variant: small-caps;
	border: ridge;
	border-radius: 6px;
	border-width: 6px;
	border-color: #45526C;
}

.bag-input {
	width: 250px;
	height: 70px;
	padding: 8px;
	margin: 10px;
	margin-bottom: 5px;
	background-color: #5AA897;
	font-family: sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #F8F5F1;
	border: solid;
	border-color: #45526C;
	background-color: #5AA897;
	border-width: 4px;
	border-radius: 3px;
}

#submit {
	color: #F8F5F1;
	font-family: sans-serif;
	font-size: 9px;
	background-color: #45526C;
	width: 60px;
	height: 20px;
	margin-top: 10px;
	margin-left: 80px;
}

.bag-output-pertama {
	width: 200px;
	height: 35px;
	padding: 8px;
	background-color: #5AA897;
	font-family: sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #F8F5F1;
	border: solid;
	border-color: #45526C;
	background-color: #5AA897;
	border-width: 4px;
	border-radius: 3px;
	margin-bottom: 6px;
	margin-left: 10px;
}

.garis {
	color: #45526C;
	width: 400px;
	margin-bottom: 10px;
	border-width: 2px;
}

.bag-output-kedua {
	width: 390px;
	height: 70px;
	padding: 8px;
	margin-left: 10px;
	background-color: #5AA897;
	font-family: sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #F8F5F1;
	border: solid;
	border-color: #45526C;
	background-color: #5AA897;
	border-width: 4px;
	border-radius: 3px;
}

.foot {
	width: 400px;
	height: 14px;
	padding: 8px;
	margin-left: 10px;
	color: #F8F5F1;
	background-color: #45526C;
	font-family: sans-serif;
	font-size: 10px;
	font-style: italic;
	font-weight: bold;
	text-align: center;
	font-variant: small-caps;
}
}
