<?php
$namaanda = "";
$identitasanda = "";
$hpanda = "";
$wisataanda = "";
$padatanggal = "";
$jumlahdewasa = "";
$jumlahanak = "";
$hitungbayar = "";
$hargadewasa = [10000, 10000, 12500];
$hargaanak = [5000, 10000, 10000];
$kali1 = "";
$kali2 = "";
$hasilakhir = "";

if (isset($_POST['pesan'])) {
    $namaanda = $_POST["nama"];
    $identitasanda = $_POST["identitas"];
    $hpanda = $_POST["hp"];
    $wisataanda = $_POST["wisata"];
    $padatanggal = $_POST["tanggal"];
    $jumlahdewasa = $_POST["dewasa"];
    $jumlahanak = $_POST["anak"];
}

if (isset($_POST['hitung'])) {
    $jumlahdewasa = $_POST["dewasa"];
    $jumlahanak = $_POST["anak"];
    $hargadewasa = $_POST["wisata"];
    $hargaanak = $_POST["wisata"];
}

if (isset($_POST['hitung'])) {
    $kali1 = HITUNG1($jumlahdewasa, $hargadewasa);
}

if (isset($_POST['hitung'])) {
    $kali2 = HITUNG2($jumlahanak, $hargaanak);
}

if (isset($_POST['hitung'])) {
    $hasilakhir = HASIL($kali1, $kali2);
}

function HITUNG1($jumlahdewasa, $hargadewasa)
{
    return $jumlahdewasa * $hargadewasa;
}

function HITUNG2($jumlahanak, $hargaanak)
{
    return $jumlahanak * $hargaanak;
}

function HASIL($kali1, $kali2)
{
    return $kali1 + $kali2;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <div class="title">Tempat Wisata Mojokerto</div>
            <a href="index.php">Home</a>
            <a href="harga.php">Daftar Harga</a>
            <a href="form.php">Pesan Tiket</a>
        </nav>
    </header>
    <div class="bagian-form">
        <table cellpadding="10" class="table-pesan">
            <form action="" method="post" id="form-input">
                <tr>
                    <td colspan="3">
                        <div class="judul-bagform">Form Pemesanan</div>
                    </td>
                </tr>
                <tr>
                    <div class="input">
                        <td><label for="input-nama">Nama Lengkap</label></td>
                        <td><input type="text" id="input-nama" name="nama"></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="input">
                        <td><label for="input-identitas">Nomor Identitas</label></td>
                        <td><input type="number" id="input-identitas" name="identitas"></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="input">
                        <td><label for="input-hp">No. HP</label></td>
                        <td><input type="number" id="input-hp" name="hp"></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="dropdown">
                        <td><label for="dropdown-wisata">Pilih Tempat Wisata</label></td>
                        <td><select name="wisata" id="dropdown-wisata">
                                <option value="">Pilih Salah Satu Wisata</option>
                                <option value="Bukit Kayoe Putih">Bukit Kayoe Putih</option>
                                <option value="Pendakian Gunung Penanggungan">Pendakian Gunung Penanggungan</option>
                                <option value="Air Terjun Dlundung">Air Terjun Dlundung</option>
                            </select></td>
                    </div>
                    <td></td>
                </tr>
                <tr>
                    <div class="kunjungan">
                        <td><label for="input-tanggal">Tanggal Kunjungan</label></td>
                        <td><input type="date" id="input-tanggal" name="tanggal"></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="input">
                        <td><label for="input-dewasa">Pengunjung Dewasa</label></td>
                        <td><input type="text" id="input-dewasa" name="dewasa"></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="input">
                        <td><label for="input-anak">Pengunjung Anak-Anak</label>
                            <figcaption>Usia di bawah 12 tahun</figcaption>
                        </td>
                        <td><input type="text" id="input-anak" name="anak" </td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <td><label id="info-harga">Harga Tiket</label></td>
                    <td><span id="harga">Rp 10.000</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label id="total-bayar">Total Bayar</label></td>
                    <td><span id="bayar">Rp 000.000</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="checkbox" id="setuju">Saya dan/atau rombongan telah membaca, memahami, dan <br>setuju berdasarkan syarat dan ketentuan yang telah ditetapkan </td>
                </tr>
                <tr>
                    <td><input type="submit" id="hitung" value="Hitung Total Bayar" name="hitung"></td>
                    <td><input type="submit" id="pesan" value="Pesan Tiket" name="pesan"></td>
                    <td><input type="reset" id="cancel" value="Cancel" name="cancel"></td>
                </tr>
            </form>
        </table>
    </div>
    <div class="output">
        <table border="1" cellpadding="6">
            <tr>
                <td colspan="2">
                    <div class="judul-bagform">Form Pemesanan</div>
                </td>
            </tr>
            <tr>
                <td>Nama Pemesan </td>
                <td>: <?php echo $namaanda; ?></td>
            </tr>
            <tr>
                <td>Nomor Identitas </td>
                <td>: <?php echo $identitasanda; ?></td>
            </tr>
            <tr>
                <td>No. HP </td>
                <td>: <?php echo $hpanda; ?></td>
            </tr>
            <tr>
                <td>Tempat Wisata </td>
                <td>: <?php echo $wisataanda; ?></td>
            </tr>
            <tr>
                <td>Tanggal Kunjungan </td>
                <td>: <?php echo $padatanggal; ?></td>
            </tr>
            <tr>
                <td>Pengunjung Dewasa </td>
                <td>: <?php echo $jumlahdewasa; ?></td>
            </tr>
            <tr>
                <td>Pengunjung Anak-Anak </td>
                <td>: <?php echo $jumlahanak; ?></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>: <?php echo $hasilakhir; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>