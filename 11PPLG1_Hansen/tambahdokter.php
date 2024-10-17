<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h3>Tambah Dokter</h3>
    <form action="controller_dokter.php" method="POST">
        <div class="mb-3">
            <label for="idDokter" class="form-label">ID Dokter</label>
            <input type="text" class="form-control" id="idDokter" name="idDokter" required>
        </div>
        <div class="mb-3">
            <label for="nmDokter" class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" id="nmDokter" name="nmDokter" required>
        </div>
        <div class="mb-3">
            <label for="spesialisasi" class="form-label">Spesialisasi</label>
            <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" required>
        </div>
        <div class="mb-3">
            <label for="noTelp" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="noTelp" name="noTelp" required>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
