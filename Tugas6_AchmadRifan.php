</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas6_AchmadRifan</title>
	<link rel="stylesheet" type="text/css" href="Tugas6_AchmadRifan.css">
</head>
<body>
	<div class="bag-judul">
		<h2>KALKULATOR SEDERHANA</h2>
	</div>
	<div class="bag-bilangan">
		<p>Bilangan 1 : <?php echo 9;?></p>
		<p>Bilangan 2 : <?php echo 3;?></p>
	</div>
	<div class="bag-hasil">
		<p>Hasil Penjumlahan adalah : 
			<?php
			function penjumlahan(int $plus1 = 9, int $plus2 = 3) {
				$hasiljumlah = $plus1 + $plus2;
				echo "" .$hasiljumlah. "";
			}
			penjumlahan();?>
		</p>
		<p>Hasil Pengurangan adalah : 
			<?php function pengurangan(int $min1 = 9, int $min2 = 3){
				$hasilpengurangan = $min1 - $min2;
				echo "" .$hasilpengurangan. "";
			}
			pengurangan(); ?>
		</p>
		<p>Hasil Perkalian adalah : 
			<?php function perkalian(int $kali1 = 9, int $kali2 = 3) {
				$hasilkali = $kali1 * $kali2; 
				echo " " .$hasilkali. "";
			}
			perkalian(9, 3); ?>
		</p>
		<p>Hasil Pembagian adalah : 
			<?php

			function pembagian(int $bagi1 = 9, int $bagi2 = 3) {
				$hasilbagi = $bagi1 / $bagi2;
				echo "" .$hasilbagi. "";
			}
			pembagian(); ?>
		</p>
	</div>
</body>
<footer>
	<p>Tugas6_AchmadRif'an</p>
</footer>
</html>


//CSS Responsive
body {
	background-color: #EEEDDE;
	display: grid;
	justify-content: center;
	align-items: center;
}

@media only screen and (min-width: 601px) {
	.bag-judul {
		width: 500px;
		height: 70px;
		border: 10px groove #E0DDAA;
		padding: 20px;
		margin: 10px;
		margin-bottom: 20px;
		background-color: #203239;
		font-family: sans-serif;
		font-size: 17px;
		text-align: center;
		color: #EEEDDE;
	}

	.bag-bilangan {
		width: 250px;
		height: 80px;
		border: 2px solid #203239;
		padding: 20px;
		margin: 10px;
		background-color: #E0DDAA;
		font-family: sans-serif;
	}

	.bag-hasil {
		width: 300px;
		height: 150px;
		border: 2px solid #203239;
		padding: 20px;
		margin: 10px;
		background-color: #E0DDAA;
		font-family: sans-serif;
	}

	footer {
		width: 540px;
		height: 50px;
		border: 8px groove #E0DDAA;
		margin-left: 10px;
		margin-top: 20px;
		background-color: #203239;
		font-family: sans-serif;
		text-align: center;
		font-weight: bold;
		color: #EEEDDE;
	}
}

@media only screen and (max-width: 600px) {
	.bag-judul {
		width: 300px;
		height: 50px;
		border: 4px groove #E0DDAA;
		padding: 10px;
		margin: 5px;
		background-color: #203239;
		font-family: sans-serif;
		font-size: 12px;
		text-align: center;
		color: #EEEDDE;
	}

	.bag-bilangan {
		width: 200px;
		height: 80px;
		border: 2px solid #203239;
		padding: 10px;
		margin: 5px;
		background-color: #E0DDAA;
		font-family: sans-serif;
	}

	.bag-hasil {
		width: 250px;
		height: 150px;
		border: 2px solid #203239;
		padding: 10px;
		margin: 5px;
		background-color: #E0DDAA;
		font-family: sans-serif;
	}

	footer {
		width: 300px;
		height: 40px;
		border: 4px groove #E0DDAA;
		margin: 5px;
		background-color: #203239;
		font-family: sans-serif;
		text-align: center;
		font-weight: bold;
		color: #EEEDDE;
		font-size: 12px;
	}
}
