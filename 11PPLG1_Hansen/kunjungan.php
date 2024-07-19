<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        function hapus(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                window.location.href = 'koneksi.php?idKunjungan=' + id;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Buang Uang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 bm-lg-0">
    <li class="nav-item">
            <a href="index.html" class="nav-link mb-2" aria-current="page">home</a>
        </li>
        <li class="nav-item">
            <a href="dokter.php" class="nav-link mb-2" aria-current="page">Dokter</a>
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
            <h3>Tabel Kunjungan</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="tambahkunjungan.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Uang Kami</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <table class="table table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Kunjungan</th>
                        <th>idPasien</th>
                        <th>idDokter</th>
                        <th>tanggal</th>
                        <th>Keluhan</th>
                    </tr>
                </thead>
                 <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM kunjungan");
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['idKunjungan']; ?></td>
                        <td><?= $row['idPasien']; ?></td>
                        <td><?= $row['idDokter']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['keluhan']; ?></td>
                        <td>
                            <a href="editkunjungan.php?edit=<?= $row['idKunjungan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="return hapus('<?= $row['idKunjungan']; ?>')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
