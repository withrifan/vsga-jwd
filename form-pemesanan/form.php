<?php
$namaAnda = "";
$identitasAnda = "";
$hpAnda = "";
$daftarWisata = "";
$padaTanggal = "";
$jumlahDewasa = "";
$jumlahAnak = "";
$hargaTotal = "";

if (isset($_POST['pesan'])) {

    $tiket = array("Bukit Kayoe Putih" => 10000, "Pendakian Gunung Penanggungan" => 10000, "Air Terjun Dlundung" => 12000);

    //Menghitung harga tiket awal
    function hitungAwal($tiket, $daftarWisata)
    {
        $hargaAwal = $tiket[$daftarWisata];
        return $hargaAwal;
    }

    //Menghitung harga tiket dewasa
    function hitungDewasa($tiket, $daftarWisata, $jumlahDewasa)
    {
        $hargaAwal = hitungAwal($tiket, $daftarWisata);
        $hargaTiketDewasa = $hargaAwal * $jumlahDewasa;
        return $hargaTiketDewasa;
    }

    //Menghitung harga diskon tiket anak
    function hitungDiskonAnak($tiket, $daftarWisata)
    {
        $hargaAwal = hitungAwal($tiket, $daftarWisata);
        $hargaDiskonAnak = $hargaAwal / 2;
        return $hargaDiskonAnak;
    }

    //Menghitung harga tiket anak
    function hitungAnak($tiket, $daftarWisata, $jumlahAnak)
    {
        $hargaDiskonAnak = hitungDiskonAnak($tiket, $daftarWisata);
        $hargaTiketAnak = $hargaDiskonAnak * $jumlahAnak;
        return $hargaTiketAnak;
    }

    //Menghitung total harga tiket
    function hargaTotalTiket($hargaTiketDewasa, $hargaTiketAnak)
    {
        $hargaTotalTiket = $hargaTiketDewasa + $hargaTiketAnak;
        return $hargaTotalTiket;
    }

    $namaAnda = $_POST["nama"];
    $identitasAnda = $_POST["identitas"];
    $hpAnda = $_POST["hp"];
    $daftarWisata = $_POST["daftarWisata"];
    $padaTanggal = $_POST["tanggal"];
    $jumlahDewasa = $_POST["jumlahDewasa"];
    $jumlahAnak = $_POST["jumlahAnak"];
    $hargaTiketDewasa = hitungDewasa($tiket, $daftarWisata, $jumlahDewasa);
    $hargaTiketAnak = hitungAnak($tiket, $daftarWisata, $jumlahAnak);
    $hargaTotal = hargaTotalTiket($hargaTiketDewasa, $hargaTiketAnak);
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
                        <td><input type="text" id="input-nama" name="nama" required></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="input">
                        <td><label for="input-identitas">Nomor Identitas</label></td>
                        <td><input type="number" id="input-identitas" name="identitas" required></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="input">
                        <td><label for="input-hp">No. HP</label></td>
                        <td><input type="number" id="input-hp" name="hp" required></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="dropdown">
                        <td><label for="dropdown-wisata">Pilih Tempat Wisata</label></td>
                        <td><select id="dropdown-wisata" name="daftarWisata" required>
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
                        <td><input type="date" id="input-tanggal" name="tanggal" required></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="input">
                        <td><label for="input-dewasa">Pengunjung Dewasa</label></td>
                        <td><input type="number" id="input-dewasa" name="jumlahDewasa" required></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <div class="input">
                        <td><label for="input-anak">Pengunjung Anak-Anak</label>
                            <figcaption>Usia di bawah 12 tahun</figcaption>
                        </td>
                        <td><input type="number" id="input-anak" name="jumlahAnak" required></td>
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
                    <td colspan="3"><input type="checkbox" id="setuju" required>Saya dan/atau rombongan telah membaca, memahami, dan <br>setuju berdasarkan syarat dan ketentuan yang telah ditetapkan </td>
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
        <table cellpadding="6">
            <tr>
                <td colspan="2">
                    <div class="judul-bagform">Form Pemesanan</div>
                </td>
            </tr>
            <tr>
                <td>Nama Pemesan </td>
                <td>: <?php echo $namaAnda; ?></td>
            </tr>
            <tr>
                <td>Nomor Identitas </td>
                <td>: <?php echo $identitasAnda; ?></td>
            </tr>
            <tr>
                <td>No. HP </td>
                <td>: <?php echo $hpAnda; ?></td>
            </tr>
            <tr>
                <td>Tempat Wisata </td>
                <td>: <?php echo $daftarWisata; ?></td>
            </tr>
            <tr>
                <td>Tanggal Kunjungan </td>
                <td>: <?php echo $padaTanggal; ?></td>
            </tr>
            <tr>
                <td>Pengunjung Dewasa </td>
                <td>: <?php echo $jumlahDewasa; ?></td>
            </tr>
            <tr>
                <td>Pengunjung Anak-Anak </td>
                <td>: <?php echo $jumlahAnak; ?></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>: <?php echo $hargaTotal; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>
