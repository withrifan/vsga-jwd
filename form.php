<?php
$page = $_SERVER['PHP_SELF'];
$sec = "60";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulir Pendaftaran</title>
</head>

<body>
	<h2>FORMULIR PENDAFTARAN</h2>
	<form action="" method="post">
		<label for="fname">First Name:</label><br>
		<input type="text" id="fname" name="fname">
		<br>
		<label for="lname">Last Name:</label><br>
		<input type="text" id="lname" name="lname">
		<br>
		<label for="mail">Email:</label><br>
		<input type="email" id="mail" name="mail">
		<br>
		<label for="pwd">Password:</label><br>
		<input type="password" id="pwd" name="pwd">
		<br>
		<label>Jenis Kelamin:</label><br>
		<input type="radio" id="men" name="men">
		<label for="men">Laki-Laki</label>
		<br>
		<input type="radio" id="girl" name="girl">
		<label for="girl">Perempuan</label>
		<br>
		<label for="birthday">Tanggal Lahir</label><br>
		<input type="date" id="birthday" name="birthday">
		<br>
		<label>Pendidikan Terakhir:</label>
		<select name="pendidikan_terakhir">
			<option value="SMK">SMK</option>
			<option value="D1/D2/D3">D1/D2/D3</option>
			<option value="S1">S1</option>
		</select>
		<br>
		<label for="datemin">Masuk tahun berapa</label>
		<input type="date" id="datemin" name="datemin" min="2014-01-01" max="2022-01-01"><br>
		<label for="datemax">Lulus tahun berapa</label>
		<input type="date" id="datemax" name="datemax" min="2014-01-01" max="2022-01-01">
		<br>
		<label>Hobi yang kamu sukai:</label><br>
		<input type="checkbox" id="read" name="read">
		<label for="read">Saya suka membaca buku</label>
		<input type="checkbox" id="write" name="write">
		<label for="write">Saya suka menulis</label>
		<input type="checkbox" id="coding" name="coding">
		<label for="coding">Saya suka coding</label><br>
		<label for="favcolor">Pilih warna kesukaanmu</label>
		<input type="color" id="favcolor" name="favcolor"><br>
		<input type="submit" name="submit" value="Submit">
		<input type="reset" name="reset" value="Reset" onclick="alert('Apakah Anda yakin ingin mengapus semua!')">
	</form>

	<?php

	if (isset($_POST['kirim'])) {
		$nama = $_POST['nama'];
		$mail = $_POST['mail'];
		$password = $_POST['sandi'];
		$jenisKelamin = $_POST['jenis_kelamin'];
		$pendidikanTerakhir = $_POST['pendidikan_terakhir'];

		echo "<table border='1'>";
		echo "<tr>";
		echo "<td>Nama</td>";
		echo "<td>Email</td>";
		echo "<td>Jenis Kelamin</td>";
		echo "<td>Pendidikan Terakhir</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>" . $nama . "</td>";
		echo "<td>" . $mail . "</td>";
		echo "<td>" . $jenisKelamin . "</td>";
		echo "<td>" . $pendidikanTerakhir . "</td>";
		echo "</tr>";
		echo "</table>";
	}

	?>

</body>

</html>