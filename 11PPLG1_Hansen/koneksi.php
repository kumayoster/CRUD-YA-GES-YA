<?php
$koneksi = new mysqli('localhost', 'root', '', 'Hansen_XIPPLG1') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) VALUES ('$idPasien', '$nmPasien', '$jk', '$alamat') ON DUPLICATE KEY UPDATE nmPasien='$nmPasien', jk='$jk', alamat='$alamat'");


    header('Location: pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien WHERE idPasien = '$idPasien'");
    header("Location: pasien.php");
}
if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET nmPasien='$nmPasien', jk='$jk', alamat='$alamat' WHERE idPasien='$idPasien'");
    header('Location: pasien.php');
}
?>
