<?php
// Include database connection
include 'koneksi.php';

// Handling Insert/Update Kunjungan
if (isset($_POST['simpan'])) {
    $idKunjungan = $_POST['idKunjungan'];
    $idPasien = $_POST['idPasien'];
    $idDokter = $_POST['idDokter'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];

    $link = koneksi();
    // Prepare SQL query for insert/update
    $stmt = $link->prepare("INSERT INTO kunjungan (idKunjungan, idPasien, idDokter, tanggal, keluhan) 
                            VALUES (?, ?, ?, ?, ?) 
                            ON DUPLICATE KEY UPDATE idPasien=?, idDokter=?, tanggal=?, keluhan=?");
    $stmt->bind_param("ssssssss", $idKunjungan, $idPasien, $idDokter, $tanggal, $keluhan, $idPasien, $idDokter, $tanggal, $keluhan);
    
    // Execute the statement and check for errors
    if (!$stmt->execute()) {
        die("Error executing query: " . $stmt->error);
    }
    
    $stmt->close();
    $link->close();

    // Redirect back to kunjungan.php after saving
    header('Location: kunjungan.php');
    exit();
}

// Handling Delete Kunjungan
if (isset($_GET['idKunjungan'])) {
    $idKunjungan = $_GET['idKunjungan'];

    $link = koneksi();
    // Prepare SQL query for delete
    $stmt = $link->prepare("DELETE FROM kunjungan WHERE idKunjungan = ?");
    $stmt->bind_param("s", $idKunjungan);

    if (!$stmt->execute()) {
        die("Error executing query: " . $stmt->error);
    }

    $stmt->close();
    $link->close();

    // Redirect back to kunjungan.php after deletion
    header("Location: kunjungan.php");
    exit();
}
?>
