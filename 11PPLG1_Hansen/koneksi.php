<?php
// Function to establish database connection
function koneksi()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "hansen_xipplg1";

    $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    // Check for connection error
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $link;
}

// Function to get the list of patients
function getTabelPasien()
{
    $link = koneksi();  // Get database connection
    $query = "SELECT * FROM pasien";  // SQL query to fetch patient data
    $result = mysqli_query($link, $query);  // Execute query
    
    // Check if query was successful
    if ($result) {
        $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);  // Fetch all results
        return $hasil;
    } else {
        echo "Error fetching patient data: " . mysqli_error($link);
        return [];
    }
}

// Handling patient data insertion and update
if (isset($_POST['simpan'])) {
    $link = koneksi();  // Establish connection
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // Insert or update patient data
    $link->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) VALUES ('$idPasien', '$nmPasien', '$jk', '$alamat') 
    ON DUPLICATE KEY UPDATE nmPasien='$nmPasien', jk='$jk', alamat='$alamat'") or die($link->error);

    header('Location: pasien.php');
}

// Handling patient data deletion
if (isset($_GET['idPasien'])) {
    $link = koneksi();  // Establish connection
    $idPasien = $_GET['idPasien'];
    $link->query("DELETE FROM pasien WHERE idPasien = '$idPasien'") or die($link->error);
    header("Location: pasien.php");
}

// Handling doctor data insertion and update
if (isset($_POST['simpan1'])) {
    $link = koneksi();  // Establish connection
    $idDokter = $_POST['idDokter'];
    $nmDokter = $_POST['nmDokter'];
    $spesialisasi = $_POST['spesialisasi'];
    $noTelp = $_POST['noTelp'];

    // Insert or update doctor data
    $link->query("INSERT INTO dokter (idDokter, nmDokter, spesialisasi, noTelp) VALUES ('$idDokter', '$nmDokter', '$spesialisasi', '$noTelp') 
    ON DUPLICATE KEY UPDATE nmDokter='$nmDokter', spesialisasi='$spesialisasi', noTelp='$noTelp'") or die($link->error);

    header('Location: dokter.php');
}

// Handling doctor data deletion
if (isset($_GET['idDokter'])) {
    $link = koneksi();  // Establish connection
    $idDokter = $_GET['idDokter'];
    $link->query("DELETE FROM dokter WHERE idDokter = '$idDokter'") or die($link->error);
    header("Location: dokter.php");
}

// Handling visit data insertion and update
if (isset($_POST['simpan2'])) {
    $link = koneksi();  // Establish connection
    $idKunjungan = $_POST['idKunjungan'];
    $idPasien = $_POST['idPasien'];
    $idDokter = $_POST['idDokter'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];

    // Insert or update visit data
    $query = "INSERT INTO kunjungan (idKunjungan, idPasien, idDokter, tanggal, keluhan) VALUES ('$idKunjungan', '$idPasien', '$idDokter', '$tanggal', '$keluhan') 
    ON DUPLICATE KEY UPDATE tanggal='$tanggal', keluhan='$keluhan'";
    $link->query($query) or die($link->error);

    header('Location: kunjungan.php');
}

// Handling visit data deletion
if (isset($_GET['idKunjungan'])) {
    $link = koneksi();  // Establish connection
    $idKunjungan = $_GET['idKunjungan'];
    $link->query("DELETE FROM kunjungan WHERE idKunjungan = '$idKunjungan'") or die($link->error);
    header("Location: kunjungan.php");
}
?>
