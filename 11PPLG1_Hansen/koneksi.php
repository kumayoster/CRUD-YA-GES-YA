<?php
$koneksi = new mysqli('localhost', 'root', '', 'Hansen_XIPPLG1');

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// pasien
if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) VALUES ('$idPasien', '$nmPasien', '$jk', '$alamat') ON DUPLICATE KEY UPDATE nmPasien='$nmPasien', jk='$jk', alamat='$alamat'") or die($koneksi->error);

    header('Location: pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien WHERE idPasien = '$idPasien'") or die($koneksi->error);
    header("Location: pasien.php");
}

// dokter
if (isset($_POST['simpan1'])) {
    $idDokter = $_POST['idDokter'];
    $nmDokter = $_POST['nmDokter'];
    $spesialisasi = $_POST['spesialisasi'];
    $noTelp = $_POST['noTelp'];

    $koneksi->query("INSERT INTO dokter (idDokter, nmDokter, spesialisasi, noTelp) VALUES ('$idDokter', '$nmDokter', '$spesialisasi', '$noTelp') ON DUPLICATE KEY UPDATE nmDokter='$nmDokter', spesialisasi='$spesialisasi', noTelp='$noTelp'") or die($koneksi->error);

    header('Location: dokter.php');
}

if (isset($_GET['idDokter'])) {
    $idDokter = $_GET['idDokter'];
    $koneksi->query("DELETE FROM dokter WHERE idDokter = '$idDokter'") or die($koneksi->error);
    header("Location: dokter.php");
}

// kunjungan
if (isset($_POST['simpan2'])) {
    $idKunjungan = $_POST['idKunjungan'];
    $idPasien = $_POST['idPasien'];
    $idDokter = $_POST['idDokter'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];

    $query = "INSERT INTO kunjungan (idKunjungan, idPasien, idDokter, tanggal, keluhan) VALUES ('$idKunjungan', '$idPasien', '$idDokter', '$tanggal', '$keluhan') ON DUPLICATE KEY UPDATE tanggal='$tanggal', keluhan='$keluhan'";
    $koneksi->query($query) or die($koneksi->error);

    header('Location: kunjungan.php');
}

if (isset($_GET['idKunjungan'])) {
    $idKunjungan = $_GET['idKunjungan'];
    $koneksi->query("DELETE FROM kunjungan WHERE idKunjungan = '$idKunjungan'") or die($koneksi->error);
    header("Location: kunjungan.php");
}
?>
