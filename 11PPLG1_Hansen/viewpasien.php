<?php
require_once 'koneksi.php'; // Include koneksi.php to use the function

// Create a database connection
$koneksi = new mysqli("localhost", "root", "", "hansen_xipplg1"); // Update with your actual credentials

// Check the connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error); // Stops further execution if connection fails
}

// Call the function to get patient data
$isiTabelPasien = getTabelPasien($koneksi); // Use the correct function name

// Redirect to controller_pasien.php after fetching data
header('Location: controller_pasien.php');
exit(); // Stop further execution after header redirection
?>
