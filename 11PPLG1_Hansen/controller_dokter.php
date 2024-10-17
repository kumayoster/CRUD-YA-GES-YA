<?php
// Include database connection
include 'koneksi.php'; 

// Handling Insert/Update Dokter
if (isset($_POST['simpan'])) {
    $idDokter = $_POST['idDokter'];
    $nmDokter = $_POST['nmDokter'];
    $spesialisasi = $_POST['spesialisasi'];
    $noTelp = $_POST['noTelp'];

    $link = koneksi();
    // Prepare SQL query for insert/update
    $stmt = $link->prepare("INSERT INTO dokter (idDokter, nmDokter, spesialisasi, noTelp) 
                            VALUES (?, ?, ?, ?) 
                            ON DUPLICATE KEY UPDATE nmDokter=?, spesialisasi=?, noTelp=?");
    $stmt->bind_param("sssssss", $idDokter, $nmDokter, $spesialisasi, $noTelp, $nmDokter, $spesialisasi, $noTelp);
    
    // Execute the statement and check for errors
    if (!$stmt->execute()) {
        die("Error executing query: " . $stmt->error);
    }
    
    $stmt->close();
    $link->close();

    // Redirect back to dokter.php after saving
    header('Location: dokter.php');
    exit(); 
}

// Handling Delete Dokter
if (isset($_GET['idDokter'])) {
    $idDokter = $_GET['idDokter'];

    $link = koneksi();
    // Prepare SQL query for delete
    $stmt = $link->prepare("DELETE FROM dokter WHERE idDokter = ?");
    $stmt->bind_param("s", $idDokter);

    if (!$stmt->execute()) {
        die("Error executing query: " . $stmt->error);
    }

    $stmt->close();
    $link->close();

    // Redirect back to dokter.php after deletion
    header("Location: dokter.php");
    exit();
}
?>
