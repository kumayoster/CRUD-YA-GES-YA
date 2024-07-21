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

            $panggil = $koneksi->query("SELECT * FROM dokter WHERE idDokter='$_GET[edit]'");

            while ($row = $panggil->fetch_assoc()) {
            ?>
            <form action="koneksi.php" method="POST">
                <div class="form-group">
                    <label for="idDokter">ID Dokter</label>
                    <input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter" value="<?= $row['idDokter'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nmDokter">Nama Dokter</label>
                    <input type="text" class="form-control mb-3" name="nmDokter" placeholder="Nama dokter" value="<?= $row['nmDokter'] ?>">
                </div>
                <div class="form-group">
                    <label for="spesialisasi">spesialisasi</label>
                    <input type="text" class="form-control mb-3" name="spesialisasi" placeholder="Sekil" value="<?= $row['spesialisasi'] ?>">
                </div>
                <div class="form-group mt-3">
                    <label for="noTelp">No Telp</label>
                    <textarea class="form-control" name="noTelp" id="noTelp" cols="5" rows="3" placeholder="no telp"><?= $row['noTelp'] ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" name="simpan1" value="Simpan" class="form-control btn btn-primary">
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>