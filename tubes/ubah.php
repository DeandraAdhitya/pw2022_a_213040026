<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// Query data mahasiswa berdasarkan id
$id = $_GET["id"];
$row = query("SELECT * FROM tanaman WHERE id = $id")[0];


// Ketika tombol tambah diklik :
    if(isset($_POST["ubah"])) {
        // Jalankan fungsi ubah();
        if(ubah($_POST) > 0) {
            echo '<script> alert("Data berhasil diubah"); window.location="index.php";</script>';
        }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Data Tanaman</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div class="container">
      <h1>Form Ubah Data Tanaman</h1>

      <a href="index.php">Kembali ke Daftar Tanaman</a>

    <div class="rows mt-3">
        <div class="col-5">
            <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $row["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $row["gambar"]; ?>">

                <div class="mb-3">
                <label for="nama_tanaman" class="form-label">Nama Tanaman</label>
                <input type="text" class="form-control" id="nama_tanaman" name="nama_tanaman" required value="<?= $row["nama_tanaman"]; ?>">
                </div>  

                <div class="mb-3">
                <label for="nama_latin" class="form-label">Nama Latin</label>
                <input type="text" class="form-control" id="nama_latin" name="nama_latin" required value="<?= $row["nama_latin"]; ?>">
                </div>

                <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="jenis" class="form-control" id="jenis" name="jenis" required value="<?= $row["jenis"]; ?>">
                </div>

                <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label> <br>
                <img src="img/<?= $row['gambar']; ?>" width="50"> <br>
                <input type="file" class="form-control" id="gambar" name="gambar">
                </div>

                <button type="submit" class="btn btn-primary" name="ubah">Ubah Data Tanaman</button>

            </form>
        </div>
    </div>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>