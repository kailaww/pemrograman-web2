<?php
  if(isset($_COOKIE['theme'])){
   setcookie('theme', $theme_value);
  }
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <div class="row">
        <div class="col-6">
            <h1>form update data buku</h1>
            <form action="/index.php/buku/update" method="POST">
            <input type="hidden" name ="id_buku" value ="<?= $buku->getId();?>">
                <div class="mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="<?= $buku->getJudul();?>">
                </div>
                <div class="mb-3">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?= $buku->getPengarang();?>">
                </div>
                <div class="mb-3">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $buku->getPenerbit();?>">
                </div>
                <div class="mb-3">
                    <label for="tahun">Tahun</label>
                    <input type="text" name="tahun" id="tahun" class="form-control" value="<?= $buku->getTahun();?>">       
                </div>
                <div class="mb-3">
                  <a class="btn btn-secondary" href="/index.php">Kembali</a>

                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </div>
            </form>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>