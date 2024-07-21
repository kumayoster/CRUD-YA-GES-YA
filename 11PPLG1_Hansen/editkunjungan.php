<html>
<head>
    <title>My App | Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <div class="col-4">
            <h3>Edit Data Pasien</h3>
            <?php
            include 'koneksi.php';

            $panggil = $koneksi->query("SELECT * FROM kunjungan WHERE idKunjungan='$_GET[edit]'");

            while ($row = $panggil->fetch_assoc()) {
            ?>
            <form action="koneksi.php" method="POST">
                <div class="form-group">
                    <label for="idKunjungan">ID Kunjungan</label>
                    <input type="text" class="form-control mb-3" name="idKunjungan" placeholder="Id kunjungan" value="<?= $row['idKunjungan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="idPasien">ID Pasien</label>
                    <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien" value="<?= $row['idPasien'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="idDokter">ID Dokter</label>
                    <input type="text" class="form-control mb-3" name="idDokter" placeholder="id dokter" value="<?= $row['idDokter'] ?>" readonly>
                </div>
                <div class="form-group mt-3">
                    <label for="tanggal">tanggal</label>
                    <input type="date" class="form-control mb-3" name="tanggal"  value="<?= $row['tanggal'] ?>">
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <input type="text" class="form-control mb-3" name="keluhan" placeholder="keluhan" value="<?= $row['keluhan'] ?>">
                </div>
                <div class="form-group mt-3">
                    <input type="submit" name="simpan2" value="Simpan" class="form-control btn btn-primary">
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>