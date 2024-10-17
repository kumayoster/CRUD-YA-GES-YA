<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        function hapus(id) {
            if (confirm('Yakin?')) {
                window.location.href = 'koneksi.php?idDokter=' + id;
            } else {
                return true;
            }
        }
    </script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">My Dokter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
            <a href="index.html" class="nav-link mb-2" aria-current="page">home</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link mb-2" aria-current="page">Dokter</a>
        </li>
        <li class="nav-item">
            <a href="pasien.php" class="nav-link mb-2" aria-current="page">Pasien</a>
        </li>
        <li class="nav-item">
            <a href="kunjungan.php" class="nav-link mb-2" aria-current="page">kunjungan</a>
        </li>
    </ul>
</div>

        </div>
    </nav>

    <div class="row mt-3">
        <div class="col-sm">
            <h3>Tabel Dokter</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="tambahdokter.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
        <table class="table table-striped table-hover table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Dokter</th>
                <th>Nama Dokter</th>
                <th>Spesialisasi</th>
                <th>No. Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include 'koneksi.php';  // Include the connection file

        $link = koneksi();
        // Query to fetch doctor data
        $query = "SELECT * FROM dokter";
        $result = mysqli_query($link, $query);

        // Check if there are any rows
        if ($result && mysqli_num_rows($result) > 0) {
            $no = 1;  // Row number initialization
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$no}</td>";
                echo "<td>{$data['idDokter']}</td>";
                echo "<td>{$data['nmDokter']}</td>";
                echo "<td>{$data['spesialisasi']}</td>";
                echo "<td>{$data['noTelp']}</td>";
                echo "<td>
                        <a href='editdokter.php?edit={$data['idDokter']}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='controller_dokter.php?idDokter={$data['idDokter']}' class='btn btn-danger btn-sm'>Hapus</a>
                      </td>";
                echo "</tr>";
                $no++;  // Increment row number
            }
        } else {
            echo "<tr><td colspan='6'>No data available.</td></tr>";
        }

        mysqli_close($link);
        ?>
        </tbody>
    </table>
        </div>
    </div>
</div>
</body>
</html>
