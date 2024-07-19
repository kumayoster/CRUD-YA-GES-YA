<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Kunjungan</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idKunjungan">ID Kunjungan</label>
                        <input type="text" class="form-control mb-3" name="idKunjungan" placeholder="Bikin ID-nya">
                    </div>
                    <div class="form-group">
                        <label for="idPasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien">
                    </div>
                    <div class="form-group">
                        <label for="idDokter">ID Dokter</label>
                        <input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter">
                    </div>
                    <div class="form-group mt-3">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control mb-3" name="tanggal">
                    </div>
                    <div class="form-group mt-3">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="form-control mb-3" name="keluhan" placeholder="Keluhan">
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan2" value="Simpan2" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
