<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
// cek apakah tombol submit ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil di tambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal di tambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Tanaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <h1>Form Tambah Data Tanaman</h1>

    <a href="index.php">Kembali Ke Daftar Tanaman</a>
    <div class="rows mt-3">
        <div class="col-5">
            <form action="" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Tanaman</label>
                <input type="text" class="form-control" id="nama_tanaman" name="nama_tanaman" required>
            </div>

            <div class="mb-3">
                <label for="nama_latin" class="form-label">Nama Latin</label>
                <input type="text" class="form-control" id="nama_latin" name="nama_latin" required>
            </div>

            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>

                <button type="submit" class="btn btn-secondary" name="submit">Tambah Data Tanaman</button>

            </form>
        </div>
    </div>
</div>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>