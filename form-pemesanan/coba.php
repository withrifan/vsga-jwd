<?php 
$namaanda = "";

if(isset($_POST['pesan'])) {
    $namaanda = $_POST["nama"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="namamu"></label>
    <input type="text" name="nama" id="namamu">
    <input type="submit" value="pesan" name="pesan">
    </form>
    <p>Nama Lengkap = <?php echo $namaanda?></p>
</body>
</html>