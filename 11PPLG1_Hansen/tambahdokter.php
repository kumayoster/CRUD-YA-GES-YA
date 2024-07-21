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
                <h3>Tambah Data Dokter</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idDokter">ID Dokter</label>
                        <input type="text" class="form-control mb-3" name="idDokter" placeholder="need your id">
                    </div>
                    <div class="form-group">
                        <label for="nmDokter">Nama Dokter</label>
                        <input type="text" class="form-control mb-3" name="nmDokter" placeholder="namek">
                    </div>
                    <div class="form-group">
                        <label for="spesialisasi">skillnya apa dek?</label>
                        <input type="text" class="form-control mb-3" name="spesialisasi" placeholder="sekil">
                    </div>
                    <div class="form-group mt-3">
                        <label for="noTelp">No Telp</label>
                        <textarea name="noTelp" id="noTelp" cols="5" rows="3" placeholder="no telpnya say" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>