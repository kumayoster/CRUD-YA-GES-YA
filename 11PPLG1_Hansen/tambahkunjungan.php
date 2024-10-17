<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kunjungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h3>Tambah Kunjungan</h3>
    <form action="controller_kunjungan.php" method="POST">
        <div class="mb-3">
            <label for="idKunjungan" class="form-label">ID Kunjungan</label>
            <input type="text" class="form-control" id="idKunjungan" name="idKunjungan" required>
        </div>
        <div class="mb-3">
            <label for="idPasien" class="form-label">ID Pasien</label>
            <input type="text" class="form-control" id="idPasien" name="idPasien" required>
        </div>
        <div class="mb-3">
            <label for="idDokter" class="form-label">ID Dokter</label>
            <input type="text" class="form-control" id="idDokter" name="idDokter" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea class="form-control" id="keluhan" name="keluhan" required></textarea>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
